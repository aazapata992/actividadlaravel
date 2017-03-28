@extends('layouts.main')

@section('title', 'Dashboard Actividad')

@section('content')
	<h2>DASHBOARD PARTICIPANTES</h2>
	<hr>
	<div class="row">
        <div class="col s12">
            <table class="striped">
              	<thead>
                	<tr>
                    	<th>Nombre</th>
                    	<th>Edad</th>
                    	<th>E-mail</th>
                    	<th>Télefono</th>
                    	<th>Ciudad</th>
                    	<th>Opciones</th>
                	</tr>
              	</thead>
              	<tbody>
              		@foreach($participants as $key => $participant)
		                <tr>
			                <td>{{ $participant->name }}</td>
			                <td>{{ $participant->age }}</td>
			                <td>{{ $participant->email }}</td>
			                <td>{{ $participant->phone }}</td>
			                <td>{{ $participant->cityname }}</td>
			                <td style="position:relative">
			                	<div class="fixed-action-btn horizontal" style="position: absolute;top: 8px;">
								    <a class="btn-floating btn-large red">
								      	<i class="large material-icons">list</i>
								    </a>
								    <ul>
								      	<li><a class="btn-floating red" href="{{ url('/actividad/delete', array($participant->id)) }}"><i class="material-icons">delete</i></a></li>
								      	<li><a class="btn-floating blue" href="{{ url('/actividad/edit', array($participant->id)) }}"><i class="material-icons">mode_edit</i></a></li>
								    </ul>
								</div>
			                </td>
		                </tr>
	                @endforeach
              	</tbody>
            </table>
        </div>
    </div>
	<h3>Agregar más participantes</h3>
    <a class="btn-floating btn-large waves-effect waves-light red" href="{{ url('/actividad/register') }}"><i class="material-icons">add</i></a>
@endsection