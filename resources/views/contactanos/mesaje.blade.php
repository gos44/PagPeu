@extends('layouts.app')

@section('title', 'Mensaje Enviado')

@section('content')
    <div class="alert alert-success text-center py-5">
        <h1>Mensaje enviado</h1>
        <p class="mt-3">Tu mensaje ha sido enviado correctamente.</p>
        <a href="{{ route('cursos.index') }}" class="btn btn-dark mt-3">Volver a la página principal</a>
    </div>
@endsection