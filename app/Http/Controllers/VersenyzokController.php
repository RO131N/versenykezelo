<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Versenyzo;


class VersenyzokController extends Controller
{
    
    public function store(Request $request)
{
    
    $versenyzok = new Versenyzo();
    $versenyzok->nev = $request->input('nev');
    $versenyzok->forddatum = $request->input('forddatum');
    $versenyzok->save();
    
}
    //public function deleteVersenyzo($id){
       // $versenyzok= Versenyzo::find($id);
        //$versenyzok->delete();
        //return response()->json();
   // }
}
