@extends('layouts.app')

@section('seccion-user')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>New user</h1>
                    
                    @include('partials/validation-errors')

                    <form method="POST" action="{{ route('users.newUser') }}">

                        @include('users/form', ['btnText' => 'Guardar Usuario', 'user' => $user])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection