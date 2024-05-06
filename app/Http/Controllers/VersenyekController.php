<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Verseny;

class VersenyekController extends Controller
{
    
    public function create(Request $request)
{
    $versenyek = new Verseny();
    $versenyek->megnevezes = $request->megnevezes;
    $versenyek->datum = $request->datum;
    $versenyek->nyelvek = $request->nyelvek;
    $versenyek->helyszin = $request->helyszin;
    $versenyek->save();

    

    return redirect('/');
}
}
