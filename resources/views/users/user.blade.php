@extends('layouts.app')

@section('seccion-user')

@if ($user)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div col-12>
                        <h1>Welcome {{ $user->name }}</h1> 
                        <h4>Tu email es: </h4>{{ $user->email  }}
                    </div>
                    <br>
                    @auth
                        <button style="background: green;"><a style="color:white;" href="{{ route('users.edit', $user) }}" >Editar</a></button>  <button style="background: blue;"><a style="color:white;" href="{{ route('users') }}" >Atras</a></button>
                        <form method="POST" action="{{ route('users.destroy', $user) }}">
                            @csrf @method('DELETE')
                            <button class="btn" style="background: red;color:white;">Borrar</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@endsection