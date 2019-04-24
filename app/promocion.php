<?php

namespace App;

use App\datosPersona;
use Illuminate\Database\Eloquent\Model;

class promocion extends Model
{
    protected $table = 'promocions';

    protected $fillable =['descripcion','status'];

    public function persona(){
        return $this->hasMany(datosPersona::class);
    }
}
