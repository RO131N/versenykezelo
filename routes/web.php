<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $versenyek = DB::table('versenyek')->get();
    $fordulok= DB::table('fordulok')->get();
    $felhasznalok=DB::table('felhasznalok')->get();
    $versenyzok=DB::table('versenyzok')->get();
    return view('welcome',['fordulok'=>$fordulok,'versenyek'=>$versenyek,'felhasznalok'=>$felhasznalok,'versenyzok'=>$versenyzok]);
    });

