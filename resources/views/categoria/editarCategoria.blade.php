@extends('layouts.layout')

@section('title', 'Editar categoria')

@section('content')
	<div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Editar Categoria</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li><a href="{{ route('listarCategorias') }}">Categorias</a></li>
                    <li class="active">Editar</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col s12 m12 l8">
    		 <form  id="formularioAdministrativo" method="post" action="{{ url("categoria/actualizar/{$categoria->id}") }}">
    		 	{{ method_field('PUT') }}
    		 	{{ csrf_field() }}
    		 	<div class="card-panel">
    		 		<div class="row">
    		 			<div class="row">
                            <!--Campo descripcion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                	<input id="descripcion" type="text" name="descripcion" class="validate" value="{{ old('descripcion',$categoria->descripcion ) }}">
                                <label for="icon_prefix">Nombre de la categoria</label>
                            </div>
                            <div class="input-field col s6">
                            	<button type="submit" class="btn waves-effect waves-light green darken-1 right">Actualzar</button>
                            </div>
                        </div>
    		 		</div>
    		 	</div>
    		 </form>
    	</div>
    </div>
@endsection