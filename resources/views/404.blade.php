@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-2">ERROR 404</h1> <br>
            <p class="display-4">Il semblerait que la page demandée n'existe pas.</p> <br><br>
            <button type="button" class="btn btn-lg btn-light">
            <a href="{{ route('redirecting') }}"><u>Retourner sur la page d'accueil</u></a>
            </button>
        </div>
        <div class="col w-100 p-3 mt-5 pt-5 ml-3 pl-5 " style="color: #0F2F43;">
            <h2> Hm... J'ai dû me tromper quelque part...</h2>
            <img src="/img/whale.jpg" alt="Dessin d'une baleine" title="whale erreur 404">
        </div>
    </div>
</div>
@endsection