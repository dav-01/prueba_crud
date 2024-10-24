@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Nombre</label>
            <input type="text" name="name" class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="last_name" class="block text-sm font-medium">Apellido</label>
            <input type="text" name="last_name" class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo</label>
            <input type="email" name="email" class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Contraseña</label>
            <input type="password" name="password" class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium">Teléfono</label>
            <input type="text" name="phone" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
            Crear
        </button>
    </form>
</div>
@endsection
