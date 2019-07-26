@extends('layouts.layout')

@section('title', 'Registrar persona')

@section('content')
    <div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Registrar persona</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    @guest
                    <li><a href="{{ route('buscarPersonas') }}">Buscar</a></li>
                    @endguest
                    @auth
                    <li><a href="{{ route('listarPersonas') }}">Personas</a></li>
                    @endauth
                    <li class="active">Nuevo</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l8">
            <form  id="formularioPersona" method="post" action="{{ url('personas/crear') }}">
                {{ csrf_field() }}
                <div class="card-panel">
                    <div class="row">
                            <h4 class="header2">Datos personales</h4>
                            <label class="materialize-red-text">**Campos obligatorios</label>
                            <div class="row">
                                <!--Campo cedula-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">contacts</i>
                                    <input type="text" id="cedula"  name="cedula" class="validate" value="{{ old('cedula') }}">
                                    <label for="icon_prefix">Cedula**</label>
                                </div>
                                <!--Fecha de nacimiento-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">cake</i>
                                    <input type="text" id="fecha_nacimiento" class="datepicker" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                                    <label for="icon_prefix">Fecha de nacimiento</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--Campo nombres-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="nombres" type="text" name="nombres" class="validate upperCase" value="{{ old('nombres') }}">
                                    <label for="icon_prefix">Nombres**</label>
                                </div>
                                <!--Campo apodos nuevo-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="apodos" type="text" name="apodos" class="validate upperCase" value="{{ old('apodos') }}">
                                    <label for="icon_prefix">Apodos</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--Campo primer apellido-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" id="primer_apellido"  name="primer_apellido" class="validate upperCase" value="{{ old('primer_apellido') }}">
                                    <label for="icon_prefix">Primer apellido**</label>
                                </div>
                                <!--Campo segundo apellido-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" id="segundo_apellido" name="segundo_apellido" class="validate upperCase" value="{{ old('segundo_apellido') }}">
                                    <label for="icon_prefix">Segundo apellido</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--Campo telefono-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">call</i>
                                    <input type="text" id="telefono" name="telefono" class="validate" value="{{ old('telefono') }}">
                                    <label for="icon_prefix">Telefono</label>
                                </div>
                                <!--Campo correo-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input type="email" id="correo" name="correo" class="validate upperCase" value="{{ old('correo') }}">
                                    <label for="icon_prefix">Correo</label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card-panel">
                    <div class="row">
                        <h4 class="header2">Limilaya</h4>
                        <div class="row">
                            <!--Campo promocion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">school</i>
                                <select id="promocion" name="promocion_id" class="validate">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($promociones as $promocion)
                                        <option value="{{ $promocion->id }}" {{old('promocion_id') == $promocion->id ? 'selected' : '' }}>{{ $promocion->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Promoci&oacute;n</label>
                            </div>
                            <!--Campo Anio de ingreso-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">date_range</i>
                                <select id="fecha_ingreso" name="fecha_ingreso" class="validate" value="{{ old('fecha_ingreso') }}">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($anios as $anio)
                                        <option value="{{ $anio }}" {{old('fecha_ingreso') == $anio ? 'selected' : '' }}>{{ $anio }}</option>
                                    @endforeach
                                </select>
                                <!--<input type="text" id="fecha_ingreso" class="datepicker" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}">-->
                                <label for="icon_prefix">Año de ingreso</label>
                            </div>
                            <!--Campo Anio de egreso -->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">date_range</i>
                                <select id="fecha_egreso" name="fecha_egreso" class="validate" value="{{ old('fecha_egreso') }}">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($anios as $anio)
                                        <option value="{{ $anio }}" {{old('fecha_egreso') == $anio ? 'selected' : '' }}>{{ $anio }}</option>
                                    @endforeach
                                </select>
                                <!--<input type="text" id="fecha_egreso" class="datepicker" name="fecha_egreso" value="{{ old('fecha_egreso') }}">-->
                                <label for="icon_prefix">Año de egreso</label>
                            </div>
                            <!--Campo categoria-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">school</i>
                                <select id="categoria" name="categoria_id" class="validate" value="{{ old('categoria_id') }}">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" {{old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Categoria</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-panel">
                    <div class="row">
                        <h4 class="header2">Datos profesionales</h4>
                        <div class="row">
                            <!--Campo categoria-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">school</i>
                                <select id="nivel_academico" name="nivel_academico_id" class="validate" value="{{ old('nivel_academico_id') }}">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($nivelesAcademicos as $nivelAcademico)
                                        <option value="{{ $nivelAcademico->id }}" {{old('nivel_academico_id') == $nivelAcademico->id ? 'selected' : '' }}>{{ $nivelAcademico->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Nivel academico</label>
                            </div>
                            <!--Campo profesion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">work</i>
                                <select id="profesion" name="profesion_id" class="validate" value="{{ old('profesion_id') }}">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($profesiones as $profesion)
                                        <option value="{{ $profesion->id }}" {{old('profesion_id') == $profesion->id ? 'selected' : '' }}>{{ $profesion->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Profesi&oacute;n</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--Campo especialidad-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="especialidad" name="especialidad" class="validate upperCase" value="{{ old('especialidad') }}">
                                <label for="icon_prefix">Especialidad</label>
                            </div>
                            <!--Campo ocupacion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="ocupacion" name="ocupacion" class="validate upperCase" value="{{ old('ocupacion') }}">
                                <label for="icon_prefix">Ocupacion</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--Campo Instagram-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="instagram" name="instagram" class="validate upperCase" value="{{ old('instagram') }}">
                                <label for="icon_prefix">Instagram</label>
                            </div>
                            <!--Campo twitter-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="twitter" name="twitter" class="validate upperCase" value="{{ old('twitter') }}">
                                <label for="icon_prefix">Twitter</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--Campo linkeding-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="linkeding" name="linkeding" class="validate upperCase" value="{{ old('linkeding') }}">
                                <label for="icon_prefix">linkedin</label>
                            </div>
                            <!--Campo facebook-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="facebook" name="facebook" class="validate upperCase" value="{{ old('facebook') }}">
                                <label for="icon_prefix">facebook</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-panel">
                    <div class="row">
                        <h4 class="header2">Direcci&oacute;n</h4>
                        <div class="row">
                            <!--Campo paises-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <select id="pais" name="cod_pais" class="validate" value="{{ old('cod_pais') }}">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($paises as $pais)
                                        <option value="{{ $pais->codigo }}" {{old('cod_pais') == $pais->codigo ? 'selected' : '' }}>{{ $pais->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Pais</label>
                            </div>
                            <!--Campo estados-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <input type="text" id="estado" name="estado" class="validate upperCase" value="{{ old('estado') }}">
                                <label for="icon_prefix">Estado</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--Campo ciudades-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <input type="text" id="ciudad" name="ciudad" class="validate upperCase" value="{{ old('ciudad') }}">
                                <label for="icon_prefix">Ciudad</label>
                            </div>
                            <!--Campo sector-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <input type="text" id="sector" name="sector" class="validate upperCase" value="{{ old('sector') }}">
                                <label for="icon_prefix">Sector</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light green darken-1 right">Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection