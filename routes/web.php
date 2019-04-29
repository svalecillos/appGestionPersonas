<?php

//Index
//Route::get('/', '')->name();

//Home
Route::get('inicio', 'HomeController@index')
    ->name('principal');

//Modulo gestion personas
Route::get('personas', 'PersonasController@listarPersonas')
    ->name('listarPersonas');

Route::get('personas/nuevo', 'PersonasController@viewRegistrarPersona')
    ->name('cargarVistaRegistrarPersona');

Route::post('personas/crear', 'PersonasController@registrarPersona');

Route::get('personas/detalle/{id}', 'PersonasController@viewEditarPersona')
    ->where('id','[0-9]+')
    ->name('cargarVistaEditarPersona');

Route::put('personas/actualizar/{datosPersona}', 'PersonasController@editarDatosPersona')
	->name('actualizarDatosPersona');

//Modulo administrativo


