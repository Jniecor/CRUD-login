@extends('layouts.layout')

@section('subtitulo', 'Añadir Nuevo Cliente')
@section('contenido')
    @include('partials.alerts') 
    <div class="card">
        <div class="card-header">
          Formulario Nuevo Cliente
        </div>
        <div class="card-body">
           <!-- Formulario  -->

            <form action={{route('clients.store')}} method="POST">
                @csrf
            
                <!-- Nombre  -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Telefono  -->
                <div class="mb-3">
                    <label for="telephone_number" class="form-label">Telefono</label>
                    <input type="tel" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}" required autocomplete="nombre" autofocus>
                    @error('telephone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Email  -->
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="nombre" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


                
            </div>
        {{-- Fin Formulario --}}
    
         
        
        <div class="card-footer text-muted">
             <!-- Botones de acción --------------------------------------------------->
            <a class="btn btn-secondary" href="{{ route ('clients.index')}}" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </div>
       
        </form>
    </div>
    <br><br><br>


@endsection