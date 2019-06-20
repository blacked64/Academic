<?php

namespace App;

use App\Nota;
use App\Profesor;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'nombre', 'descripcion', 'grado'
    ];


    //Relations

    public function profesores()
    {
    	return $this->belongsToMany(Profesor::class)->withTimestamps();
    }

    public function scopeSearch($query, $name)
    {
        $query->where('nombre',"LIKE", "%$name%");
    }

}
