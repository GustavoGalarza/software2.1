@extends('layouts.app-master')

@section('content')
    <style>
        .feature-image {
            max-width: 100%;
            margin-right: 20px;
            transition: transform 0.2s;
        }

        .feature-image:hover {
            transform: scale(1.2);
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @role('admin')
                <h1>Bienvenido Admin: {{ auth()->user()->name ?? auth()->user()->username }}</h1>
            @endrole
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Bienvenido a la Plataforma de Gestión de Ventas</div>

                    <div class="card-body">
                        @auth
                            <h3>Hola {{ auth()->user()->name ?? auth()->user()->username }}, bienvenido de nuevo a nuestra
                                plataforma de gestión de ventas.</h3>
                            <p>Aquí puedes administrar todos los aspectos relacionados con tus ventas, clientes, proveedores,
                                productos y más de manera eficiente y sencilla.</p>
                            <p>Explora las diversas funciones disponibles en el menú de navegación para comenzar:</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card mb-4">
                                        <img class="feature-image"
                                            src="https://blogcomparasoftware-192fc.kxcdn.com/wp-content/uploads/2021/02/tipos-de-clientes-de-ecommerce-1.png"
                                            class="card-img-top" alt="Imagen de Clientes">
                                        <div class="card-body">
                                            <h5 class="card-title">Clientes</h5>
                                            <p class="card-text">Administra tu base de clientes de manera efectiva. Agrega,
                                                edita y elimina registros de clientes con facilidad.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-4">
                                        <img class="feature-image"
                                            src="https://www.sydle.com/blog/assets/post/gestion-de-proveedores-627c06ddfde47e37d67560b4/gestao-de-fornecedores.jpg"
                                            class="card-img-top" alt="Imagen de Proveedores">
                                        <div class="card-body">
                                            <h5 class="card-title">Proveedores</h5>
                                            <p class="card-text">Administra tus relaciones con proveedores de manera efectiva.
                                                Agrega y gestiona información sobre tus proveedores y compras.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-4">
                                        <img class="feature-image"
                                            src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2022/02/compra-online-2613331.jpg?tf=3840x"
                                            class="card-img-top" alt="Imagen de Productos">
                                        <div class="card-body">
                                            <h5 class="card-title">Productos</h5>
                                            <p class="card-text">Mantén un catálogo actualizado de tus productos y servicios.
                                                Agrega detalles, categorías y precios.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-4">
                                        <img class="feature-image"
                                            src="https://www.contpaqi.com/fotos-blog/Estrategias%20de%20ventas%20para%20pequen%CC%83as%20empresas-1.jpg"
                                            class="card-img-top" alt="Imagen de Ventas">
                                        <div class="card-body">
                                            <h5 class="card-title">Ventas</h5>
                                            <p class="card-text">Realiza un seguimiento de tus ventas y pedidos de manera
                                                eficiente. Genera informes y estadísticas para tomar decisiones informadas.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <p>¡Estamos aquí para ayudarte a optimizar tus procesos de ventas y hacer crecer tu negocio!</p>

                        @endauth

                        @guest
                            <h3>¡Bienvenido a nuestra plataforma de gestión de ventas!</h3>
                            <p>Regístrate o inicia sesión para comenzar a utilizar nuestras herramientas y mejorar la gestión de
                                tus ventas y negocios.</p>
                            <a href="/register" class="btn btn-primary">Regístrate</a>
                            <a href="/login" class="btn btn-success">Iniciar Sesión</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
