@extends('layouts.layout')

@section("titulo","Actualizar rol")
@section('contenido')
    {{-- contenido del update-role --}}
    <form method="POST" action="{{ route('users.updateRole', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="role">Rol</label>
            <select name="role" id="role" class="form-control">
                @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
