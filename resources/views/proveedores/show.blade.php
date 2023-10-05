@extends('layouts.app-master')

@section('content')
    <div class="card">
        <h5 class="card-header">eliminar un proveedor</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro

                <table class="table table-sm table-hover">
                    <thead>
                        <th>rut</th>
                        <th>nombre</th>
                        <th>direccion_calle</th>
                        <th>direccion_numero</th>
                        <th>direccion_comuna</th>
                        <th>direccion_ciudad</th>
                        <th>telefono</th>
                        <th>pagina_web</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a href="{{ route("proveedores.index")}}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar</a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar

                    </button>
                </form>
            </div>

            </p>

        </div>
    </div>
@endsection
