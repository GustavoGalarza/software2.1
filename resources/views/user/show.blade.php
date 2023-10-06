@extends('layouts.app-master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Detalles del Usuario</h2>
        <div class="card shadow">
            <div class="card-body">
                <div class="mb-3">
                    <strong>Nombre:</strong> {{ $user->username }}
                </div>
                <div class="mb-3">
                    <strong>Correo Electrónico:</strong> {{ $user->email }}
                </div>
                <div class="mb-3">
                    <strong>Roles:</strong>
                    <ul>
                        @foreach($userRoles as $role)
                            <li>{{ $role->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-center">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
