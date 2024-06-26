<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Versenyzo;


class VersenyzokController extends Controller
{
    //Adatbázisba töltés
    public function store(Request $request)
{
    
    $versenyzok = new Versenyzo();
    $versenyzok->nev = $request->input('nev');
    $versenyzok->forddatum = $request->input('forddatum');
    $versenyzok->save();
    
}
//Kiíratás
public function fetchversenyzok()
    {
        $versenyzok = Versenyzo::all();
        return response()->json([
            'versenyzok'=>$versenyzok,
        ]);
    }
    //Törlés
public function destroy($id){
    $versenyzok= Versenyzo::find($id);
     $versenyzok->delete();
     return response()->json();
 }
}
