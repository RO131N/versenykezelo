<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Verseny;

class VersenyekController extends Controller
{
    
    public function store(Request $request)
{
    $versenyek = new Verseny();
    $versenyek->megnevezes = $request->megnevezes;
    $versenyek->datum = $request->datum;
    $versenyek->nyelvek = $request->nyelvek;
    $versenyek->jopontok = $request->jopontok;
    $versenyek->rosszpontok = $request->rosszpontok;
    $versenyek->urespontok = $request->urespontok;
    $versenyek->save();

}
    public function fetchversenyek()
    {
        $versenyek = Verseny::all();
        return response()->json([
            'versenyek'=>$versenyek,
        ]);
    }
}
