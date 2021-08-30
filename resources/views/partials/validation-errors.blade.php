@if($errors->any())
    <h3>Errores por validacion</h3>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <br>
    <br>
@endif