@extends('layouts.layout')

@section('title', 'listado Niveles Academicos')

@section('content')
	<div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Listado Niveles Academicos</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li class="active">Nivel Academico</li>
                </ol>
            </div>
            <div class="col s2 m6 l6">
                <a href="{{ route('cargarVistaRegistrarNivelAcademico') }}" 
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
                    <th>Nombre de nivel academico</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nivelAcademico as $nivel)
                    <tr>
                        <td>{{ $nivel->descripcion }}</td>
                        <td>
                            <a href="{{ route('cargarVistaEditarNivelAcademico',['id' => $nivel->id]) }}" 
                                class="btn waves-effect waves-light cyan">Ver</a>
                        </td>
                    </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection