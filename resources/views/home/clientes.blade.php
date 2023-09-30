@extends('layouts.app-master')


@section('content')
        <h1 class="container">Clientes</h1>
        @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estas autenticado navega libremente</p>
        <p>
            <a href="/logout">Cerrar sesion</a>
        </p>
        @endauth
        @guest
        <p>Para ver este contenido <a href="/login">inicia sesion aqui mi rey</a> </p>   
        @endguest

@endsection
   