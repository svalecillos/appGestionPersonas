@extends('layouts.layout')

@section('title', 'listado de Promociones')

@section('content')
	<div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Listado de Promociones</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li class="active">Promociones</li>
                </ol>
            </div>
            <div class="col s2 m6 l6">
                <a href="{{ route('cargarVistaRegistrarPromocion') }}" 
                class="btn waves-effect waves-light breadcrumbs-btn green darken-1 right">
                    <i class="material-icons left">add</i>Agregar
                </a>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="card-panel">
        <table id="data-table-simple" class="display" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre Promocion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promociones as $promocion)
                    <tr>
                        <td>{{ $promocion->descripcion }}</td>
                        <td>
                            <a href="{{ route('cargarVistaEditarPromocion',['id' => $promocion->id]) }}" 
                                class="btn waves-effect waves-light cyan">
                                <i class="material-icons left">create</i>
                            </a>
                            <!--<a href="{{ route('eliminarProfesion',['id' => $promocion->id]) }}" 
                                class="btn waves-effect waves-light red darken-3">Eliminar</a>-->
                        </td>
                    </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection