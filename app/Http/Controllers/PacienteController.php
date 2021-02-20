<?php

namespace App\Http\Controllers;


use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('paciente', ['pacientes'=>$pacientes, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::all();
        return view('paciente', ['pacientes'=>$pacientes, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->cedula = $request->input('cedula');
        $paciente->primerNombre = $request->input('primerNombre');
        $paciente->segundoNombre = $request->input('segundoNombre');
        $paciente->edad = $request->input('edad');
        $paciente->especialidad = $request->input('especialidad');
        $paciente->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        $pacientes = Paciente::all();
        return view('paciente', ['pacientes'=>$pacientes, 'paciente'=>$paciente, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $pacientes = Paciente::all();
        return view('paciente', ['pacientes'=>$pacientes, 'paciente'=>$paciente, 'layout'=>'edit']);
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
        $paciente = Paciente::find($id);
        $paciente->cedula = $request->input('cedula');
        $paciente->primerNombre = $request->input('primerNombre');
        $paciente->segundoNombre = $request->input('segundoNombre');
        $paciente->edad = $request->input('edad');
        $paciente->especialidad = $request->input('especialidad');
        $paciente->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect('/');
    }
}
