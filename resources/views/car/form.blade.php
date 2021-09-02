<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('patente') }}
            {{ Form::text('patente', $car->patente, ['class' => 'form-control' . ($errors->has('patente') ? ' is-invalid' : ''), 'placeholder' => 'Patente']) }}
            {!! $errors->first('patente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $car->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $car->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $car->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            -{{var_dump($users_select)}}
            {!! Form::select('user_id', [null => 'Selecciones una opcion correcta'] + ['Albania' => 'Albania','Kosovo'=>'Kosovo','Germany'=>'Germany','France'=>'France'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>