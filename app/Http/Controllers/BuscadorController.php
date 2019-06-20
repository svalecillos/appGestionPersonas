<?php

namespace App\Http\Controllers;

use App\datosPersona;
use App\promocion;
use App\categoria;
use App\profesion;
use App\nivel_academico;
use App\pais;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    private $mensajes = [
        'cedula.required' => 'El campo cedula es obligatorio',
    ];

    public function crearSelectAnio(){

        $arrAnio = [];

        for($i=1950; $i<=2030;$i++){
            array_push($arrAnio, $i);
        }

        return $arrAnio;
    }

    public function index(){
        return view('buscador.buscador');
    }

    public function buscarPersona(Request $request){

        $rules = [
            'cedula' => 'required'
        ];

        $this->validate($request, $rules, $this->mensajes);

        //Consultamos la C.I en la db y obtenemos una coleccion.
        $datosPersona = datosPersona::where('cedula',$request->cedula)->get();
        
        //Listas Catalogos
        $anios = $this->crearSelectAnio();
        $promociones = promocion::all();
        $categorias = categoria::all();
        $profesiones = profesion::all();
        $nivelesAcademicos = nivel_academico::all();
        $paises = pais::all();
        
        //Si consigue al usuario, ira al formulario para la actualizacion
        if(!$datosPersona->isEmpty()){
            //Obtenemos el primer valor de la coleccion que es el modelo, para poder enviarselo a la vista.
            $datosPersona = $datosPersona->first();
            return view('personas.editarPersona', compact('datosPersona', 'promociones', 
                                                            'categorias', 'profesiones', 
                                                            'nivelesAcademicos', 'paises','anios'));
        }

        //Si no, ira al formulario del registro
        return view('personas.registrarPersona', compact('promociones', 'categorias', 
                                                          'profesiones', 'nivelesAcademicos', 
                                                          'paises','anios'));
    }
}
