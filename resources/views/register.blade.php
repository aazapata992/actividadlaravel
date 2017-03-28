@extends('layouts.main')

@section('title', 'Registro participantes')

@section('content')
	<h2>REGISTRO PARTICIPANTES</h2>
	<hr>
    <div class="row">
	    <form class="col s12" action="{{ url('actividad/insert') }}" method="POST">
	    	{{ csrf_field() }}
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="name" name="name" type="text" class="validate" required>
		          	<label for="name">Nombre</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="age" name="age" type="text" class="validate" required>
		          	<label for="age">Edad</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="email" name="email" type="email" class="validate" required>
		          	<label for="email">Email</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s6">
				    <select style="display:block;" name="city_id" id="city" required>
				      	<option value="" disabled selected>Ciudad</option>
				      	@foreach($cities as $key=>$city)
				      	<option value="{{$city->id}}">{{$city->name}}</option>
				      	@endforeach
				    </select>
				</div>
		        <div class="input-field col s6">
		          	<input id="phone" name="phone" type="text" class="validate" required>
		          	<label for="phone">Teléfono</label>
		        </div>
		    </div>

		    <button class="btn waves-effect waves-light" type="submit" name="action">Registrar<i class="material-icons right">send</i></button>
	    </form>
  	</div>
@endsection