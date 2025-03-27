
@extends('layouts.app')

@section('title', 'Correo Electronico')

@section('content')
    <div class="container">
    <h1>Correo Electronico</h1>
    <p>Este es el primer correo</p>
<p<strong>nombre:</strong> {{$data['name']}}</p>    
<p<strong>correo:</strong>{{$data['correo']}}</p>
<p<strong>mensaje:</strong>{{$data['mensaje']}}</p>

</div>
@endsection
