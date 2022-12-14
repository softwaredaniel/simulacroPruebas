<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignaturas extends Model
{
    use HasFactory;
/**
* Accedemos a los datos
*
* 
*/
protected $table='asignaturas';
    protected $fillable = [
        'id',
        'descripcion',
        'id_programas',
        'created_at',
        'updated_at',
    ];

    public function relacionProgAsignaturas(){
        return $this->belongsTo(programas::class,'id','id');
    }
    public function relacionProPreguntas(){
        return $this->belongsTo(preguntas::class,'id','id');
    }
}
