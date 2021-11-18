<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoSanchat-WEBII</title>
    <link rel="stylesheet" href="{{asset('css/initial/initial.css')}}" />
</head>

<body style="background-image:url('img/iniciofundo/fundologin.jpg')">
    <header>
        <section>
            <br><br>
            <picture>
                <center><a href="http://localhost:8000/"><img src="{{asset('img/logo/logo.jpg')}}" alt="Logo" /></center></a>

            </picture>
        </section>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/usuario') }}" class="text-sm text-gray-700 underline">Área Administrativa</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" style="text-decoration: none; color:black; font-size:20px">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="text-decoration: none; color:black; font-size:20px">Registrar</a>
            @endif
            @endauth
        </div>
        @endif
    </header>
    <main>
        @yield("content")
    </main>

    <br><br>

</body>

</html>