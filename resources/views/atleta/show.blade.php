@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Atleta: {{$atleta->firstName . ' '. $atleta->lastName}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-secondary' href="/atletas"> Back </a> 
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
                            <td>Pasaporte</td>
                            <td>Nombre</td>
                            <td>E-mail</td>
                            <td>Pais</td>
                            <td>Numero local</td>
                            <td>Celular</td>
                            <td>Apodo</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Lugar de Nacimiento</td>
                            <td>Ciudad</td>
                            <td>Tipo de Sangre</td>
                            <td>Altura (m)</td>
                            <td>Peso (Kg)</td>
                            <td>Pie Dominante</td>
                            <td>Posicion</td>
                            <td>Club Anterior</td>
                            <td>Escuela</td>
                            <td>Talla de Zapatos</td>
                            <td>Talla de Camisa</td>
                            <td>Talla de Short</td>
                            <td>Alergias</td>
                            <td>Lesiones</td>
                            <td>Descripcion</td>
                        </tr>
                        <tr>
                            <td>{{ $atleta->CIAtleta }}</td>
                            <td>{{ $atleta->passport }}</td>
                            <td>{{ $atleta->firstName . ' ' . $atleta->secondName . ' ' . $atleta->lastName . ' ' . $atleta->secondLastName }}</td>
                            <td>{{ $atleta->email }}</td>
                            <td>{{ $atleta->country }}</td>
                            <td>{{ $atleta->phoneNumber }}</td>
                            <td>{{ $atleta->cellphone }}</td>
                            <td>{{ $atleta->nickname }}</td>
                            <td>{{ $atleta->birthDate }}</td>
                            <td>{{ $atleta->birthPlace }}</td>
                            <td>{{ $atleta->city }}</td>
                            <td>{{ $atleta->bloodType }}</td>
                            <td>{{ $atleta->height }}</td>
                            <td>{{ $atleta->weight }}</td>
                            <td>{{ $atleta->foot }}</td>
                            <td>{{ $atleta->position }}</td>
                            <td>{{ $atleta->previousClub }}</td>
                            <td>{{ $atleta->highSchool }}</td>
                            <td>{{ $atleta->footSize }}</td>
                            <td>{{ $atleta->shirtSize }}</td>
                            <td>{{ $atleta->pantSize }}</td>
                            <td>{{ $atleta->allergy }}</td>
                            <td>{{ $atleta->injuries }}</td>
                            <td>{{ $atleta->description }}</td>
                        </tr>
                </table>
            </div>
        </div>       

    </div>
@endsection