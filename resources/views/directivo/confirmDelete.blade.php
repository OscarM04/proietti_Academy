@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Delete Directivo {{$directivo->CIDirectivo }} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-secondary' href="/directivos"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <form action="/directivos/{{$directivo->CIDirectivo}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">Borrar</button>
            </form>
        </div>
    </div>        
@endsection