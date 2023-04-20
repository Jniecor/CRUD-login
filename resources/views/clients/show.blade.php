@extends('layouts.layout')

@section('subtitulo', 'Información del cliente')
@section('contenido')
    @include('partials.alerts') 
    <div class="card">
        <div class="card-header">
          Información sobre el cliente
        </div>
        <div class="card-body">
           <!-- Formulario  -->

            <form>
                @csrf
            
                <!-- Nombre  -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$client->name}}" autofocus readonly>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Telefono  -->
                <div class="mb-3">
                    <label for="telephone_number" class="form-label">Telefono</label>
                    <input type="tel" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{$client->telephone_number}}" required autocomplete="nombre" autofocus readonly>
                    @error('telephone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Email  -->
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$client->email}}" required autocomplete="nombre" autofocus readonly>
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
            <a class="btn btn-secondary" href="{{ route ('clients.index')}}" role="button">Atrás</a>
        </div>
       
        </form>
    </div>
    <br><br><br>


@endsection