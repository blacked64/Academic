<?php

namespace App;

use App\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    //Relations

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function hasRole(array $name)
    {
        return ($this->roles->pluck('nombre_clave')->intersect($name)->count()) ? true : false;
    }

    public function isSecretary()
    {
        return $this->hasRole(['secretary']);
    }

    public function isDirector()
    {
        return $this->hasRole(['director']);
    }

    public function isCoordinador()
    {
        return $this->hasRole(['coordinador']);
    }

    public function isTareaMateria()
    {
        return $this->hasRole(['tarea_materia']);
    }

    public function isTareaProfesor()
    {
        return $this->hasRole(['tarea_profesor']);
    }

    public function isTareaAlumno()
    {
        return $this->hasRole(['tarea_alumno']);
    }

    public function isTareaNotas()
    {
        return $this->hasRole(['tarea_notas']);
    }

    public function isTareaSeccion()
    {
        return $this->hasRole(['tarea_seccion']);
    }

    public function scopeSearch($query, $name)
    {
        $query->where('name',"LIKE", "%$name%");
    }

}
