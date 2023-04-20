@extends('layouts.layout')

@section('titulo', 'Home Clientes')

@section('contenido')
    @include('partials.alerts')
    {{-- menú de clientes --}}
    @include('clients.partials.menu')
    {{-- Fin del menu --}}

    {{-- Lista de artículos --}}

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($clients as $client) 
            <tr>
                <td scope="row">{{ $client->id  }}</td>
                <td>{{ $client->name  }}</td>
                <td>{{ $client->email  }}</td>
                <td>{{ $client->telephone_number }}</td>
                <td>

                    <a href="clients/edit/{{$client->id}}" title="Editar"><i class="bi bi-pencil-fill"></i></a>
                    <a href="clients/show/{{$client->id}}" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                    <a href="clients/destroy/{{$client->id}}" title="Eliminar"><i class="bi bi-trash-fill" onclick="event.preventDefault();
                        if(confirm('¿Estás seguro de que deseas eliminar este cliente?')){
                            document.getElementById('delete-form-{{ $client->id }}').submit();
                        }"></i></a>
                    <form id="delete-form-{{ $client->id }}" action="{{ route('clients.destroy', ['id' => $client->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @empty 
            <li>No hay clientes registrados.</li> 
        @endforelse
        </tbody>
    </table>
    {{-- Fin lista --}}
    <br><br><br>

@endsection