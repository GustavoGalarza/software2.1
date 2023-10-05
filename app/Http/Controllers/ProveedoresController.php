<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
  
    public function index()
    {
        //pagina de inicio proveedores
        $datos = Proveedores::all();
        return view('proveedores.index', compact('datos'));
    }

  
    public function create()
    {
        //el formulario de proveedores para los datos
        return view('proveedores.create');
    }

 
    public function store(Request $request)
    {
        //guarda los datos de proveedores en la BD
        
    }

   
    public function show(Proveedores $proveedores)
    {
        //obtiene el registo de la tabla de provedores
    }

    public function edit(Proveedores $proveedores)
    {
        //sirve para traer los datos de proveedores que se van a editar
        // despues los coloca en el formulario
        return view('proveedores.edit');
    }

    
    public function update(Request $request, Proveedores $proveedores)
    {
        //actualiza los datos de proveedores en la BD
    }

   
    public function destroy(Proveedores $proveedores)
    {
        //elimana a un proveedor del registro de la BD
    }
}
