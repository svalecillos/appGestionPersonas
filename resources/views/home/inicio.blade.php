@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <h1>Registro de ex-alumnos</h1>
    @auth
    <h4>Bienvenido {{ auth()->user()->name }} </h4>
    @endauth
    <div class="center">
        <img class="responsive-img" src="{{ asset('images/Torre Limilaya.jpg')}}">
    </div>
@endsection