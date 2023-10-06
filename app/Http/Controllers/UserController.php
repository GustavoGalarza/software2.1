<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
{
    // Valida y crea un nuevo usuario
    $request->validate([
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|string|min:8',
    ]);

    $user = User::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);

    // Asigna roles al usuario
    $user->assignRole($request->input('roles'));

    return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
}

    public function edit(User $user)
    {
        $roles = Role::all();
        $userRoles = $user->roles->pluck('id')->toArray(); 
        return view('user.edit', compact('user', 'roles', 'userRoles'));
    }


    public function update(Request $request, User $user)
    {
        // Valida y actualiza el usuario
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id . '|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
        ]);

        // Actualiza roles del usuario
        $user->syncRoles($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(User $user)
    {
        // Elimina el usuario
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}