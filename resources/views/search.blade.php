@extends('layouts.app')

@section('content')

<div class="container text-dblue">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb d-block">
            <ol class="breadcrumb bg-transparent py-2">
                <li class="breadcrumb-item" aria-current="page"><i class="fas fa-chevron-left mr-3 text-dblue"></i><a class="font-weight-bolder text-dblue" href="/"><u>Revenir à l'accueil</u></a></li>
            </ol>
        </nav>

        <form class="form-inline d-block" method="GET" action="/search/{{ request()->input('searchTerm') }}">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" name="searchTerm" class="bg-transparent form-control border-left-0" placeholder="Rechercher">
            </div>
        </form>

    </div>
    
    {{ dd($movies) }}

    @foreach ($movies as $movie)
    @endforeach
@endsection