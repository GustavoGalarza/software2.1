@extends('layouts.app-master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a la Plataforma de Gestión de Ventas</div>

                <div class="card-body">
                    @auth
                    <p>Hola {{ auth()->user()->name ?? auth()->user()->username }}, bienvenido de nuevo a nuestra plataforma de gestión de ventas.</p>
                    <p>Aquí puedes administrar todos los aspectos relacionados con tus ventas, clientes, proveedores y productos de manera eficiente y sencilla.</p>
                    <p>Explora las diversas funciones disponibles en el menú de navegación para comenzar:</p>
                    <ul>
                        <li>Registrar nuevos clientes y proveedores.</li>
                        <li>Gestionar tu catálogo de productos y servicios.</li>
                        <li>Realizar seguimiento de las ventas y pedidos.</li>
                        <li>Generar informes y estadísticas para tomar decisiones informadas.</li>
                    </ul>
                    <p>¡Estamos aquí para ayudarte a optimizar tus procesos de ventas y hacer crecer tu negocio!</p>
                   
                    @endauth

                    @guest
                    <p>Para comenzar a utilizar nuestra plataforma de gestión de ventas, por favor <a href="/login">inicia sesión</a> o <a href="/register">regístrate</a> si aún no tienes una cuenta.</p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
