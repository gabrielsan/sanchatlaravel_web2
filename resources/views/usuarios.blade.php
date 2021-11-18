@extends('layout')
@section('content')

<center>
    <table width="467" border="1px" style="border-color:#641DA3; background-color:#641DA3">
        <thead>
            <tr>
                <th style="font-size:20px; color:black; background-color:white; text-decoration:none">Nome</th>
                <th style="font-size:20px; color:black;background-color:white; text-decoration:none">Email</th>
                <th style="font-size:20px; color:black;background-color:white; text-decoration:none">Editar</th>
                <th style="font-size:20px; color:black;background-color:white; text-decoration:none">Remover</th>

            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $user)
            <tr>
                <td style="background-color:white;">{{$user->name}}</td>
                <td style="background-color:white;">{{$user->email}}</td>
                <td style="background-color:white">
                    <button type="submit" class="button" style="background-color:#641DA3; text-decoration:none ">
                        <a href="{{route('usuarios.edit',$user->id)}}" class="button">
                            <h style="color:white">Editar</h>
                        </a>
                    </button>
                </td>
                <td style="background-color:white">
                    <form method="POST" action="{{route('usuarios.destroy',$user->id)}}" onsubmit="return confirm('tem certeza?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button" style="background-color:#641DA3;">
                            <h style="color:white">Remover</h>
                        </button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</center>
@endsection