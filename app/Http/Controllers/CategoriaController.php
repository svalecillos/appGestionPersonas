<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categoria;

class CategoriaController extends Controller
{
	private $mensajes = ['descripcion.required' => 'El campo es obligatorio'];

    public function listarCategorias(){
        $categorias = categoria::all();
        return view('categoria.listarCategorias' , compact('categorias'));
    }

    public function viewCategoria(){
    	return view('categoria.registrarCategoria');
    }

    public function registrarCategoria(Request $request){
    	
    	$rules = [
    		'descripcion' => 'required|max:50',
    	];

    	$this->validate($request, $rules, $this->mensajes);

    	categoria::create($request->all());

    	return redirect()->route('listarCategorias')->with('mensaje','La categoria ha sido registrado satisfactoriamente');
    }

    public function viewCategoriaEditar($id){
    	 $categoria = categoria::find($id);

    	 return view('categoria.editarCategoria', compact('categoria'));
    }

    public function editarCategoria(categoria $categoria, Request $request){
    	$rules = [
    		'descripcion' => 'required|max:50',
    	];

    	$this->validate($request, $rules, $this->mensajes);
    	
    	$categoria->update($request->all());

    	return redirect()->route('listarCategorias')->with('mensaje','La categoria fue actualizada satisfactoriamente');
    }

    public function eliminar($id){
    	$categoria = categoria::find($id);
    	$categoria->delete();
    	return redirect()->route('listarCategorias')->with('mensaje','La categoria fue eliminada satisfactoriamente');
    }
}
