<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    // Mostrar todos los clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Mostrar el formulario para crear un nuevo cliente
    public function create()
    {
        return view('clientes.create');
    }

    // Almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'rut' => 'required|unique:clientes',
            'nombre' => 'required',
            'direccion_calle' => 'required',
            'direccion_numero' => 'required',
            'direccion_comuna' => 'required',
            'direccion_ciudad' => 'required',
            'telefono' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);

        $clienteData = $request->except('image');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('clientes/images', 'public'); // Almacenar la imagen en la carpeta 'clientes/images'
            $clienteData['image'] = $imagePath;
        }

        Cliente::create($clienteData);
        return redirect()->route('clientes.index')->with('success', 'Cliente agregado exitosamente.');
    }

    // Mostrar un cliente específico
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    // Mostrar el formulario para editar un cliente
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    // Actualizar un cliente en la base de datos
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion_calle' => 'required',
            'direccion_numero' => 'required',
            'direccion_comuna' => 'required',
            'direccion_ciudad' => 'required',
            'telefono' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        ]);

        $clienteData = $request->except(['_method', '_token', 'image']);

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($cliente->image) {
                Storage::delete($cliente->image);
            }

            $imagePath = $request->file('image')->store('clientes/images', 'public');
            $clienteData['image'] = $imagePath;
        }

        $cliente->update($clienteData);
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    // Eliminar un cliente de la base de datos
    public function destroy(Cliente $cliente)
    {
        // Eliminar la imagen asociada al cliente si existe
        if ($cliente->image) {
            Storage::delete($cliente->image);
        }

        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
