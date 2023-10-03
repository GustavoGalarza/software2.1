@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">Agregar Cliente</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="rut">RUT:</label>
                                <input type="text" class="form-control" id="rut" name="rut" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="calle">Calle:</label>
                                <input type="text" class="form-control" id="calle" name="direccion_calle" required>
                            </div>
                            <div class="form-group">
                                <label for="numero">Número:</label>
                                <input type="text" class="form-control" id="numero" name="direccion_numero" required>
                            </div>
                            <div class="form-group">
                                <label for="comuna">Comuna:</label>
                                <input type="text" class="form-control" id="comuna" name="direccion_comuna" required>
                            </div>
                            <div class="form-group">
                                <label for="ciudad">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad" name="direccion_ciudad" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen:</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Agregar</button>
                                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
