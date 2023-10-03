@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Clientes</h2>
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
@endsection
