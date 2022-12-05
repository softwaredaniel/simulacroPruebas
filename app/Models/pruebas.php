<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pruebas extends Model
{
    use HasFactory;

    
/**
* Accedemos a los datos
*
* 
*/
protected $table='pruebas';
protected $fillable = [
    'id',
    'id_usuario',
    'puntaje',
    'fecha',
    'created_at',
    'updated_at',

];
public function relacionPruebaRespuesta(){
    return $this->hasOne(respuestas::class,'id_respuesta');
}
public function relacionUser(){
    return $this->hasOne(User::class,'id');
}

}
