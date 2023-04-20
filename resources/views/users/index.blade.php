@extends('layouts.layout')

@section('titulo', 'Home Usuarios')

@section('contenido')
    @include('partials.alerts')
    {{-- menú de usuarios --}}
    @include('users.partials.menu')
    {{-- Fin del menu --}}

    {{-- Lista de artículos --}}

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($users as $user) 
            <tr>
                <td scope="row">{{ $user->id  }}</td>
                <td>{{ $user->name  }}</td>
                <td>{{ $user->email  }}</td>
                <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                <td>

                    <a href="users/edit/{{$user->id}}" title="Editar"><i class="bi bi-pencil-fill"></i></a>
                    <a href="users/editRole/{{$user->id}}" title="Actualizar rol"><i class="bi bi-gear-fill"></i></a>
                    <a href="users/show/{{$user->id}}" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                    <a href="users/destroy/{{$user->id}}" title="Eliminar"><i class="bi bi-trash-fill" onclick="event.preventDefault();
                        if(confirm('¿Estás seguro de que deseas eliminar este user?')){
                            document.getElementById('delete-form-{{ $user->id }}').submit();
                        }"></i></a>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @empty 
            <li>No hay usuarios registrados.</li> 
        @endforelse
        </tbody>
    </table>
    {{-- Fin lista --}}
    <br><br><br>

@endsection