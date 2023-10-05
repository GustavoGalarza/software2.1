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
        $proveedores = new Proveedores();
        $proveedores->rut = $request->post('rut');
        $proveedores->nombre = $request->post('nombre');
        $proveedores->direccion_calle = $request->post('direccion_calle');
        $proveedores->direccion_numero = $request->post('direccion_numero');
        $proveedores->direccion_comuna = $request->post('direccion_comuna');
        $proveedores->direccion_ciudad = $request->post('direccion_ciudad');
        $proveedores->telefono = $request->post('telefono');
        $proveedores->pagina_web = $request->post('pagina_web');
        $proveedores->save();
        return redirect()->route("proveedores.index")->with("success", "agregado con exito");
    }

   
    public function show(Proveedores $proveedores)
    {
        //obtiene el registo de la tabla de provedores
        return view('proveedores.show');
    }

    /*public function edit($rut)
     {
       //sirve para traer los datos de proveedores que se van a editar
        // despues los coloca en el formulario
        $proveedores = Proveedores::find($rut);
        return view("proveedores.edit", compact('proveedores'));
    }*/

 public function edit(Proveedores $proveedores)
    {
        //sirve para traer los datos de proveedores que se van a editar
        // despues los coloca en el formulario
        return view("proveedores.edit", compact('proveedores'));
    }

    
    public function update(Request $request, Proveedores $proveedores)
    {
        //actualiza los datos de proveedores en la BD
        return view("proveedores.edit", compact('proveedores'));
    }

   
    public function destroy(Proveedores $proveedores)
    {
        //elimana a un proveedor del registro de la BD
    }
}
