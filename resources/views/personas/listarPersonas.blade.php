@extends('layouts.layout')

@section('title', 'listado de ex-alumnos')

@section('content')
    <div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Listado de ex-alumnos</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li class="active">Ex-alumnos</li>
                </ol>
            </div>
            <div class="col s2 m6 l6">
                <a href="{{ route('cargarVistaRegistrarPersona') }}" 
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
                    <th>Cedula</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>                    
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{ $persona->cedula }}</td>
                        <td>
                            {{ $persona->primer_apellido }}
                            {{ $persona->segundo_apellido }}
                        </td>
                        <td>
                            {{ $persona->nombres }}
                        </td>
                        <td>{{ $persona->telefono }}</td>
                        <td>{{ $persona->correo }}</td>
                        <td>
                            <a href="{{ route('cargarVistaEditarPersona',['id' => $persona->id]) }}" 
                                class="btn waves-effect waves-light cyan">
                                <i class="material-icons left">create</i>
                            </a>
                            <a href="{{ route('eliminarPersona',['id' => $persona->id]) }}" 
                                class="btn waves-effect waves-light red darken-3">
                                <i class="material-icons left">delete_forever</i>
                            </a>
                        </td>
                    </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection