<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\City;
use App\Participant;

Route::get('/', function () {
    return view('welcome');
});

//Grupo
Route::group(['prefix' => 'actividad'], function(){
	Route::get('/register', function(){
		$cities = City::limit(50)->get();
		return view('register', compact('cities'));
	});

	Route::get('/dashboard', function(){
		// $participants = Participant::limit(6)->get();
		$participants = Participant::join('cities', 'cities.id', '=', 'participants.city_id')
						->select('cities.name AS cityname', 'participants.*')
						->get();

		return view('dashboard', compact('participants'));
	});

	Route::post('/insert', 'ParticipantController@create');
	Route::get('/edit/{id}', 'ParticipantController@edit');
	Route::post('/update/{id}', 'ParticipantController@update');
	Route::get('/delete/{id}', 'ParticipantController@destroy');

});