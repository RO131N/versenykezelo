<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $versenyek = DB::table('versenyek')->get();
    $fordulok= DB::table('fordulok')->get();
    return view('welcome',['fordulok'=>$fordulok,'versenyek'=>$versenyek]);
    });

