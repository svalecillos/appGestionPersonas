<?php

namespace App\Http\Controllers;

use App\profesion;
use Illuminate\Http\Request;

class ProfesionController extends Controller
{
    private $mensajes = ['descripcion.required' => 'El campo es obligatorio'];

    public function listarProfesiones(){
        $profesiones = profesion::all();
        return view('profesion.listarProfesiones' , compact('profesiones'));
    }

    public function viewFormProfesion(){
    	return view('profesion.registrarProfesion');
    }

    public function registrarProfesion(Request $request){
    	
    	$rules = [
    		'descripcion' => 'required|max:50',
    	];

    	$this->validate($request, $rules, $this->mensajes);

    	profesion::create($request->all());

    	return redirect()->route('listarProfesion')->with('mensaje','La profesion ha sido registrado satisfactoriamente');
    }

    public function viewProfesionEditar($id){
        $profesion = profesion::find($id);

        return view('profesion.editarProfesion', compact('profesion'));
   }

    public function editarProfesion(profesion $profesion, Request $request){
        $rules = [
            'descripcion' => 'required|max:50',
        ];

        $this->validate($request, $rules, $this->mensajes);
        
        $profesion->update($request->all());

        return redirect()->route('listarProfesion')->with('mensaje','La profesion fue actualizada satisfactoriamente');
    }

    public function eliminar($id){
        $profesion = profesion::find($id);
        $profesion->delete();
        return redirect()->route('listarProfesion')->with('mensaje','La profesion fue eliminada satisfactoriamente');
    }
}
