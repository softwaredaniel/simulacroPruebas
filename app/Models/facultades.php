<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facultades extends Model
{
    use HasFactory;
/**
* Accedemos a los datos
*
* */
protected $table='facultades';
    protected $fillable = [
        'id',
        'descripcion',
        'id_usuario',
        'created_at',
        'updated_at',
    ];
    public function relacionFac(){
        return $this->belongsTo(programas::class,'id_respuesta','id_pregunta');
    }
    public function relacionUser(){
        return $this->hasMany(User::class,'id','id_usuario');
    }
}
