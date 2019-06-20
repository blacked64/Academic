<?php

namespace App;

use App\Materia;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'nombre', 'cedula', 'direccion', 'telefonos'
    ];


    //Relations

    public function materias()
    {
    	return $this->belongsToMany(Materia::class)->withTimestamps();
    }

    public function scopeSearch($query, $name)
    {
        $query->where('nombre',"LIKE", "%$name%");
    }

}

