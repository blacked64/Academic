<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'nombre_clave', 'nombre_descriptivo', 'descripcion'
    ];

    public function user()
    {
    	return $this->belongsToMany(User::class)->withTimestamps();
    }

}
