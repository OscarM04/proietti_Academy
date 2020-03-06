@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Directivo: {{$directivo->firstName . ' '. $directivo->lastName}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-secondary' href="/directivos"> Back </a> 
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container align-content-center justify-content-center">
                    <h3> Details </h3>
                </div>
                <table class="table">
                        
                        <tr>
                            <td>Cedula</td>
                            <td>Nombre</td>
                            <td>E-mail</td>
                            <td>Numero</td>
                            <td>Rol</td>
                        </tr>
                        <tr>
                            <td>{{ $directivo->CIDirectivo }}</td>
                            <td>{{ $directivo->firstName . ' ' . $directivo->secondName . ' ' . $directivo->lastName . ' ' . $directivo->secondLastName }}</td>
                            <td>{{ $directivo->email }}</td>
                            <td>{{ $directivo->phoneNumber }}</td>
                            <td>{{ $directivo->role }}</td>
                        </tr>
                </table>
            </div>
        </div>       

    </div>
@endsection