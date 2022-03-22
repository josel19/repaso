<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Recurso;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
          $personas = Persona::all();
          return view('index', compact("personas"));
    }
}
