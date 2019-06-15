<?php

namespace App\Http\Controllers;

use App\Model\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{

    public function index() {
      $facultades = Facultad::all();
      return response()->json($facultades,200);
    }

    public function create(Request $request) {
       $facultad = new Facultad;
       $facultad->nombre = $request->nombre;
       
       $facultad->save();
       return response()->json($facultad,200);
    }

    public function show($id)
    {
       $facultad = Facultad::find($id);
       return response()->json($facultad,200);
    }

    public function update(Request $request, $id)
    { 
       $facultad= Product::find($id);
        
       $facultad->nombre = $request->input('nombre');
       $facultad->save();
       return response()->json($facultad,200);
    }

    public function destroy($id)
    {
       $facultad = Facultad::find($id);
       $facultad->delete();
       return response()->json('facultad removida satisfactoriamente',200);
    }
}