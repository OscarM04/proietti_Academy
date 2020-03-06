@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Representantes </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-primary' href="/representantes/create"> Crear nuevo Representante </a> 
            <a class='btn btn-secondary' href="/"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($representantes as $representante)
                    <tr>
                        <td> <a href="/representantes/{{$representante->idRepresentante}}"> {{ $representante->firstName .' '. $representante->lastName }} </a> </td>
                        <td> <a class="btn btn-secondary" href="/directivos/{{$representante->idRepresentante}}/edit"> Editar </a> </td>
                        <td> <a class="btn btn-secondary" href="#"> Borrar </a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>        
@endsection