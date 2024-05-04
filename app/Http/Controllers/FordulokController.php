<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Fordulo;

class VersenyekController extends Controller
{

    public function index(){
        $fordulok = DB::table('fordulok')->get();
        return view('welcome',['fordulok'=> $fordulok]);
    }
    
    
}
