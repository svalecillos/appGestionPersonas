@extends('layouts.layout')

@section('title', 'Registrar persona')

@section('content')
    <div id="breadcrumbs-wrapper">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Registrar persona</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ route('principal') }}">Inicio</a></li>
                    <li><a href="{{ route('listarPersonas') }}">Personas</a></li>
                    <li class="active">Nuevo</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l8">
            <form method="post" action="{{ url('personas/crear') }}">
                {{ csrf_field() }}
                <div class="card-panel">
                    <div class="row">
                            <h4 class="header2">Datos personales</h4>
                            <div class="row">
                                <!--Campo nombres-->
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="nombres" type="text" name="nombres" class="validate">
                                    <label for="icon_prefix">Nombres</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--Campo primer apellido-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" id="primer_apellido"  name="primer_apellido" class="validate">
                                    <label for="icon_prefix">Primer apellido</label>
                                </div>
                                <!--Campo segundo apellido-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" id="segundo_apellido" name="segundo_apellido" class="validate">
                                    <label for="icon_prefix">Segundo apellido</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--Campo cedula-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">contacts</i>
                                    <input type="text" id="cedula"  name="cedula" class="validate">
                                    <label for="icon_prefix">Cedula</label>
                                </div>
                                <!--Campo correo-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input type="email" id="correo" name="correo" class="validate">
                                    <label for="icon_prefix">Correo</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--Campo telefono-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">call</i>
                                    <input type="text" id="telefono" name="telefono" class="validate">
                                    <label for="icon_prefix">Telefono</label>
                                </div>
                                <!--Fecha de nacimiento-->
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">cake</i>
                                    <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" >
                                    <label for="icon_prefix">Fecha de nacimiento</label>
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
                                <select id="promocion" name="promocion">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($promociones as $promocion)
                                        <option value="{{ $promocion->id }}">{{ $promocion->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Promoci&oacute;n</label>
                            </div>
                            <!--Campo Fecha de ingreso-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">date_range</i>
                                <input type="text" id="fecha_ingreso" name="fecha_ingreso" >
                                <label for="icon_prefix">Fecha de ingreso</label>
                            </div>
                            <!--Campo Fecha de ingreso-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">date_range</i>
                                <input type="text" id="fecha_egreso" name="fecha_egreso" >
                                <label for="icon_prefix">Fecha de egreso</label>
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
                                <select id="categoria" name="categoria">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Categoria</label>
                            </div>
                            <!--Campo profesion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">work</i>
                                <select id="profesion" name="profesion">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                    @foreach($profesiones as $profesion)
                                        <option value="{{ $profesion->id }}">{{ $profesion->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Profesi&oacute;n</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--Campo especialidad-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="especialidad" name="especialidad" class="validate">
                                <label for="icon_prefix">Especialidad</label>
                            </div>
                            <!--Campo ocupacion-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business_center</i>
                                <input type="text" id="ocupacion" name="ocupacion" class="validate">
                                <label for="icon_prefix">Ocupacion</label>
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
                                <select id="paises" name="paises">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                </select>
                                <label for="icon_prefix">Pais</label>
                            </div>
                            <!--Campo estados-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <select id="estados" name="estado">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                </select>
                                <label for="icon_prefix">Estado</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--Campo ciudades-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <select id="ciudades" name="ciudad">
                                    <option value="" disabled selected>Selecciona una opcion</option>
                                </select>
                                <label for="icon_prefix">Ciudad</label>
                            </div>
                            <!--Campo sector-->
                            <div class="input-field col s6">
                                <i class="material-icons prefix">public</i>
                                <input type="text" id="sector" name="sector" class="validate">
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