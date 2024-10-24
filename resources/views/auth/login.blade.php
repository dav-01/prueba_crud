@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Iniciar Sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo</label>
            <input id="email" type="email" name="email" 
            class="border border-gray-300 rounded px-4 py-2 w-full @error('email') is-invalid @enderror" 
                   value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Contraseña</label>
            <input id="password" type="password" name="password" 
            class="border border-gray-300 rounded px-4 py-2 w-full @error('password') is-invalid @enderror" 
                   required autocomplete="current-password">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <div class="flex items-center">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="ml-2" for="remember">{{ __('Recuerdame') }}</label>
            </div>
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
            Iniciar Sesión
        </button>

        @if (Route::has('password.request'))
            <div class="mt-4">
                <a class="text-blue-500 hover:text-blue-600" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            </div>
        @endif
    </form>
</div>
@endsection
