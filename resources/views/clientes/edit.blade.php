@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">Editar Cliente</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.update', $cliente->rut) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="rut" class="form-label">RUT:</label>
                                <input type="text" class="form-control" id="rut" name="rut" value="{{ $cliente->rut }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}">
                            </div>
                            <div class="mb-3">
                                <label for="calle" class="form-label">Calle:</label>
                                <input type="text" class="form-control" id="calle" name="calle" value="{{ $cliente->direccion_calle }}">
                            </div>
                            <div class="mb-3">
                                <label for="numero" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="numero" name="numero" value="{{ $cliente->direccion_numero }}">
                            </div>
                            <div class="mb-3">
                                <label for="comuna" class="form-label">Comuna:</label>
                                <input type="text" class="form-control" id="comuna" name="comuna" value="{{ $cliente->direccion_comuna }}">
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $cliente->direccion_ciudad }}">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
