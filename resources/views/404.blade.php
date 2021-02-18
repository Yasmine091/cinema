
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col w-100 p-3" style="color: #0F2F43;">
            <h2> Hm... J'ai dû me tromper quelque part...</h2>
            <img src="/whale.jpg" alt="" title="">
        </div>
        <div class="col">
            <h1>ERROR 404</h1> <br>
            <p>Il semblerait que la page demandée n'existe pas.</p> <br><br>
            <a href="{{ route('redirecting') }}">Retourner sur la page d'accueil</a>
        </div>
    </div>
</div>
@endsection
