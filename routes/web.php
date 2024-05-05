<?php

use Illuminate\Support\Facades\Route;

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

