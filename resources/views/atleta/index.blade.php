@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Atletas </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-primary' href="/atletas/create"> Crear nuevo Atleta </a> 
            <a class='btn btn-secondary' href="/"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($atletas as $atleta)
                    <tr>
                        <td> <a href="/atletas/{{$atleta->CIAtleta}}"> {{ $atleta->firstName .' '. $atleta->lastName }} </a> </td>
                        <td> <a class="btn btn-secondary" href="/atletas/{{$atleta->CIAtleta}}/edit"> Editar </a> </td>
                        <td> <a class="btn btn-secondary" href="#"> Borrar </a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>        
@endsection