<?php

namespace App;

use App\categoria;
use App\profesion;
use App\promocion;
use Illuminate\Database\Eloquent\Model;

class datosPersona extends Model
{
    protected $table = 'datos_personas';

    protected $fillable =[
        'nombres','primer_apellido','segundo_apellido','cedula', 'telefono', 'fecha_nacimiento',
        'correo', 'promocion_id', 'fecha_ingreso', 'fecha_egreso', 'categoria_id', 'profesion_id', 'especialidad' , 
        'ocupacion','instagram','twitter','pais', 'estado', 'ciudad','sector'
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
}
