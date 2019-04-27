@extends('layouts.layout')

@section('title', 'listado de personas')

@section('content')
    <div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Listado de personas</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li class="active">Personas</li>
                </ol>
            </div>
            <div class="col s2 m6 l6">
                <a href="{{ route('cargarVistaRegistrarPersona') }}" 
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
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Profesion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>
                            {{ $persona->nombres }}
                        </td>
                        <td>
                            {{ $persona->primer_apellido }}
                            {{ $persona->segundo_apellido }}
                        </td>
                        <td>{{ $persona->cedula }}</td>
                        <td>{{ $persona->telefono }}</td>
                        <td>{{ $persona->correo }}</td>
                        <td>{{ $persona->profesion->descripcion }}</td>
                        <td><a href="{{ route('cargarVistaEditarPersona',['id' => $persona->id]) }}" 
                                class="btn waves-effect waves-light cyan">Ver</a>
                        </td>
                    </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection