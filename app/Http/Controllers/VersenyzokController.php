<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Versenyzo;


class VersenyzokController extends Controller
{
    public function index(){
        $versenyzok = DB::table('versenyzok')->get();
        return view('welcome',['versenyzok'=> $versenyzok]);
    }
}
