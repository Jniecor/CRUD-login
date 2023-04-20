@extends('layouts.layout')

@section("titulo","Home")

@section('contenido')
    {{-- contenido del home --}}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
            <p class="card-text">Administra tus clientes aquí</p>
            <a href="{{ route('clients.index') }}" class="btn btn-primary">Ir a clientes</a>
        </div>
    </div>
@endsection