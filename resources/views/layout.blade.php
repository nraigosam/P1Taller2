<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="icon/png" href="https://image.flaticon.com/icons/png/512/75/75406.png">
    <title>Luky Game</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('game')}}">Play</a></li>
                <li><a href="{{route('historial.index')}}">Historial</a></li>
                
            </ul>
        </nav>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>