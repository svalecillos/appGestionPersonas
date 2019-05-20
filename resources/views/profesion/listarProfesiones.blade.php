@extends('layouts.layout')

@section('title', 'listado de profesiones')

@section('content')
	<div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Listado de Profesiones</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li class="active">Profesiones</li>
                </ol>
            </div>
            <div class="col s2 m6 l6">
                <a href="{{ route('cargarVistaRegistrarProfesion') }}" 
                class="btn waves-effect waves-light breadcrumbs-btn green darken-1 right">
                    <i class="material-icons left">settings_backup_restore</i>Agregar
                </a>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="card-panel">
        <table id="data-table-simple" class="display" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre Profesion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesiones as $profesion)
                    <tr>
                        <td>{{ $profesion->descripcion }}</td>
                        <td>
                            <a href="{{ route('cargarVistaEditarProfesion',['id' => $profesion->id]) }}" 
                                class="btn waves-effect waves-light cyan">Ver</a>
                            <!--<a href="{{ route('eliminarProfesion',['id' => $profesion->id]) }}" 
                                class="btn waves-effect waves-light red darken-3">Eliminar</a>-->
                        </td>
                    </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection