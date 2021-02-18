@extends('layouts.app')

@section('content')

@for($i = 0; $i < count($movies); $i++)

<h1>
{{ $movies['Search'][$i]['Title'] }}
</h1>

<p>
<img src="{{ $movies['Search'][$i]['Poster'] }}">
</p>

<form method="GET" action="/add/{{ $movies['Search'][$i]['imdbID'] }}">

<button type="submit" class="btn btn-success">
Ajouter a la BDD
</button>

</form>

@endfor

<a href="" class="btn btn-info">Previous page</a>
<a href="" class="btn btn-info">Next page</a>

@endsection