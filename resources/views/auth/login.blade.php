@extends('layouts.layout')

@section('title', 'Ingresar')

@section('content')
    <div class="row">
        <div class="col s12 m12 l8">
            <form id="formLogin"  method="post" action="{{ route('login') }}">
                @csrf
                <div class="card-panel">
                    <h4 class="header2">Ingreso</h4>
                    <div class="divide"></div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" value="{{ old('email') }}" type="email" name="email"
                                    required autocomplete="email" 
                                    autofocus
                                    class="validate">
                            <label for="icon_prefix">Correo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="password" type="password"  name="password" 
                                    required autocomplete="current-password"
                                    autofocus
                                    class="validate">
                            <label for="icon_prefix">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light green darken-1 right">Ingresar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection