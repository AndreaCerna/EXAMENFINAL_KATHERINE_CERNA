<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class micontrolador2 extends Controller
{
   //articulos

   public function registrararticulo()
   {
       return view('registrararticulo');
   }

   public function guardararticulo(Request $request)
   {

       $articulos = new Articulo;
       $articulos->nombre=$request->input('nombre');
       $articulos->cantidad=$request->input('cantidad');
       $articulos->precio=$request->input('precio');
       $articulos->fabricado=$request->input('fabricado');
       $articulos->save();

       return redirect()->route('registrararticulo');
   }

   public function consultararticulo()
   {
       $articulos = Articulo::all();
       return view('consultararticulo', compact('articulos'));
   }

   public function eliminararticulo($id)
   {
       $articulo = Articulo::find($id);
       $articulo->delete();
       return redirect()->route('consultararticulo');
   }

   public function muestraarticulo($id)
   {
       $articulos = Articulo::find($id);
       return view('muestraarticulo', compact('articulos'));
   }

   public function editaarticulo(Request $request, $id)
   {   $articulos = Articulo::find($id);

       $articulos->nombre=$request->input('nombre');
       $articulos->cantidad=$request->input('cantidad');
       $articulos->precio=$request->input('precio');
       $articulos->fabricado=$request->input('fabricado');
       $articulos->save();

       return redirect()->route('consultararticulo');
       
   }
}
