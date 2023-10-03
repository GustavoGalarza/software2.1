@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="mb-4">Editar Cliente</h2>
        <div class="card shadow">
            <div class="card-body">
                <form method="POST" action="{{ route('clientes.update', $cliente->rut) }}" enctype="multipart/form-data">

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
                        <input type="text" class="form-control" id="calle" name="direccion_calle" value="{{ $cliente->direccion_calle }}">
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" class="form-control" id="numero" name="direccion_numero" value="{{ $cliente->direccion_numero }}">
                    </div>
                    <div class="mb-3">
                        <label for="comuna" class="form-label">Comuna:</label>
                        <input type="text" class="form-control" id="comuna" name="direccion_comuna" value="{{ $cliente->direccion_comuna }}">
                    </div>
                    <div class="mb-3">
                        <label for="ciudad" class="form-label">Ciudad:</label>
                        <input type="text" class="form-control" id="ciudad" name="direccion_ciudad" value="{{ $cliente->direccion_ciudad }}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen:</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                
                    @if ($cliente->image)
                    <div class="mb-3">
                        <label class="form-label">Imagen Actual:</label>
                        <img src="{{ asset('storage/' . $cliente->image) }}" alt="Imagen del cliente" class="img-thumbnail">
                    </div>
                    
                    @endif
                
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
