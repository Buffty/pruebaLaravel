<?php

namespace App\Http\Controllers;

use App\Models\publicaciones;
use Illuminate\Http\Request;

class publicacionesController extends Controller
{
    public function index(Request $request){
        $publicaciones = publicaciones::paginate(10);
        $page = $request->input('page');
        return view('tabla.publicaciones',compact('publicaciones','page'));
    }
}
