<?php

namespace App\Http\Controllers;

use App\Participant;
use App\City;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{

    public function create(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $email = $request->input('email');
        $city = $request->input('city_id');
        $phone = $request->input('phone');

        Participant::create([
            'name'      => $name,
            'age'       => $age,
            'email'     => $email,
            'phone'     => $phone,
            'city_id'   => $city
        ]);

        return redirect('/actividad/dashboard');
    }


    public function edit(Participant $id)
    {
        $participant = Participant::find($id);
        $cities = City::all();
        return view('edit', compact('participant', 'cities'));
    }


    public function update(Request $request, $id)
    {
        $participant = Participant::find($id);

        $participant->name = $request->name;
        $participant->age = $request->age;
        $participant->email = $request->email;
        $participant->phone = $request->phone;
        $participant->city_id = $request->city_id;

        $participant->save();
        return redirect('/actividad/dashboard');
    }


    public function destroy(Participant $participant, $id)
    {
        $participant = Participant::find($id);
        $participant->delete();

        session()->flash('message', 'Participante eliminado');
        return redirect('/actividad/dashboard');
    }
}
