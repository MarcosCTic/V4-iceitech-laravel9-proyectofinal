<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = Docente::all();
        return view('docentes.index', compact('data'));
    }
    public function create(){
        return view('docentes.create');
    }
    public function sendData(Request $request){
        $rules = [
            'nombres' => 'required|min:3',
            'apellidos' => 'required|min:3',
            'ci' => 'required|digits:8',
            'celular' => 'required',
            'correo' => 'required|email'
        ];
        $messages= [
            'nombres.required' => 'El nombre del docente es obligatorio.',
            'nombres.min' => 'El nombre del docente debe tener mas de 3 caracteres.',
            'apellidos.required' => 'Los apellidos del docente es obligatorio.',
            'apellidos.min' => 'Los apellidos del docente debe tener mas de 3 caracteres.',
            'ci.required' => 'El numero de cedula identidad del docente es obligatorio.',
            'ci.digits' => 'Ingrese un numero de cedula de identidad de 8 digitos obligatorio',
            'celular.required' => 'El numero de celular del docente es obligatorio.',
            'correo.required' => 'El correo electronico del docente es obligatorio.',
            'correo.email' => 'ingrese una direccion de correo electronico valido'

        ];
        $this->validate($request,$rules,$messages);

        $docente = new Docente();
        $docente->nombres = $request->input('nombres');
        $docente->apellidos = $request->input('apellidos');
        $docente->ci = $request->input('ci');
        $docente->celular = $request->input('celular');
        $docente->correo = $request->input('correo');
        $docente->save();

        return redirect('/docentes');
    }
    public function edit(Docente $docente){
        return view('docentes.edit', compact ('docente'));
    }
    public function update(Request $request, Docente $docente){

        $rules = [
            'nombres' => 'required|min:3',
            'apellidos' => 'required|min:3',
            'ci' => 'required|digits:8',
            'celular' => 'required',
            'correo' => 'required|email'
        ];
        $messages= [
            'nombres.required' => 'El nombre del docente es obligatorio.',
            'nombres.min' => 'El nombre del docente debe tener mas de 3 caracteres.',
            'apellidos.required' => 'Los apellidos del docente es obligatorio.',
            'apellidos.min' => 'Los apellidos del docente debe tener mas de 3 caracteres.',
            'ci.required' => 'El numero de cedula identidad del docente es obligatorio.',
            'ci.digits' => 'Ingrese un numero de cedula de identidad de 8 digitos obligatorio',
            'celular.required' => 'El numero de celular del docente es obligatorio.',
            'correo.required' => 'El correo electronico del docente es obligatorio.',
            'correo.email' => 'ingrese una direccion de correo electronico valido'

        ];
        $this->validate($request,$rules,$messages);

        $docente->nombres = $request->input('nombres');
        $docente->apellidos = $request->input('apellidos');
        $docente->ci = $request->input('ci');
        $docente->celular = $request->input('celular');
        $docente->correo = $request->input('correo');
        $docente->save();

        return redirect('/docentes');
    }
    public function destroy(Docente $docente){
        $docente->delete();
        return redirect('/docentes');
    }

}
