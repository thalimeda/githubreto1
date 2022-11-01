@extends('usuario.layout')
@section('titulo', 'Crear usuario')
@section('contenido')
    <div class="container">
        <h2>Crear usuario</h2>
        <a class="btn btn-primary" href="{{ route('usuario.index') }}">
            < Retroceder</a>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong>Tenemos algunos inconvenientes. <br>
                    </div>
                @endif
                <form action="{{ route('usuario.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <!-- Para agregar el nombre del alumnno -->
                        <strong>Nombre</strong>
                        <input type="text" name="nombre" class="form-group" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <!-- Para agregar el apellido del alumnno -->
                        <strong>Apellidos</strong>
                        <input type="text" name="apellidos" class="form-group" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                        <!-- Para agregar el DNI del alumnno -->
                        <strong>DNI</strong>
                        <input type="text" name="email" class="form-group" placeholder="email">
                    </div>
                    
                    <!-- Botón para guardar los cambios -->
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
    </div>
@endsection
