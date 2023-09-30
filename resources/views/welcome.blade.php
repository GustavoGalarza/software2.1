
@extends('layouts.home-master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="jumbotron mt-5">
                <h1 class="display-4 text-center">Bienvenido a la Plataforma de Gestión de Ventas</h1>
                <p class="lead text-center">Aquí puedes administrar tus clientes, proveedores, productos y ventas de manera eficiente.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Clientes</h2>
            <p>Nuestra plataforma de gestión de ventas es una solución integral que te permite administrar de manera eficiente todas las facetas de tu negocio. En lo que respecta a tus clientes,
                 puedes crear perfiles detallados que incluyen su información de contacto, historial de compras y categorizaciones para comprender mejor sus preferencias y necesidades. Además, hemos implementado un sistema de puntuación de clientes para recompensar la lealtad y ofrecerles promociones exclusivas.</p>
            <a href="/clientes" class="btn btn-primary">Ver Clientes</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('https://www.esan.edu.pe/images/blog/2019/02/28/1500x844-winwin-clientes-proveedor.jpg') }}" alt="Clientes" class="img-fluid rounded">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset('https://www.entornoestudiantil.com/wp-content/uploads/2018/03/retail-carrito-compra.jpg') }}" alt="Productos" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2>Productos</h2>
            <p>En lo que respecta a tus productos, nuestra plataforma te permite crear un catálogo completo con imágenes, descripciones detalladas y especificaciones técnicas. Mantenemos un control preciso de tu inventario, y los cambios se reflejan en tiempo real en tu sitio web.
                 Además, facilitamos la búsqueda de productos con una función avanzada y permitimos que los clientes dejen reseñas y calificaciones para ayudar a otros compradores. En resumen, nuestra plataforma de gestión de ventas está diseñada para mejorar la eficiencia y maximizar tus operaciones comerciales, brindándote las herramientas necesarias para tener éxito en un mercado competitivo.</p>
            <a href="/productos" class="btn btn-primary">Ver Productos</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Proveedores</h2>
            <p>En cuanto a tus proveedores, nuestra plataforma te brinda la capacidad de mantener un registro completo de tus relaciones comerciales. Puedes administrar una lista de proveedores con detalles clave, realizar un seguimiento de tus
                 compras y comparar precios y términos para obtener las mejores ofertas. Además, configuramos alertas automáticas para notificarte cuando tus niveles de inventario estén bajos, asegurando una gestión de stock sin problemas.</p>
            <a href="/proveedores" class="btn btn-primary">Ver Proveedores</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('https://concepto.de/wp-content/uploads/2022/12/proveedores.jpg') }}" alt="Proveedores" class="img-fluid rounded">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset('https://conceptodefinicion.de/wp-content/uploads/2014/02/Venta-2.jpg') }}" alt="Ventas" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2>Ventas</h2>
            <p>Para optimizar tus ventas, nuestra plataforma te proporciona un panel de control en tiempo real que te permite monitorear las ventas actuales, los ingresos y las tendencias. Puedes emitir facturas
                 electrónicas de manera automatizada y gestionar pedidos en línea de manera eficiente. También puedes aprovechar funciones de descuentos y promociones para atraer a más clientes y aumentar tus ventas.</p>
            <a href="/ventas" class="btn btn-primary">Ver Ventas</a>
        </div>
    </div>
</div>
@endsection
