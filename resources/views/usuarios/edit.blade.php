@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2>Editar usuario: {{ $user->name }}</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" value="{{ $user->name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="password">Contraseña <span class="small">(Opcional)</span></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-6">
                <label for="password_conf">Confirme Contraseña <span class="small">(Opcional)</span></label>
                <input type="password" name="password_confirmation" id="password_conf" class="form-control" placeholder="Confirme Contraseña">
            </div>
        </div>

        
        <div class="row">
            <div class="form-group col-md-6">
                <label for="rol">Rol</label>
                <select name="rol" class="form-control">
                    <option selected disabled>Elige un rol para este usuario</option>
                    @foreach ($roles as $role)
                    @if ($role->name == str_replace(array('["', '"]'), '', $user->tieneRol()))
                        <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                    @else 
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endif
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="image">Imagen</label>
                <input type="file" name="imagen" id="image" class="form-control">
                @if ($user->imagen != "")
                    <img src="{{ asset('imagenes/'.$user->imagen) }}" alt="{{ $user->imagen }}" height="40px" width="40px">
                @endif
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </form>
</div>

@endsection