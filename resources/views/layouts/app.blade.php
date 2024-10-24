

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administración de Usuarios')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="{{ route('users.index') }}" class="font-bold">Home</a>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        @yield('content')
    </div>
</body>
</html>
