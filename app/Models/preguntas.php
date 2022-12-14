<?php

namespace App\Models;
use App\Models\respuestas;
use App\Models\asignaturas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    use HasFactory;
    protected $table='preguntas';
    protected $fillable = [
        'id',
        'pregunta',
        'nivel',
        'id_asignatura',
        'id_respuesta',
        'created_at',
        'updated_at',
    ];
    public function relacion(){
        return $this->belongsTo(respuestas::class,'id_respuesta');
    }
    public function asignatura(){
        return $this->belongsTo(asignaturas::class,'id_asignatura');
    }
  
  
}
