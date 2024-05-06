<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Versenyzo;


class VersenyzokController extends Controller
{
    public function index(){
        $versenyzok = DB::table('versenyzok')->get();
        return view('welcome',['versenyzok'=> $versenyzok]);
    }
    public function create(Request $request)
{
    $versenyzok = new Versenyzo();
    $versenyzok->nev = $request->nev;
    $versenyzok->kod = $request->kod;
    $versenyzok->save();

    

    return redirect('/versenyzo');
}
}
