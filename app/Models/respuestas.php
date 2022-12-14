<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuestas extends Model
{
    use HasFactory;
    
   
    protected $fillable = [
        'id',
        'respuesta',
        'correcta',
        'id_pregunta',
        'created_at',
        'updated_at',
    ];
    public function relacionPregunta(){
        return $this->hasMany(preguntas::class,'id_pregunta');
    }
    public function relacionPrueba(){
        return $this->belongsTo(pruebas::class);
    }
   
}
