@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Edit directivo {{$directivo->firstName .' '. $directivo->lastName }} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-secondary' href="/directivos"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif()
            <form action="/directivos/{{$directivo->CIDirectivo}}" method="POST">
                @csrf
                @method('put')         

                <div class="form-group">
                    <label for="firstName "> Primer Nombre </label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Escribe el primer nombre" value="{{ old('firstName') }}">            
                </div>

                <div class="form-group">
                    <label for="secondName"> Segundo Nombre </label>
                    <input type="text" class="form-control" id="secondName" name="secondName" placeholder="Escribe el segundo nombre" value="{{ old('secondName') }}">               
                </div>

                <div class="form-group">
                    <label for="lastName"> Primer Apellido </label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Escribe el primer apellido" value="{{ old('lastName') }}">               
                </div>

                <div class="form-group">
                    <label for="secondLastName"> Segundo Apellido </label>
                    <input type="text" class="form-control" id="secondLastName" name="secondLastName" placeholder="Escribe el segundo apellido" value="{{ old('secondLastName') }}">               
                </div>

                <div class="form-group">
                    <label for="email"> E-mail </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Escribe el e-mail" value="{{ old('email') }}">               
                </div>

                <div class="form-group">
                    <label for="phoneNumber"> Numero de telefono </label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Escribe el numero de telefono" value="{{ old('phoneNumber') }}">               
                </div>

                <div class="form-group">
                    <label for="role"> Rol </label>
                    <input type="text" class="form-control" id="role" name="role" placeholder="Escribe el rol" value="{{ old('role') }}">               
                </div>
                <button type="submit" class="btn btn-primary"> Actualizar </button>
            </form>
        </div>
    </div>        
@endsection