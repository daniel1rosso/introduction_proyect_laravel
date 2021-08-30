@extends('layouts.app')

@section('seccion-user')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 style="color: brown">Users</h1>   
                @auth
                    <button style="background: yellowgreen" class="col-2 btn"><a style="color: white" href="{{ route('users.new') }}" >Nuevo</a></button>
                @endauth
                @if($users_systems->empty())
                    <br>
                    <ul>
                        @foreach ($users_systems as $user)
                            <li><span style="font-size: 20px;font-weight: bold;">Nombre: </span><a href="{{ route('users.getUser', $user->id ) }}">{{ $user->name }}</a>  <span style="font-size: 20px;font-weight: bold;color:green">Email: </span>{{ $user->email }}<br></li>
                        @endforeach
                    </ul>
                    <span style="font-size: 20px;font-weight: bold;color:blueviolet;">La cantidad de usuarios es: {{ count($users_systems) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection