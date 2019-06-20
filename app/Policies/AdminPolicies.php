<?php

namespace App\Policies;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicies
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(User $auth)
    {
        if($auth->isDirector())
        {
            return true;
        }
    }

    public function belongDirector(User $auth, Request $request)
    {
        if($auth->isDirector())
        {
            if($request->role <> 1)
            {
                return true;
            }
        }
    }

}
