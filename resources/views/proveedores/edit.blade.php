@extends('layouts.app-master')

@section('content')
    <div class="card">
        <h5 class="card-header">Actualizar proveedor</h5>
        <div class="card-body">
            <p class="card-text">
            <form action="#">
                <label for="">rut</label>
                <input type="text" name="rut" class="form-control" value="{{$proveedores->rut}}">
                <label for="">nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$proveedores->nombre}}">
                <label for="">direccion_calle</label>
                <input type="text" name="direccion_calle" class="form-control" value="{{$proveedores->direccion_calle}}">
                <label for="">direccion_numero</label>
                <input type="text" name="direccion_numero" class="form-control" value="{{$proveedores->direccion_numero}}">
                <label for="">direccion_comuna</label>
                <input type="text" name="direccion_comuna" class="form-control" value="{{$proveedores->direccion_comuna}}">
                <label for="">direccion_ciudad</label>
                <input type="text" name="direccion_ciudad" class="form-control" value="{{$proveedores->direccion_ciudad}}">
                <label for="">telefono</label>
                <input type="text" name="telefono" class="form-control" value="{{$proveedores->telefono}}">
                <label for="">pagina_web</label>
                <input type="text" name="pagina_web" class="form-control" value="{{$proveedores->pagina_web}}">
                <br>
                <a href="{{ route('proveedores.index') }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>
            </form>
            </p>

        </div>
    </div>
@endsection
