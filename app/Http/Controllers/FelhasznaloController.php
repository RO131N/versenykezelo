<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Felhasznalo;


class FelhasznaloController extends Controller
{
    public function index(){
        $felhasznalok = DB::table('felhasznalok')->get();
        return view('welcome',['felhasznalok'=> $felhasznalok]);
    }
}
