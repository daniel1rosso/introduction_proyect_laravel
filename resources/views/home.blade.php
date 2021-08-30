@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @include('partials/messages-flash')

                    <h2 class="col-12" style="display: flex;place-content: center;">¡Bienvenido {{ auth()->user()->name }}!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
