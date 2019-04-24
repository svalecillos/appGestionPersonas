<?php

namespace App;

use App\datosPersona;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable =['descripcion','status'];

    public function persona(){
        return $this->hasMany(datosPersona::class);
    }
}
