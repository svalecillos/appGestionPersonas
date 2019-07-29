<?php

namespace App\Http\Controllers;

use App\datosPersona;
use App\promocion;
use App\categoria;
use App\profesion;
use App\nivel_academico;
use App\pais;

use Carbon\Carbon;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class PersonasController extends Controller
{

    private $mensajes = [
                'nombres.required' => 'El campo nombres es obligatorio',
                'categoria_id' => 'El campo categorial es obligatorio',
                'primer_apellido.required' => 'El campo primer apellido es obligatorio',
                'cedula.required' => 'El campo cedula es obligatorio',
                'cedula.unique' => 'La cedula ya existe',
            ];

    /**
    *   Contiene todas las validaciones de los formularios para el registro y 
    *   actualizacion de la persona
    **/
    public function validacionesFormulario(Request $request){
        $rules = [
            'nombres' => 'required|max:150',
            'apodos' => 'max:100',
            'primer_apellido' => 'required|max:100',
            'segundo_apellido' => 'max:100',
            'cedula' => 'required|unique:datos_personas|max:10',
            'correo' => 'max:100',
            'telefono' => 'required|max:50',
            /*'fecha_nacimiento' => 'required',*/
            /*'promocion_id' => 'required',*/
            /*'fecha_ingreso' => 'required',*/
            /*'fecha_egreso' => 'required',*/
            'categoria_id' => 'required',
            /*'nivel_academico_id' => 'required',*/
            /*'profesion_id' => 'required',*/
            'especialidad' => 'max:100',
            'ocupacion' => 'max:100',
            'instagram' => 'max:60',
            'twitter' => 'max:60',
            'linkeding' => 'max:150',
            'facebook' => 'max:150',
            'cod_pais' => 'max:10',
            'estado' => 'max:100',
            'ciudad' => 'max:100',
            'Sector' => 'max:100'
        ];

        $this->validate($request, $rules, $this->mensajes);
    }

    public function crearSelectAnio(){

        $arrAnio = [];

        for($i=1950; $i<=2030;$i++){
            array_push($arrAnio, $i);
        }

        return $arrAnio;
    }

    /**
     * Carga la vista para listar personas
     */
    public function listarPersonas(){
        $personas = datosPersona::all();
        return view('personas.listarPersonas' , compact('personas'));
    }

    /**
     * Carga la vista para registrar personas
     */
    public function viewRegistrarPersona(){
        
        $anios = $this->crearSelectAnio();
        $promociones = promocion::all();
        $categorias = categoria::all();
        $profesiones = profesion::all();
        $nivelesAcademicos = nivel_academico::all();
        $paises = pais::all();

        return view('personas.registrarPersona', compact('promociones', 'categorias', 'profesiones', 
                                                'nivelesAcademicos', 'paises', 'anios'));
    }

    /**
    *   Inserta en la db los datos de la persona
    **/
    public function registrarPersona(Request $request){
        
        $datosPersona = new datosPersona();

        $this->validacionesFormulario($request);

        $datosPersona->fill($request->except(['cedula','fecha_nacimiento']));
        $datosPersona->fecha_nacimiento= Carbon::parse($request->fecha_nacimiento)->format('Y-m-d');
        //Borramos todo lo que no sea datos numericos
        $datosPersona->cedula = preg_replace('/\D/', '', $request->cedula);

        $datosPersona->save();

        return redirect()->route('principal')->with('mensaje','La persona ha sido registrada satisfactoriamente');
    }

    /**
    *   Carga el formulario para actualizar la persona
    **/
    public function viewEditarPersona($id){

        $datosPersona = datosPersona::find($id);

        $datosPersona->fecha_nacimiento= Carbon::parse($datosPersona->fecha_nacimiento)->format('d-m-Y');

        $anios = $this->crearSelectAnio();
        $promociones = promocion::all();
        $categorias = categoria::all();
        $profesiones = profesion::all();
        $nivelesAcademicos = nivel_academico::all();
        $paises = pais::all();

        return view('personas.editarPersona', compact('datosPersona', 'promociones', 'categorias', 
                                            'profesiones', 'nivelesAcademicos', 'paises', 'anios'));
    }

    /**
    *   Actualiza los datos de la persona
    **/
    public function editarDatosPersona(datosPersona $datosPersona, Request $request){

        $rules = [
            'nombres' => 'required|max:150',
            'apodos' => 'max:100',
            'primer_apellido' => 'required|max:100',
            'segundo_apellido' => 'max:100',
            'cedula' => ['required',Rule::unique('datos_personas')->ignore($datosPersona->id),'max:10'],
            'correo' => 'max:100',
            'telefono' => 'required|max:50',
            /*'fecha_nacimiento' => 'required',*/
            /*'promocion_id' => 'required',*/
            /*'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',*/
            'categoria_id' => 'required',
            /*'nivel_academico_id' => 'required',
            'profesion_id' => 'required',*/
            'especialidad' => 'max:100',
            'ocupacion' => 'max:100',
            'instagram' => 'max:60',
            'twitter' => 'max:60',
            'linkeding' => 'max:150',
            'facebook' => 'max:150',
            'cod_pais' => 'max:10',
            'estado' => 'max:100',
            'ciudad' => 'max:100',
            'Sector' => 'max:100'
        ];

        $this->validate($request, $rules, $this->mensajes);

        /*$datosPersona->fill($request->except(['fecha_nacimiento', 'fecha_ingreso', 'fecha_egreso']));*/
        $datosPersona->fill($request->except(['cedula','fecha_nacimiento']));

        $datosPersona->fecha_nacimiento= Carbon::parse($request->fecha_nacimiento)->format('Y-m-d');
        //Borramos todo lo que no sea datos numericos
        $datosPersona->cedula = preg_replace('/\D/', '', $request->cedula);

        $datosPersona->save();

        return redirect()->route('principal')->with('mensaje','Los datos de la persona fueron actualizados satisfactoriamente');
    }

    public function eliminar($id){
        $datosPersona = datosPersona::find($id);
        $datosPersona->delete();
        return redirect()->route('principal')->with('mensaje','Persona eliminada satisfactoriamente');;
    }
}
