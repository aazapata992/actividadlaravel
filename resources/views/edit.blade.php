@extends('layouts.main')

@section('title', 'Editar participante')

@section('content')
	<h2>EDITAR PARTICIPANTE</h2>
	<hr>
    <div class="row">
	    <form class="col s12" action="{{ url('actividad/update', array($participant->id)) }}" method="POST">
	    	{{ csrf_field() }}
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="name" name="name" type="text" class="validate" value="{{ $participant->name }}">
		          	<label for="name">Nombre</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="age" name="age" type="text" class="validate" value="{{ $participant->age }}">
		          	<label for="age">Edad</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="email" name="email" type="email" class="validate" value="{{ $participant->email }}">
		          	<label for="email">Email</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s6">
				    <select style="display:block;" name="city_id" id="city">
				      	<option value="" disabled selected>Ciudad</option>
				      	@foreach($cities as $key=>$city)
				      	<option value="{{$city->id}}" {{$participant->city_id==$city->id ? 'selected': null}}>{{$city->name}}</option>
				      	@endforeach
				    </select>
				</div>
		        <div class="input-field col s6">
		          	<input id="phone" name="phone" type="text" class="validate" value="{{ $participant->phone }}">
		          	<label for="phone">Teléfono</label>
		        </div>
		    </div>

		    <button class="btn waves-effect waves-light" type="submit" name="action">Editar<i class="material-icons right">edit</i></button>
	    </form>
  	</div>
@endsection