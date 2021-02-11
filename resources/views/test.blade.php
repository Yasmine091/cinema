@foreach ($films as $film)

<h1>
{{ $film->title }}
</h1>

<p>
{{ $film->plot }}
</p>

@endforeach