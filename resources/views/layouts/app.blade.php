

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administración de Usuarios')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-500 p-4 text-white flex justify-between items-center">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('users.index') }}" class="font-bold">Home</a>
            <div class="flex items-center space-x-4">
                @auth
                    <span>Bienvenido, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                            Cerrar sesión
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    
    <div class="container mx-auto p-6">
        @yield('content')
    </div>
</body>
</html>
