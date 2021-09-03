@extends('layouts.app')

@section('template_title')
    {{ $car->name ?? 'Show Car' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Car</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Patente:</strong>
                            {{ $car->patente }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $car->color }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $car->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $car->precio }}
                        </div>
                        <div class="form-group">
                            <strong>User:</strong>
                            {{ $car->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
