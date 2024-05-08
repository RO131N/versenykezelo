<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Fordulo;

class FordulokController extends Controller
{
    //Adatbázisba töltés
    public function store(Request $request)
{
    $fordulok = new Fordulo();
    $fordulok->versenynev = $request->versenynev;
    $fordulok->datum = $request->datum;
    $fordulok->save();

}
//Kiíratás
public function fetchfordulok()
    {
        $fordulok = Fordulo::all();
        return response()->json([
            'fordulok'=>$fordulok,
        ]);
    }
    
}
