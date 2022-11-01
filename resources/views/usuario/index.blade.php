@extends('usuario.layout')
@section('titulo', 'Inicio')
@section('contenido')
    <div class="container">
        <h2>Laravel CRUD - Ejemplo</h2>
        <a class="btn btn-primary" href=" {{ route('usuario.create') }} ">Crear usuario</a>
        <!-- Verificar -->
        @if ($message = Session::get('Success'))
            <div class="alert alert-Success mt-3">
                <span>{{ $message }}</span>
            </div>
        @endif
        <!-- Crear tabla para mostrar resultados -->
        <table class="table table-light table-striped table-hover">
            <!-- Declarar el encabezado -->
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>email</th>
                
                <th width="200px">Operaciones</th>
            </tr>
            <!-- Para agregar los registros -->
            @foreach ($usuario as $usuario)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $usuario->nombre }}</td>  <!--  -->
                    <td>{{ $usuario->apellidos }}</td>
                    <td>{{ $usuario->email }}</td>
                    
                    <td>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST"> <!-- Para eliminar registro -->
                            <a class="btn btn-info btn-sm text-white" href="{{ route('alumnos.show', $alumno->id) }}">Mostrar</a> <!-- Para mostrar los registros -->
                            <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection