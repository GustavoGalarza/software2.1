<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();

        // Obtén los roles de los usuarios y pásalos a la vista
        $userRoles = $users->pluck('roles')->flatten()->pluck('name')->toArray();

        return view('roles.index', compact('users', 'roles', 'userRoles'));
    }




    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);

        Role::create(['name' => $request->input('name')]);

        return redirect()->route('roles.index')->with('success', 'Rol creado exitosamente.');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $userRoles = $user->roles->pluck('name')->toArray();

        return view('roles.edit', compact('user', 'roles', 'userRoles'));
    }




    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'roles' => 'required|array',
        ]);

        // Sincroniza los roles del usuario con los roles seleccionados en el formulario
        $user->syncRoles($request->input('roles'));

        return redirect()->route('roles.index')->with('success', 'Roles del usuario actualizados exitosamente.');
    }



    public function destroy(User $user, Role $role)
{
    // Elimina la relación entre el usuario y el rol
    $user->removeRole($role);

    return redirect()->route('roles.index')->with('success', 'Rol eliminado exitosamente.');
}

}