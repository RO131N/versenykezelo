<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VersenyekController;
use App\Http\Controllers\VersenyzokController;
use App\Http\Controllers\FordulokController;

//oldalak megjelenítése
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
        //Adatok tárolása
        Route::post('/welcome',[VersenyekController::class,'store']);
        Route::post('/fordulo',[FordulokController::class,'store']);
        Route::post('/versenyzo',[VersenyzokController::class,'store']);
        //Adatok kiírása
        Route::get('fetch-versenyek',[VersenyekController::class,'fetchversenyek']);
        Route::get('fetch-fordulok',[FordulokController::class,'fetchfordulok']);
        Route::get('fetch-versenyzok',[VersenyzokController::class,'fetchversenyzok']);
        //Versenyző törlése
        Route::delete('delete-versenyzo/{id}',[VersenyzokController::class,'destroy']);