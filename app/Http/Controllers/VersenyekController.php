<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Verseny;

class VersenyekController extends Controller
{

    public function index(){
        $versenyek = DB::table('versenyek')->get();
        return view('welcome',['versenyek'=> $versenyek]);
    }
    
    
}
