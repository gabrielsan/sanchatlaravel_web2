<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ProjetoSanchat - WEB2</title>
  <link rel="stylesheet" href="{{asset('css/initial/initial.css')}}" />
</head>


<body>

  <div style="background-image:url('img/iniciofundo/fundo.jpg');">
    <div style="background-image:url('img/iniciofundo/balonchat.svg'); background-repeat:no-repeat; background-position:left">
      <div style="background-image:url('img/iniciofundo/bot.svg'); background-repeat:no-repeat; background-position:right">


        <h>
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="color:black">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" style="color:black; text-decoration:none; font-size:20px;">Login</a>

            &nbsp &nbsp<h>|</h> &nbsp &nbsp
            <h><a href="" class="text-sm text-gray-700 underline" style="color:black; text-decoration:none; font-size:20px;">Quem somos</a></h>

            &nbsp &nbsp<h>|</h> &nbsp &nbsp
            <h><a href="" class="text-sm text-gray-700 underline" style="color:black; text-decoration:none; font-size:20px;">Sobre</a></h>
            &nbsp &nbsp &nbsp &nbsp

            &nbsp &nbsp<h>|</h> &nbsp &nbsp
            <h><a href="http://localhost:8000/usuarios" class="text-sm text-gray-700 underline" style="color:black; text-decoration:none; font-size:20px;">Crud</a></h>
            &nbsp &nbsp &nbsp &nbsp


            @endif

        </h>

        <a href="https://twitter.com/login?lang=pt"><img src="{{asset('img/brasil/twitter.jpg')}}" alt="tt" style="float:right" /></a>
        <a href="https://pt-br.facebook.com/"><img src="{{asset('img/brasil/facebook.jpg')}}" alt="Facebook" style="float:right" /></a>
        <img src="{{asset('img/brasil/brasa.jpg')}}" alt="Brasa" style="float:right" />



        <br><br><br><br>
        <center>

          <img src="{{asset('img/logo/logo.jpg')}}" alt="Logo" />

        </center>
      </div>

      <br><br><br><br><br>

      <div>
        <center><a href=""><button style="background-color:#641DA3; border-radius:5px; color:white; height:71px; width:10%; font-size:20px">Texto</button></a>
          &nbsp &nbsp <h>ou</h> &nbsp &nbsp
          <a href=""><button style="background-color:#641DA3; border-radius:5px; color:white; height:71px; width:10%; font-size:20px">Video</button></a>
        </center>
      </div>
      &nbsp &nbsp &nbsp
      <center><input style=" border-radius:5px; height:50px; width:20%; font-size:20px; border-color:#641DA3" type="text" name="nome" placeholder="Selecione o idioma" />
        <input style=" background-color:#641DA3; color:white; border-radius:5px; height:50px; width:10%; font-size:20px" type="button" value="Pesquisar" onclick="msg()" />
      </center>



      <br>
      <center>
        <button style="background-color:#641DA3; border-radius:5px; height:71px; width:10%; font-size:20px">
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="color:white; text-decoration:none">Cadastrar-se</a>
          @endif
          @endauth</button>
      </center>

      <br><br><br><br><br>
      <center>
        <h>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</h>
      </center>

      <br><br><br>

    </div>
  </div>

  </div>
</body>

</html>