@extends('layouts.app')

@section('content')

<header>

<div class="jumbotron jumbotron-fluid text-light text-xl-center header-img bg-dark m-0 mb-5">
  <div class="container-fluid py-xl-5 mx-auto my-xl-5">
    <div class="py-xl-5 mx-auto my-xl-4">
      <h1 class="display-4 font-weight-bolder">Réserver vos films préférés sur :</h1>
      <br class="my-4">
      <div class="buttons">

        <p class="lead display-4">Tchi Tcha</p>
      </div>
    </div>
  </div>
</div>
</header>

<div class="container text-dblue my-5">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb d-block">
            <ol class="breadcrumb bg-transparent py-2">
                <li class="breadcrumb-item" aria-current="page"><i class="fas fa-chevron-left mr-3 text-dblue"></i><a class="font-weight-bolder text-dblue" href="/"><u>Revenir à l'accueil</u></a></li>
            </ol>
        </nav>

        <form class="form-inline d-block" method="GET" role="search" action="javascript:
                window.location.replace('/search/' + document.getElementById('searchTerm').value)">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" name="searchTerm" id="searchTerm" class="bg-transparent form-control border-left-0" placeholder="Rechercher">
            </div>
        </form>

    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @foreach ($movies as $movie)
            <div class="col mb-4">
                <div class="card">
                    <a href="{{ route('movie', ['id' => $movie->id]) }}"><img src="{{ $movie->poster }}" class="card-img-top movie-img" alt="Affiche du film {{ $movie->title }}"></a>
                    <div class="card-body p-2">
                    <a class="text-dblue" href="{{ route('movie', ['id' => $movie->id]) }}"><h5 class="card-title">{{ substr($movie->title, 0, 22) }}..</h5></a>
                        <p class="card-text">{{ substr($movie->plot, 0, 50) }}..</p>
                        <div class="d-flex my-2">
                        <div class="d-block">
                            @if ($movie->status === 1)
                            <span class="badge badge-transparent bg-lblue text-dblue font-weight-bolder">
                                Disponible
                            </span>
                            @else
                            <span class="badge badge-dark font-weight-bolder">
                                Indisponible
                            </span>
                            @endif
                        </div>
                        <div class="font-weight-bolder d-block w-100 text-right">{{ $movie->price }} €</div>
                    </div>
                    <input type="hidden" name="movieID" id="movieID" value="{{ $movie->id }}">
                    @if ($movie->status === 1)
                    <input class="btn btn-outline-primary w-100 text-dblue border-dblue" type="submit" name="rentMovie" id="rentMovie" value="Réserver maintenant">
                    @else
                    <input class="btn btn-outline-primary w-100 text-dblue border-dblue" type="submit" name="rentMovie" id="rentMovie" value="Réserver maintenant" disabled>
                    @endif
                </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $movies->links() }}
        </div>
    </div>
    @endsection