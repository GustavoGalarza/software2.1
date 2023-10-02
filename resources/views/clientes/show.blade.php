@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Detalles del Cliente</h2>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>RUT:</th>
                            <td>{{ $cliente->rut }}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $cliente->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Calle:</th>
                            <td>{{ $cliente->direccion_calle }}</td>
                        </tr>
                        <tr>
                            <th>Número:</th>
                            <td>{{ $cliente->direccion_numero }}</td>
                        </tr>
                        <tr>
                            <th>Comuna:</th>
                            <td>{{ $cliente->direccion_comuna }}</td>
                        </tr>
                        <tr>
                            <th>Ciudad:</th>
                            <td>{{ $cliente->direccion_ciudad }}</td>
                        </tr>
                        @if (!empty($cliente->telefono))
                        <tr>
                            <th>Teléfono:</th>
                            <td>{{ $cliente->telefono }}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
