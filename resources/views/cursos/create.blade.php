
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Crear Nuevo Curso</h1>
        <div class="card p-4">
            <form action="{{ route('cursos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea name="descripcion" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="fecha_inicio" class="form-label">Fecha de Inicio:</label>
                    <input type="date" name="fecha_inicio" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_fin" class="form-label">Fecha de Fin:</label>
                    <input type="date" name="fecha_fin" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
