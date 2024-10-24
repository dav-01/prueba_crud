<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administración de Usuarios')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-BuZUYtlX.css') }}">
    <script src="{{ asset('build/assets/app-fGIFnpOl.js') }}" defer></script>

</head>
<body class="bg-gray-100 min-h-screen">


    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('users.index') }}" class="font-bold">Home</a>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-white">Cerrar sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-white">Iniciar sesión</a>
            @endauth
        </div>
    </nav>

    <div class="container mx-auto p-6">
        @yield('content')
    </div>
</body>
</html>
