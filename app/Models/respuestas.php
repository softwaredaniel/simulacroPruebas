<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuestas extends Model
{
    use HasFactory;
    
    protected $table='respuestas';
    protected $fillable = [
        'id',
        'respuesta',
        'correcta',
        'id_pregunta',
        'created_at',
        'updated_at',
    ];
    public function relacionPregunta(){
        return $this->belongsTo(preguntas::class,'id','id_pregunta');
    }
    public function relacionPrueba(){
        return $this->belongsTo(pruebas::class);
    }
   
}
