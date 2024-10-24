@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Nombre</label>
            <input type="text" name="name" class="w-full border-gray-300 rounded-lg mt-1" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo</label>
            <input type="email" name="email" class="w-full border-gray-300 rounded-lg mt-1" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Contraseña</label>
            <input type="password" name="password" class="w-full border-gray-300 rounded-lg mt-1" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium">Teléfono</label>
            <input type="text" name="phone" class="w-full border-gray-300 rounded-lg mt-1">
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
            Crear
        </button>
    </form>
</div>
@endsection