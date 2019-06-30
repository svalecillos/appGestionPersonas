@extends('layouts.layout')

@section('title', 'Registrar usuario')

@section('content')
    <div class="row">
            <div class="col s12 m12 l8">
                <form id="formRegistrarUsuario"  method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="card-panel">
                        <h4 class="header2">Registrar nuevo usuario</h4>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name" value="{{ old('name') }}" type="text" name="name"
                                        required autocomplete="name"
                                        autofocus 
                                        class="validate">
                                <label for="icon_prefix">Nombres</label>
                            </div>
                        </div>
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
                                <input id="password" value="{{ old('password') }}" type="password" name="password"
                                        required autocomplete="password"
                                        autofocus 
                                        class="validate">
                                <label for="icon_prefix">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="password_confirmation" type="password"  name="password_confirmation" 
                                        required autocomplete="new-password"
                                        autofocus
                                        class="validate">
                                <label for="icon_prefix">Repetir contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light green darken-1 right">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection