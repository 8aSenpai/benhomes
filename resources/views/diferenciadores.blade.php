@extends('layouts.app')

@section('content') 
	<div class="container" style="padding-bottom: 100px;">
		<div class="col-sm-12">
			<img class="img-fluid slog-img" src="{{ asset('img/edificio.jpeg') }}">
		</div> 
		<div class="col-12">
			<h1 class="slog-h1">Diferenciadores</h1>
		</div>
		<div class="col-12">
			@foreach ($data as $rex)
			<p class="slog-p">{{ $rex->diferenciadores }}</p>
			@endforeach
		</div>
	</div>
@endsection