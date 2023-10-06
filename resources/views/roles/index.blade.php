@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Roles</h2>
        <div class="card shadow">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }} ({{ $user->email }})</td>
                                <td>
                                    @if($user->roles->isEmpty())
                                    <span class="text-danger">Sin rol</span>
                                @else
                                    @foreach($user->roles as $role)
                                        <span class="{{ $role->name === 'admin' ? 'text-success' : ($role->name === 'employee' || $role->name === 'usuario' ? 'text-primary' : '') }}">{{ $role->name }}</span>
                                    @endforeach
                                @endif
                                    @foreach($user->roles as $role)
                                        
                                        <form method="POST" action="{{ route('roles.destroy', [$user, $role]) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este rol?')">Eliminar Rol</button>
                                        </form>
                                        
                                        
                                    @endforeach
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('roles.update', $user->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <select class="form-select" id="roles" name="roles[]" multiple required>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->name }}" {{ in_array($role->name, $userRoles) ? 'selected' : '' }}>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Actualizar Roles</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
