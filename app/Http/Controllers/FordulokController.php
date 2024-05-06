<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Fordulo;

class FordulokController extends Controller
{

    public function index(){
        $fordulok = DB::table('fordulok')->get();
        return view('welcome',['fordulok'=> $fordulok]);
    }
    public function create(Request $request)
{
    $fordulok = new Fordulo();
    $fordulok->versenyid = $request->versenyid;
    $fordulok->datum = $request->datum;
    $fordulok->save();

    

    return redirect('/fordulo');
}
    
}
