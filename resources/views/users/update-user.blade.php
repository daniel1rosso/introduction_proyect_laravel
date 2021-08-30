@extends('layouts.app')

@section('seccion-user')

@if ($user)    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Update user</h1>

                    @include('partials/validation-errors')

                    <form method="POST" action="{{ route('users.update', $user) }}">

                        @method('PUT')

                        @include('users/form', ['btnText' => 'Actualizar Usuario', 'user' => $user])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection