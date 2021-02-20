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

<div class="container text-dblue my-5" id="movies">
    <div class="d-flex justify-content-between mx-2 px-2">
        <div class="d-block py-2">
            <h3 class="font-weight-bolder text-uppercase" aria-current="page">Films :</h3>
        </div>

        <div class="d-block">

            <form class="form-inline d-block my-1" method="GET" role="search" action="javascript:
                window.location.replace('/search/' + document.getElementById('searchTerm').value)">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" name="searchTerm" id="searchTerm" class="bg-transparent form-control border-left-0" placeholder="Rechercher">
                </div>
            </form>

            <form class="form-inline d-block my-1" method="GET" action="#movies">
            <div class="btn-group d-block text-right">
                <button type="button" class="btn btn-transparent">Trier par : </button>
                <button type="button" class="btn btn-transparent dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/sortBy/title">Titre du film</a>
                    <a class="dropdown-item" href="/sortBy/runtime">Durée du film</a>
                    <a class="dropdown-item"  href="/sortBy/released">Année de sortie</a>
                </div>
            </div>
            </form>

        </div>

    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @foreach ($movies as $movie)
            <div class="col mb-4">
                <div class="card">
                    <a href="{{ route('movie', ['id' => $movie->id]) }}"><img src="{{ $movie->poster }}" class="card-img-top movie-img" alt="Affiche du film {{ $movie->title }}"></a>
                    <div class="card-body p-2">
                        <a class="text-dblue" href="{{ route('movie', ['id' => $movie->id]) }}">
                            <h5 class="card-title">{{ substr($movie->title, 0, 22) }}..</h5>
                        </a>
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