@csrf
<label>
    Nombre
    <input class="form-control" type="text" name="name" placeholder="Nombre..." value="{{ old('name', $user->name) }}">
</label>
<br>
<br>
<label>
    Email
    <input class="form-control" type="email" name="email" placeholder="Email..." value="{{ old('email', $user->email) }}">
</label>
<br>
<br>
<label>
    Roles
    <select class="form-control" name="rol_id" id="rol_id" value="{{ old('rol', $user->rol_id) }}">
        <option>Seleccion una opcion</option>
        @foreach ($roles as $rol)
            @if ($user->rol_id && $user->rol_id == $rol->id)
                <option selected="selected" value="{{ $rol->id }}">{{ $rol->nombre }}</option>
            @else
                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
            @endif
        @endforeach
    </select>
</label>
<br>
<br>
<label>
    Password
    <input class="form-control" type="password" name="password" placeholder="Password..." value="{{ old('password', $user->password) }}">
</label>
<br>
<br>
<button class="btn btn-primary">{{ $btnText }}</button>  <button class="btn btn-warning"><a href="{{ route('users') }}" >Atras</a></button>