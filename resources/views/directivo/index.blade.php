@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Directivos </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-primary' href="/directivos/create"> Crear nuevo Directivo </a> 
            <a class='btn btn-secondary' href="/"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($directivos as $directivo)
                    <tr>
                        <td> <a href="/directivos/{{$directivo->CIDirectivo}}"> {{ $directivo->firstName . ' '. $directivo->lastName }} </a> </td>
                        <td> <a class="btn btn-secondary" href="/directivos/{{$directivo->CIDirectivo}}/edit"> Editar </a> </td>
                        <td> <a class="btn btn-secondary" href="/directivos/{{ $directivo->CIDirectivo}}/confirmDelete"> Borrar </a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>        
@endsection