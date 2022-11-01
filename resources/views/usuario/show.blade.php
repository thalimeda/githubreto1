@extends('usuario.layout')
@section('titulo', 'Mostrar Usuario')
@section('contenido')
    <div class="container">
        <h2>Mostrar usuario</h2>
        <a class="btn btn-primary" href="{{ route('usuario.index') }}">
            < Retroceder</a>
                <table class="table table-light table-striped table-hover">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>email</th>
                        
                    </tr>
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellidos }}</td>
                        <td>{{ $usuario->email }}</td>
                        
                    </tr>
                </table>
    </div>
@endsection