@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <h1>Control de amigos</h1>
    @auth
    <h4>Bienvenido {{ auth()->user()->name }} </h4>
    @endauth
@endsection