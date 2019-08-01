@extends('layouts.app')

@section('content') 
	<div class="container" style="padding-bottom: 100px;"> 
		<div class="col-12">
			<h1 class="slog-h1">Acerca de Nosotros</h1>
		</div>
		<div class="col-12">
			@foreach ($data as $rex)
			<p class="slog-p">{{ $rex->politicas }}</p>
			@endforeach
		</div>
	</div>
@endsection