<?php

namespace App;

use App\datosPersona;
use Illuminate\Database\Eloquent\Model;

class profesion extends Model
{
    protected $table = 'profesions';

    protected $fillable =['descripcion','status'];

    public function persona(){
        return $this->hasMany(datosPersona::class);
    }
}
