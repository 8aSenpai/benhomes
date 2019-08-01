@extends('layouts.app')

@section('content') 
	<div class="container" style="padding-bottom: 100px;">
		<div class="col-sm-12">
			<img class="img-fluid slog-img" src="{{ asset('img/bienestar.jpeg') }}">
		</div> 
		<div class="col-12">
			<h1 class="slog-h1">Responsabilidad Social</h1>
		</div>
		<div class="col-12">
			@foreach ($data as $rex)
			<p class="slog-p">{{ $rex->responsabilidad }}</p>
			@endforeach
		</div>
	</div>
@endsection