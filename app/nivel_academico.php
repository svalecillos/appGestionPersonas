<?php

namespace App;

use App\datosPersona;
use Illuminate\Database\Eloquent\Model;

class nivel_academico extends Model
{
    protected $table = 'nivel_academicos';

    protected $fillable =['descripcion','status'];

    public function persona(){
        return $this->hasMany(datosPersona::class);
    }
}
