@extends('layouts.layout')

@section('title', 'Registrar categoria')

@section('content')
	<div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Registrar Categoria</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li><a href="{{ route('listarCategorias') }}">Categorias</a></li>
                    <li class="active">Nuevo</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col s12 m12 l8">
    		 <form  id="formularioAdministrativo" method="post" action="{{ url('categoria/crear') }}">
    		 	{{ csrf_field() }}
    		 	<div class="card-panel">
    		 		<div class="row">
    		 			<div class="row">
                            <!--Campo descripcion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                	<input id="descripcion" type="text" name="descripcion" class="validate" value="{{ old('descripcion') }}">
                                <label for="icon_prefix">Nombre de la categoria</label>
                            </div>
                            <div class="input-field col s6">
                            	<button type="submit" class="btn waves-effect waves-light green darken-1 right">Registrar</button>
                            </div>
                        </div>
    		 		</div>
    		 	</div>
    		 </form>
    	</div>
    </div>
@endsection