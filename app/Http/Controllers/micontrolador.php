<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class micontrolador extends Controller

{
    public function registrarmedicamento()
    {
        return view('registrarmedicamento');
    }

    public function guardarmedicamento(Request $request)
    {

        $medicamentos = new Medicamento;
        $medicamentos->nombre=$request->input('nombre');
        $medicamentos->casa=$request->input('casa');
        $medicamentos->gramos=$request->input('gramos');
        $medicamentos->fecha=$request->input('fecha');
        $medicamentos->save();

        return redirect()->route('registrarmedicamento');
    }

    public function consultarmedicamento()
    {
        $medicamentos = Medicamento::all();
        return view('consultarmedicamento', compact('medicamentos'));
    }

    public function eliminarmedicamento($id)
    {
        $medicamento = Medicamento::find($id);
        $medicamento->delete();
        return redirect()->route('consultarmedicamento');
    }

    public function muestramedicamento($id)
    {
        $medicamentos = Medicamento::find($id);
        return view('muestramedicamento', compact('medicamentos'));
    }

    public function editamedicamento(Request $request, $id)
    {   $medicamentos = Medicamento::find($id);

        $medicamentos->nombre=$request->input('nombre');
        $medicamentos->casa=$request->input('casa');
        $medicamentos->gramos=$request->input('gramos');
        $medicamentos->fecha=$request->input('fecha');
        $medicamentos->save();

        return redirect()->route('consultarmedicamento');
        
    }

    
}
