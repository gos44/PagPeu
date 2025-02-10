@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Listado de Cursos</h1>
        <a href="{{ route('cursos.create') }}" class="btn btn-success mb-3">Crear Nuevo Curso</a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nombre }}</td>
                        <td>{{ $curso->descripcion }}</td>
                        <td>{{ $curso->fecha_inicio }}</td>
                        <td>{{ $curso->fecha_fin }}</td>
                        <td>
                            <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
