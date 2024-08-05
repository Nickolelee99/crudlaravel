<!-- resources/views/materia/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $materia->nombre }}</h1>
        <p>{{ $materia->descripcion }}</p>
        <p>Créditos: {{ $materia->creditos }}</p>
        <p>Tipo: {{ $materia->tipo }}</p>
        <p>Valor por Hora: {{ $materia->valor_hora }}</p>
        <p>Estado: {{ $materia->estado }}</p>

        <a href="{{ route('materia.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
