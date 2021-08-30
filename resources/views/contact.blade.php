@extends('layouts.app')

@section('contact')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    @endif
                    <h1>Contact</h1>
                    <form method="POST" action="{{route('contact')}}">
                        @csrf
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre.." value="{{ old('nombre') }}"><br>
                        <input class="form-control" type="email" name="email" placeholder="Email.." value="{{ old('email') }}"><br>
                        <textarea class="form-control" name="contenido" cols="30" rows="10" placeholder="Mensaje"></textarea><br>
                        <button class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
