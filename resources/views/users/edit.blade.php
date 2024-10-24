
@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">

    <h1 class="text-2xl font-bold mb-5">Editar Usuario</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                   class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="last_name" class="block text-sm font-medium">Apellido</label>
            <input type="text" name="last_name" id="name" value="{{ old('last_name', $user->last_name) }}"
                   class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium">Telefono</label>
            <input type="text" name="phone" id="name" value="{{ old('phone', $user->phone) }}"
                   class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Actualizar Usuario
        </button>
    </form>
</div>
@endsection
