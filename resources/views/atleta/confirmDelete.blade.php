@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Borrar atleta {{$atleta->CIAtleta . ': '. $atleta->firstName . ' '. $atleta->lastName}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-secondary' href="/atletas"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <form action="/atletas/{{$atleta->CIAtleta}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">Borrar</button>
            </form>
        </div>
    </div>        
@endsection