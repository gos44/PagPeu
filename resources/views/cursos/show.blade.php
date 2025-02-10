@extends('layouts.app')

@section('title', $curso->nombre)

@section('content')
    <div class="container">
        <h1>{{ $curso->nombre }}</h1>
        <p><strong>Descripción:</strong> {{ $curso->descripcion ?? 'No disponible' }}</p>
        <p><strong>Fecha de Inicio:</strong> {{ \Carbon\Carbon::parse($curso->fecha_inicio)->format('d/m/Y') }}</p>
        <p><strong>Fecha de Inicio:</strong> {{ \Carbon\Carbon::parse($curso->fecha_fin)->format('d/m/Y') }}</p>
        <a href="{{ route('cursos.index') }}" class="btn btn-primary">Volver a la lista</a>
    </div>
@endsection
