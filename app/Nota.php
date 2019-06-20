<?php

namespace App;

use App\Alumno;
use App\Profesor;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'alumno_id', 'boletin'
    ];

    protected $casts = [
        'boletin' => 'array',
    ];

    //Relations

    public function alumno()
    {
    	return $this->belongsTo(Alumno::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->whereHas('alumno', function($q) use ($value){
            $q->where('cedula',"LIKE", "%$value%")
              ->orWhere('nombre', 'LIKE', "%$value%");
        });
    }

}
