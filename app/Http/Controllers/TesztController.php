<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index(){
       $tesztek = response()->json(Kategoria::with('kategoria')->get());
       return $tesztek;
    }

    public function show($id){
        return Teszt::find($id);
    }

}
