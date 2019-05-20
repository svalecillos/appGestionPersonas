<?php

namespace App\Http\Controllers;

use App\nivel_academico;
use Illuminate\Http\Request;

class NivelAcademicoController extends Controller
{
    private $mensajes = ['descripcion.required' => 'El campo es obligatorio'];

    public function listarNivelAcademico(){
        $nivelAcademico = nivel_academico::all();
        return view('nivelAcademico.listarNivelAcademico' , compact('nivelAcademico'));
    }

    public function viewFormNivelAcademico(){
    	return view('nivelAcademico.registrarNivelAcademico');
    }

    public function registrarNivelAcademico(Request $request){
    	
    	$rules = [
    		'descripcion' => 'required|max:50',
    	];

    	$this->validate($request, $rules, $this->mensajes);

    	nivel_academico::create($request->all());

    	return redirect()->route('listarNivelAcademico')->with('mensaje','El nivel academico ha sido registrado satisfactoriamente');
    }
}
