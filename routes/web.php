<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VersenyekController;
use App\Http\Controllers\VersenyzokController;
use App\Http\Controllers\FordulokController;


Route::get('/', function () {
    $versenyek = DB::table('versenyek')->get();
    $fordulok= DB::table('fordulok')->get();
    $felhasznalok=DB::table('felhasznalok')->get();
    $versenyzok=DB::table('versenyzok')->get();
    return view('welcome',['fordulok'=>$fordulok,'versenyek'=>$versenyek,'felhasznalok'=>$felhasznalok,'versenyzok'=>$versenyzok]);
    });
    Route::get('versenyzo', function () {
        $versenyek = DB::table('versenyek')->get();
        $fordulok= DB::table('fordulok')->get();
        $felhasznalok=DB::table('felhasznalok')->get();
        $versenyzok=DB::table('versenyzok')->get();
        return view('versenyzo',['fordulok'=>$fordulok,'versenyek'=>$versenyek,'felhasznalok'=>$felhasznalok,'versenyzok'=>$versenyzok]);
    });
    Route::get('fordulo', function () {
        $versenyek = DB::table('versenyek')->get();
        $fordulok= DB::table('fordulok')->get();
        $felhasznalok=DB::table('felhasznalok')->get();
        $versenyzok=DB::table('versenyzok')->get();
        return view('fordulo',['fordulok'=>$fordulok,'versenyek'=>$versenyek,'felhasznalok'=>$felhasznalok,'versenyzok'=>$versenyzok]);
        });
        Route::post('welcome',[VersenyekController::class,'create']);
        Route::post('fordulo',[FordulokController::class,'create']);
        Route::post('versenyzo',[VersenyzokController::class,'create']);

