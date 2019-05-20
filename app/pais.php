<?php

namespace App;

use App\datosPersona;
use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $table = 'pais';

    protected $fillable =['codigo','descripcion'];

    //protected $primaryKey = 'codigo';

    public function persona(){
        return $this->hasMany(datosPersona::class);
    }
}
