@extends('layouts.app-master')

@section('content')
    <div class="card">
        <h5 class="card-header">Lista Proveedores</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title text-center">todos los Proveedores</h5>
            <p>
                <a href="{{ route('proveedores.create') }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo proveedor</a>
            </p>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered ">
                    <thead>
                        <th>rut</th>
                        <th>nombre</th>
                        <th>direccion_calle</th>
                        <th>direccion_numero</th>
                        <th>direccion_comuna</th>
                        <th>direccion_ciudad</th>
                        <th>telefono</th>
                        <th>pagina_web</th>
                        <th>Editar</th>
                        <th>eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->rut }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->direccion_calle }}</td>
                                <td>{{ $item->direccion_numero }}</td>
                                <td>{{ $item->direccion_comuna }}</td>
                                <td>{{ $item->direccion_ciudad }}</td>
                                <td>{{ $item->telefono }}</td>
                                <td>{{ $item->pagina_web }}</td>
                                <td>
                                    <form action="{{ route("proveedores.edit", $item->rut)}}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="">
                                        <button class="btn btn-danger btn-sm">
                                            <span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
@endsection
