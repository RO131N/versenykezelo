<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Fordulo;

class FordulokController extends Controller
{
    public function upload(Request $request)
{
    $fordulok = new Fordulo();
    $fordulok->versenynev = $request->versenynev;
    $fordulok->datum = $request->datum;
    $fordulok->save();

    

    return response()->json(['message' => 'data upload']);
}
    
}
