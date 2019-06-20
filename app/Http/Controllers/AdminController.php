<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('index-director');
        $admins = User::whereHas('roles', function($q){
            $q->where('nombre_clave', 'coordinador')
              ->orWhere('nombre_clave', 'secretary');
        })->search(request('admin'))->paginate(5);

        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('index-director');
        $roles = Role::all()->only([2,3])->pluck('nombre_descriptivo', 'id');

        return view('admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('belongDirector', $request);
        $rules = [
            'email' => 'required|email|unique:users',
            'role' => 'integer|exists:roles,id',
            'password' => 'required|confirmed'
        ];

        $this->validate($request, $rules);

        $user = User::create($request->all());

        $user->roles()->sync($request->role);

        return redirect()->route('admin.index')->with('flash', 'Nuevo usuario generado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('index-director');
        $user = User::findorfail($id);
        return view('admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('index-director');
        $user = User::findorfail($id);
        $roles = Role::all()->only([2,3])->pluck('nombre_descriptivo', 'id');
        return view('admin.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('belongDirector', $request);
        $user = User::findorfail($id);
        $rules = [
            'email' => 'required|email|unique:users,email,'.$user->id,
            'role' => 'integer|exists:roles,id',
            'password' => 'nullable|confirmed'
        ];
        $this->validate($request, $rules);
        
        $user->update([
            'name' => $request->name ? $request->name : $user->name,
            'email' => $request->email ? $request->email : $user->email,
        ]);

        if($request->password)
        {
            $user->password = $request->password;
            $user->save();
        }

        $user->roles()->sync($request->role);

        return redirect()->route('admin.index')->with('flash', 'Usuario actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('index-director');
        $user = User::findorfail($id);

        foreach($user->roles as $role)
        {
            $role->pivot->delete();
        }

        $user->delete();

        return redirect()->route('admin.index')->with('flash', 'Usuario eliminado correctamente');
    }
}
