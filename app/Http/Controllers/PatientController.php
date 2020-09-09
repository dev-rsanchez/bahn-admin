<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;

class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('search'));

            $patients = Patient::where('nombre', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(5);

            return view('pacientes.index', ['patients' => $patients, 'search' => $query]);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Patient();
        $paciente->id = request('id');
        $paciente->rut = request('rut');
        $paciente->nombre = request('nombre');
        $paciente->apellido = request('apellido');
        $paciente->fecha_nacimiento = request('fecha_nacimiento');
        $paciente->edad = request('edad');
        $paciente->sexo = request('sexo');
        $paciente->direccion = request('direccion');
        $paciente->email = request('email');
        $paciente->nacionalidad = request('nacionalidad');
        $paciente->actividad = request('actividad');
        $paciente->enteraste_bahn = request('enteraste_bahn');
        $paciente->motivo_consulta = request('motivo_consulta');
        $paciente->fecha_evaluacion = request('fecha_evaluacion');

        $paciente->save();

        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pacientes.show', ['patient' => Patient::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pacientes.edit', ['patient' => Patient::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect('/pacientes');
    }
}
