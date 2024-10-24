@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Usuarios</h1>
    <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
        Crear Usuario
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
    <thead class="bg-blue-500 text-white">
        <tr>
            <th class="p-3 text-left">Nombre</th>
            <th class="p-3 text-left">Apellido</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Teléfono</th>
            <th class="p-3 text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr class="border-b">
            <td class="p-3">{{ $user->name }}</td>
            <td class="p-3">{{ $user->last_name }}</td>
            <td class="p-3">{{ $user->email }}</td>
            <td class="p-3">{{ $user->phone }}</td>
            <td class="p-3 text-center space-x-2">
                @if ($user->is_active)
                <form action="{{ route('users.disable', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">
                        Deshabilitar
                    </button>
                </form>
                @else
                <form action="{{ route('users.enable', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-1 px-3 rounded">
                        Habilitar
                    </button>
                </form>
                @endif
                <a href="{{ route('users.edit', $user) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">Editar</a>

                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
