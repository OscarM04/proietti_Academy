@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">  
                                <ul> 
                                    <a href="/directivos"> Directivos </a> 
                                </ul>
                                <ul>
                                    <a href="/atletas"> Atletas </a>
                                </ul>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection