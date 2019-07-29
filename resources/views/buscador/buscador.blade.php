@extends('layouts.layout')

@section('title', 'Buscar persona')

@section('content')
    <div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Buscar persona por cedula</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li class="active">Buscar</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l8">
            <form  id="formBuscador" method="post" action="{{ url("buscando_datos") }}">
                {{ csrf_field() }}
                <div class="card-panel">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="cedula" type="text" name="cedula" class="validate">
                            <label for="icon_prefix">Cedula</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light green darken-1 right">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection