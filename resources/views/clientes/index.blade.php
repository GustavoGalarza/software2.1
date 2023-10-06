@extends('layouts.app-master')

@section('content')

    <div class="container mt-5">
        @auth
        <h2 class="mb-4">Gestion de Clientes</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>RUT</th>
                            <th>Nombre</th>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Comuna</th>
                            <th>Ciudad</th>
                            <th>Teléfono</th>
                            <th>Imagen</th> 
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->rut }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->direccion_calle }}</td>
                                <td>{{ $cliente->direccion_numero }}</td>
                                <td>{{ $cliente->direccion_comuna }}</td>
                                <td>{{ $cliente->direccion_ciudad }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>
                                    @if ($cliente->image)
                                        <img src="{{ asset('storage/' . $cliente->image) }}" alt="{{ $cliente->nombre }}" style="max-width: 100px;">
                                    @else
                                        Sin imagen
                                    @endif
                                </td>
                                <td>
                                   
                                    <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <a href="{{ route('clientes.create') }}" class="btn btn-success">Agregar Cliente</a>
               
            </div>
        </div>
    </div>
@endauth
 <!-- Contenido para usuarios no autenticados -->
@guest

<style> 
.guest-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    padding: 20px;
}
.feature {
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.feature-image {
    max-width: 150px;
    margin-right: 20px;
    transition: transform 0.3s; 
}
.feature-image:hover {
    transform: scale(3.2); 
}
.feature h4 {
    font-size: 24px;
    margin: 0;
}

.feature p {
    font-size: 16px;
    color: #666;
}
.guest-content a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}
.guest-content a:hover {
    text-decoration: underline;
}
    </style>
<div class="guest-content">
    <h3>Descubre nuestras funciones:</h3>
    <div class="feature">
        <img src="{{ asset('images/verDB.png') }}" alt="Cliente 1" class="feature-image">
        <div class="feature-text">
            <h4>Ver Clientes</h4>
            <p>
                Explora la extensa lista de nuestros clientes.
                <br>
                Accede a información detallada sobre cada cliente, incluyendo su nombre, dirección, número de teléfono y más.
                <br>
                Descubre sus imágenes relacionadas para conocer más sobre sus perfiles.
                <br>
                Obtén una visión completa de nuestra base de datos de clientes en un solo lugar.
            </p>
        </div>
    </div>
    <div class="feature">
        <img src="{{ asset('images/eliminar.png') }}" alt="Cliente 2" class="feature-image">
        <div class="feature-text">
            <h4>Eliminar Clientes</h4>
            <p>
                Elimina clientes que ya no son relevantes o necesarios.
                <br>
                Simplifica la gestión de tu lista de clientes al eliminar registros innecesarios.
                <br>
                Confirma tus acciones antes de eliminar un cliente para evitar errores.
            </p>
        </div>
    </div>
    <div class="feature">
        <img src="{{ asset('images/modificar.png') }}" alt="Cliente 3" class="feature-image">
        <div class="feature-text">
            <h4>Modificar Clientes</h4>
            <p>
                Edita los detalles de los clientes según sea necesario.
                <br>
                Actualiza la información de contacto, la dirección o cualquier otro atributo de un cliente.
                <br>
                Sube nuevas imágenes para reflejar cambios en el perfil del cliente.
                <br>
                Mantén tu base de datos de clientes siempre actualizada y precisa.
            </p>
        </div>
    </div>
    <div class="feature">
        <img src="{{ asset('images/crear.png') }}" alt="Cliente 4" class="feature-image">
        <div class="feature-text">
            <h4>Crear Clientes</h4>
            <p>
                Regístrate para acceder a la función completa de nuestro sistema.
                <br>
                Crea nuevos perfiles de clientes y personaliza su información.
                <br>
                Agrega imágenes para dar vida a los perfiles de tus clientes.
                <br>
                Gestiona y organiza tu lista de clientes de manera eficiente.
            </p>
        </div>
    </div>
    <p>Para disfrutar de todas estas funciones, por favor <a href="/login">inicia sesión</a> o <a href="/register">regístrate</a> si aún no tienes una cuenta.</p>
</div>
@endguest

@endsection
