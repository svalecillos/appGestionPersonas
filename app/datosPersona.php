<?php

namespace App;

use App\categoria;
use App\profesion;
use App\promocion;
use App\nivel_academico;
use App\pais;

use Illuminate\Database\Eloquent\Model;

class datosPersona extends Model
{
    protected $table = 'datos_personas';

    protected $fillable =[
        'nombres', 'apodos','primer_apellido','segundo_apellido','cedula', 'telefono', 'fecha_nacimiento',
        'correo', 'promocion_id', 'fecha_ingreso', 'fecha_egreso', 'categoria_id', 'nivel_academico_id' ,'profesion_id', 
        'especialidad' , 'ocupacion','instagram','twitter','cod_pais', 'estado', 'ciudad','sector'
    ];

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function promocion(){
        return $this->belongsTo(promocion::class);
    }

    public function profesion(){
        return $this->belongsTo(profesion::class);
    }

    public function nivelAcademico(){
        return $this->belongsTo(nivel_academico::class);
    }

    public function pais(){
        return $this->belongsTo(pais::class, 'cod_pais', 'codigo');
    }
}
