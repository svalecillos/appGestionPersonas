<?php

//Index
//Route::get('/', '')->name();

//Home
Route::get('/', 'HomeController@index')
    ->name('principal');

//Buscador personas
Route::get('buscar', 'BuscadorController@index')
    ->name('buscarPersonas');

Route::post('buscando_datos', 'BuscadorController@buscarPersona');

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

Route::get('personas/eliminar/{id}', 'PersonasController@eliminar')
    ->where('id','[0-9]+')
    ->name('eliminarPersona');
    
//MODULO ADMINISTRATIVO
//Categorias
Route::get('administrativo/categorias', 'CategoriaController@listarCategorias')
    ->name('listarCategorias');

Route::get('administrativo/categoria/nuevo', 'CategoriaController@viewCategoria')
    ->name('cargarVistaRegistrarCategoria');

Route::post('categoria/crear', 'CategoriaController@registrarCategoria');

Route::get('administrativo/categoria/detalle/{id}', 'CategoriaController@viewCategoriaEditar')
    ->where('id','[0-9]+')
    ->name('cargarVistaEditarCategoria');

Route::put('categoria/actualizar/{categoria}', 'CategoriaController@editarCategoria')
	->name('actualizarCategoria');

Route::get('categoria/eliminar/{id}', 'CategoriaController@eliminar')
    ->where('id','[0-9]+')
    ->name('eliminarCategoria');

//Profesion
Route::get('administrativo/profesion', 'ProfesionController@listarProfesiones')
    ->name('listarProfesion');

Route::get('administrativo/profesion/nuevo', 'ProfesionController@viewFormProfesion')
    ->name('cargarVistaRegistrarProfesion');

Route::post('profesion/crear', 'ProfesionController@registrarProfesion');

Route::get('administrativo/profesion/detalle/{id}', 'ProfesionController@viewProfesionEditar')
    ->where('id','[0-9]+')
    ->name('cargarVistaEditarProfesion');

Route::put('profesion/actualizar/{profesion}', 'ProfesionController@editarProfesion')
	->name('actualizarProfesion');

Route::get('profesion/eliminar/{id}', 'ProfesionController@eliminar')
    ->where('id','[0-9]+')
    ->name('eliminarProfesion');

//Promocion
Route::get('administrativo/promocion', 'PromocionController@listarPromociones')
    ->name('listarPromociones');

Route::get('administrativo/promocion/nuevo', 'PromocionController@viewFormPromocion')
    ->name('cargarVistaRegistrarPromocion');

Route::post('promocion/crear', 'PromocionController@registrarPromocion');

Route::get('administrativo/promocion/detalle/{id}', 'PromocionController@viewPromocionEditar')
    ->where('id','[0-9]+')
    ->name('cargarVistaEditarPromocion');

Route::put('promocion/actualizar/{promocion}', 'PromocionController@editarPromocion')
	->name('actualizarPromocion');

//Nivel academico
Route::get('administrativo/nivel_academico', 'NivelAcademicoController@listarNivelAcademico')
    ->name('listarNivelAcademico');

Route::get('administrativo/nivel_academico/nuevo', 'NivelAcademicoController@viewFormNivelAcademico')
    ->name('cargarVistaRegistrarNivelAcademico');

Route::post('nivel_academico/crear', 'NivelAcademicoController@registrarNivelAcademico');

Route::get('administrativo/nivel_academico/detalle/{id}', 'NivelAcademicoController@viewNivelAcademicoEditar')
    ->where('id','[0-9]+')
    ->name('cargarVistaEditarNivelAcademico');

Route::put('nivel_academico/actualizar/{nivel_academico}', 'NivelAcademicoController@editarNivelAcademico')
	->name('actualizarNivelAcademico');