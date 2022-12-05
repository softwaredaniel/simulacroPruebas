<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
/**
* Accedemos a los datos
*
* */
    protected $table='roles';
    protected $fillable = [
        'id',
        'descricion',];

        public function role(){
            return $this->HasMany('App\Models\User');
        }


}
