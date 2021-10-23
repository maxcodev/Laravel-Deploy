<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
        <header class="shadow-lg"> 
            <div class="bg-yellow-600 py-1"></div>
            <nav class="bg-yellow-500 py-2 text-right pr-4">
                @auth
                    <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 undeline">
                        Dashboard
                    </a>
                @else
                    <a href="{{ url('login') }}" class="text-sm text-gray-700 undeline">
                        Login
                    </a>
                    <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 undeline">
                        Register
                    </a>
                @endif
                    <!--<a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="image" 
                        class="h-8 mx-auto"
                        >
                    </a>-->
            </nav>
        </header>
        <main class="py-10">
            <div class="container mx-auto px-4"">
                @yield('content')
            </div>
        </main>
</body>
</html>