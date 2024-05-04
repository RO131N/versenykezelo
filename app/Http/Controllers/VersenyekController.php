<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verseny;

class VersenyekController extends Controller
{
    public function index(){
        $versenyek = Verseny::all();

        return view('welcome', ['versenyek' => $versenyek,]);
    }


}
