@extends('layouts.app')

@section('content')
<div class="container text-dblue">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb d-block">
            <ol class="breadcrumb bg-transparent py-2">
                <li class="breadcrumb-item" aria-current="page"><i class="fas fa-chevron-left mr-3 text-dblue"></i><a class="font-weight-bolder text-dblue" href="/"><u>Revenir à l'accueil</u></a></li>
            </ol>
        </nav>

        <form class="form-inline d-block">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="bg-transparent form-control border-left-0" placeholder="Rechercher">
            </div>
        </form>

    </div>
    @foreach ($movie as $mov)
    <div class="card mx-auto">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ $mov->poster }}" alt="Image du film {{ $mov->title }}" class="img-thumbnail">
                    <div class="d-flex my-2">
                        <div class="d-block">
                            @if ($mov->status === 1)
                            <span class="badge badge-transparent bg-lblue text-dblue font-weight-bolder">
                                Disponible
                            </span>
                            @else
                            <span class="badge badge-dark font-weight-bolder">
                                Indisponible
                            </span>
                            @endif
                        </div>
                        <div class="font-weight-bolder d-block w-100 text-right">{{ $mov->price }} €</div>
                    </div>
                    <input type="hidden" name="movieID" id="movieID" value="{{ $mov->id }}">
                    <input class="btn btn-outline-primary w-100 text-dblue border-dblue" type="submit" name="rentMovie" id="rentMovie" value="Réserver maintenant">
                </div>

                <div class="col-md-9">
                    <h5 class="card-title font-weight-bolder mt-1">{{ $mov->title }}</h5>
                    <p class="card-text d-flex">
                        <span class="small mr-4 text-dblue"><b>Durée : </b><i>{{ $mov->runtime }}</i></span>
                        <span class="small ml-4 text-dblue"><b>Sorti en : </b><i>{{ $mov->released }}</i></span>
                    </p>
                    <p class="card-text">{{ $mov->plot }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endforeach

</div>
@endsection