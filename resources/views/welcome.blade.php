@extends('layouts.main')

@section('title', 'Bienvenido')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>Bienvenido</h1>
			<h2>Registrate y participa por.... Bueno por lo que sea</h2>
		</div>
		<div class="col-md-4">
			<a href="{{url('/actividad/register')}}" class="waves-effect waves-light btn-large">Participa</a>
		</div>
	</div>
@endsection