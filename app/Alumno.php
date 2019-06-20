<?php

namespace App;

use App\Nota;
use App\Seccion;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

    const CURSO = [
        '1 año' => 1,
        '2 año' => 2,
        '3 año' => 3,
        '4 año' => 4,
        '5 año' => 5
    ];

    const SECCION = [
      'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'nombre', 'cedula', 'direccion', 'telefonos', 'grado', 'seccion'
    ];

    //Relations
    public function notas()
    {
    	return $this->hasMany(Nota::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->where('nombre',"LIKE", "%$value%")
              ->orwhere('cedula',"LIKE", "%$value%");
    }
/*
    public function setCedulaAttribute($value)
    {
        $this->attributes['cedula'] = "V-".$value;
    }
*/
}
