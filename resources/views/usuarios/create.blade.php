@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2>Crear nuevo usuario</h2>
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

    <form action="/usuarios" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Nombre</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
              <label for="password">Contraseña</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-6">
              <label for="password_conf">Confirme Contraseña</label>
              <input type="password" name="password_confirmation" id="password_conf" class="form-control" placeholder="Confirme Contraseña">
            </div>
        </div>

        
        <div class="row">
            <div class="form-group col-md-6">
                <label for="rol">Rol</label>
                <select name="rol" class="form-control">
                    <option selected disabled>Elige un rol para este usuario</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
            <label for="image">Imagen</label>
            <input type="file" name="imagen" id="image" class="form-control">
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