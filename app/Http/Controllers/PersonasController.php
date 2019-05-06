<?php

namespace App\Http\Controllers;

use App\datosPersona;
use App\promocion;
use App\categoria;
use App\profesion;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class PersonasController extends Controller
{

    private $mensajes = [
                'nombres.required' => 'El campo nombres es obligatorio',
                'primer_apellido.required' => 'El campo primer apellido es obligatorio',
                'cedula.required' => 'El campo cedula es obligatorio',
                'cedula.unique' => 'La cedula ya existe',
                'correo.required' => 'El campo correo es obligatorio',
                'correo.unique' => 'El correo ya esta registrado',
                'telefono.required' => 'El campo telefono es obligatorio',
                'fecha_nacimiento.required' => 'El campo fecha de nacimiento es obligatorio',
                'promocion_id.required' => 'El campo promocion es obligatorio',
                'fecha_ingreso.required' => 'El campo fecha de ingreso es obligatorio',
                'fecha_egreso.required' => 'El campo fecha de egreso es obligatorio',
                'categoria_id.required' => 'El campo categoria es obligatorio',
                'profesion_id.required' => 'El campo profesion es obligatorio',
                'pais.required' => 'El campo paises es obligatorio',
                'estado.required' => 'El campo estados es obligatorio',
            ];

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

    /**
    *   Contiene todas las validaciones de los formularios para el registro y 
    *   actualizacion de la persona
    **/
    public function validacionesFormulario(Request $request){
        $rules = [
            'nombres' => 'required|max:100',
            'primer_apellido' => 'required|max:50',
            'segundo_apellido' => 'max:50',
            'cedula' => 'required|unique:datos_personas|max:10',
            'correo' => 'required|email|unique:datos_personas|max:60',
            'telefono' => 'required|max:15',
            'fecha_nacimiento' => 'required',
            'promocion_id' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',
            'categoria_id' => 'required',
            'profesion_id' => 'required',
            'especialidad' => 'max:100',
            'ocupacion' => 'max:100',
            'instagram' => 'max:60',
            'twitter' => 'max:60',
            'pais' => 'required|max:5',
            'estado' => 'required|max:100',
            'ciudad' => 'max:100',
            'Sector' => 'max:100'
        ];

        $this->validate($request, $rules, $this->mensajes);
    }

    /**
    *   Inserta en la db los datos de la persona
    **/
    public function registrarPersona(Request $request){
        
        $this->validacionesFormulario($request);

        datosPersona::create($request->all());

        return redirect()->route('listarPersonas')->with('mensaje','La persona ha sido registrada satisfactoriamente');
    }

    /**
    *   Carga el formulario para actualizar la persona
    **/
    public function viewEditarPersona($id){

        $datosPersona = datosPersona::find($id);
        $promociones = promocion::all();
        $categorias = categoria::all();
        $profesiones = profesion::all();

        return view('personas.editarPersona', compact('datosPersona', 'promociones', 'categorias', 'profesiones'));
    }

    /**
    *   Actualiza los datos de la persona
    **/
    public function editarDatosPersona(datosPersona $datosPersona, Request $request){
        $rules = [
            'nombres' => 'required|max:100',
            'primer_apellido' => 'required|max:50',
            'segundo_apellido' => 'max:50',
            'cedula' => ['required',Rule::unique('datos_personas')->ignore($datosPersona->id),'max:10'],
            'correo' => ['required', 'email', Rule::unique('datos_personas')->ignore($datosPersona->id), 'max:60'],
            'telefono' => 'required|max:15',
            'fecha_nacimiento' => 'required',
            'promocion_id' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',
            'categoria_id' => 'required',
            'profesion_id' => 'required',
            'especialidad' => 'max:100',
            'ocupacion' => 'max:100',
            'instagram' => 'max:60',
            'twitter' => 'max:60',
            'pais' => 'required|max:5',
            'estado' => 'required|max:100',
            'ciudad' => 'max:100',
            'Sector' => 'max:100'
        ];

        $this->validate($request, $rules, $this->mensajes);

        $datosPersona->update($request->all());

        return redirect()->route('listarPersonas')->with('mensaje','Los datos de la persona fueron actualizados satisfactoriamente');
    }

    public function eliminar($id){
        $datosPersona = datosPersona::find($id);
        $datosPersona->delete();
        return redirect()->route('listarPersonas')->with('mensaje','Persona eliminada satisfactoriamente');;
    }
}
