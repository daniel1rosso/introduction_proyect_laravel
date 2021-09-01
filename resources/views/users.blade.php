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
                    <table class="form-control table col-12">
                        <thead>
                            <thead>
                                <tr class="col-12">
                                    <th class="col-4">Nombre</th>
                                    <th class="col-5">Email</th>
                                    <th class="col-3">Rol</th>
                                </tr>
                            </thead>
                            
                        </thead>
                        <tbody>
                            @foreach ($users_systems as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->rol->nombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <span style="font-size: 20px;font-weight: bold;color:blueviolet;">La cantidad de usuarios es: {{ count($users_systems) }}</span>
                
            </div>
        </div>
    </div>
</div>

@endsection