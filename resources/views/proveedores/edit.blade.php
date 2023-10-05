@extends('layouts.app-master')

@section('content')

<div class="card">
    <h5 class="card-header">Actualizar proveedor</h5>
    <div class="card-body">
    
      <p class="card-text">
        <form action="#">
            <label for="">rut</label>
            <input type="text" name="rut" class="form-control" required>
            <label for="">nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">direccion_calle</label>
            <input type="text" name="direccion_calle" class="form-control" required>
            <label for="">direccion_numero</label>
            <input type="text" name="direccion_numero" class="form-control" required>
            <label for="">direccion_comuna</label>
            <input type="text" name="direccion_comuna" class="form-control" required>
            <label for="">direccion_ciudad</label>
            <input type="text" name="direccion_ciudad" class="form-control" required>
            <label for="">telefono</label>
            <input type="text" name="telefono" class="form-control" required>
            <label for="">pagina_web</label>
            <input type="text" name="pagina_web" class="form-control" required>
            <br>
            <a href="{{ route("proveedores.index")}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-warning" >Actualizar</button>
        </form>
      </p>
     
    </div>
  </div>

  @endsection