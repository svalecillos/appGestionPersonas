<?php

namespace App\Http\Controllers;

use App\datosPersona;
use App\promocion;
use App\categoria;
use App\profesion;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function listarPersonas(){
        $personas = datosPersona::all();
        return view('personas.listarPersonas' , compact('personas'));
    }

    public function viewRegistrarPersona(){

        $promociones = promocion::all();
        $categorias = categoria::all();
        $profesiones = profesion::all();

        return view('personas.registrarPersona', compact('promociones', 'categorias', 'profesiones'));
    }

    public function registrarPersona(Request $request){
        $rules = [
            'nombres' => 'required|max:100',
            'primer_apellido' => 'required|max:50',
            'segundo_apellido' => 'max:50',
            'cedula' => 'required|unique:datos_personas|max:10',
            'correo' => 'required|email|unique:datos_personas|max:60',
            'telefono' => 'required|max:15',
            'fecha_nacimiento' => 'required',
            'promocion' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',
            'categoria' => 'required',
            'profesion' => 'required',
            'especialidad' => 'max:100',
            'ocupacion' => 'max:100',
            'paises' => 'required|max:5',
            'estados' => 'required|max:100',
            'ciudades' => 'max:100',
            'Sector' => 'max:100'
        ];

        $mensajes = [
            'nombres.required' => 'El campo nombres es obligatorio',
            'primer_apellido.required' => 'El campo primer apellido es obligatorio',
            'cedula.required' => 'El campo cedula es obligatorio',
            'cedula.unique' => 'La cedula ya existe',
            'correo.required' => 'El campo correo es obligatorio',
            'correo.unique' => 'El correo ya esta registrado',
            'telefono.required' => 'El campo telefono es obligatorio',
            'fecha_nacimiento.required' => 'El campo fecha de nacimiento es obligatorio',
            'promocion.required' => 'El campo promocion es obligatorio',
            'fecha_ingreso.required' => 'El campo fecha de ingreso es obligatorio',
            'fecha_egreso.required' => 'El campo fecha de egreso es obligatorio',
            'categoria.required' => 'El campo categoria es obligatorio',
            'profesion.required' => 'El campo profesion es obligatorio',
            'paises.required' => 'El campo paises es obligatorio',
            'estados.required' => 'El campo estados es obligatorio',
        ];
        dd($request->all());
        $this->validate($request, $rules, $mensajes);

        datosPersona::create($request->all());

        return redirect()->route('listarPersonas')->with('mensaje','Success');;
    }

    public function viewEditarPersona($id){

    }
}
