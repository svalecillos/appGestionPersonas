<?php

namespace App\Http\Controllers;

use App\promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    private $mensajes = ['descripcion.required' => 'El campo es obligatorio'];

    public function listarPromociones(){
        $promociones = promocion::all();
        return view('promocion.listarPromocion' , compact('promociones'));
    }

    public function viewFormPromocion(){
    	return view('promocion.registrarPromocion');
    }

    public function registrarPromocion(Request $request){
    	
    	$rules = [
    		'descripcion' => 'required|max:50',
    	];

    	$this->validate($request, $rules, $this->mensajes);

    	promocion::create($request->all());

    	return redirect()->route('listarPromociones')->with('mensaje','La promocion ha sido registrado satisfactoriamente');
    }

    public function viewPromocionEditar($id){
        $promocion = promocion::find($id);

        return view('promocion.editarPromocion', compact('promocion'));
   }

    public function editarPromocion(promocion $promocion, Request $request){
        $rules = [
            'descripcion' => 'required|max:50',
        ];

        $this->validate($request, $rules, $this->mensajes);
        
        $promocion->update($request->all());

        return redirect()->route('listarPromociones')->with('mensaje','La Promocion fue actualizada satisfactoriamente');
    }
}
