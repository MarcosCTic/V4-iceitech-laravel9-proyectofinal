<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $specialties = Speciality::all();
        return view('specialties.index', compact('specialties'));
    }

    public function create(){
        return view('specialties.create');
    }
    public function sendData(Request $request){

        $rules = [
            'name' => 'required|min:3'
        ];
        $messages= [
            'name.required' => 'El nombre de la especialidad es obligatorio.',
            'name.min' => 'El nombre de la especialidad debe tener mas de 3 caracteres.'
        ];
        $this->validate($request,$rules,$messages);

        $speciality = new Speciality();
        $speciality->name = $request->input('name');
        $speciality->descripcion = $request->input('descripcion');
        $speciality->save();

        return redirect('/especialidades');
    }

    public function edit(Speciality $speciality){
        return view('specialties.edit', compact ('speciality'));
    }

    public function update(Request $request, Speciality $speciality){

        $rules = [
            'name' => 'required|min:3'
        ];
        $messages= [
            'name.required' => 'El nombre de la especialidad es obligatorio.',
            'name.min' => 'El nombre de la especialidad debe tener mas de 3 caracteres.'
        ];
        $this->validate($request,$rules,$messages);

        $speciality->name = $request->input('name');
        $speciality->descripcion = $request->input('descripcion');
        $speciality->save();

        return redirect('/especialidades');
    }

    public function destroy(Speciality $speciality){
        $speciality->delete();
        return redirect('/especialidades');
    }
}
