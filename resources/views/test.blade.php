@for($i = 0; $i < count($movies); $i++)

<h1>
{{ $movies['Search'][$i]['Title'] }}
</h1>

<p>
<img src="{{ $movies['Search'][$i]['Poster'] }}">
</p>

<form method="GET" action="/add/{{ $movies['Search'][$i]['imdbID'] }}">
<button type="submit">
Ajouter a la BDD
</button>
<a class="button is-success">Success</a>
</form>

@endfor