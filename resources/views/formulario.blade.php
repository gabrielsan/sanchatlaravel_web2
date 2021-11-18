@extends('layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<br><br>

<center>
    <form method="POST" action="{{url('usuarios',$user->id)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <label class="col-2" for="nome" style="font-size:20px; color:black; text-decoration:none">Nome:</label>
            <input type="text" name="name" id="nome" class="col-5" value="{{ $user->name }}" />
            <br>
            <label class="col-2" for="nasc" style="font-size:20px; color:black; text-decoration:none">Email:</label>
            <input type="text" name="email" id="nasc" class="col-3" value="{{ $user->email }}" />
        </div>
        <br>
        <button type="submit" class="button" style="background-color:#641DA3; border-radius:5px; height:71px; width:10%; font-size:20px; color:white">Salvar</button>
    </form>
</center>

@endsection