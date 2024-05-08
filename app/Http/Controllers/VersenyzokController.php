<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Versenyzo;


class VersenyzokController extends Controller
{
    public function upload(Request $request)
{
    $versenyzok = new Versenyzo();
    $versenyzok->nev = $request->nev;
    $versenyzok->forddatum = $request->forddatum;
    $versenyzok->save();

    

    return response()->json(['message' => 'data upload']);
}
    public function deleteVersenyzo($id){
        $versenyzok= Versenyzo::find($id);
        $versenyzok->delete();
        return response()->json();
    }
}
