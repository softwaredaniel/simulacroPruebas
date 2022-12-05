<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programas extends Model
{
    use HasFactory;
/**
* Accedemos a los datos
*
* */
protected $table='programas';
    protected $fillable = [
        'id_programa',
        'descripcion',
        'id_facultad',
        'created_at',
        'updated_at',
    ];
    public function relacionPro(){
        return $this->belongsTo(facultades::class,'id_facultad');
    }

   
   
}
