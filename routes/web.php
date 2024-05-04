<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $versenyek = DB::table('versenyek')->get();
    return view('welcome',[
        'versenyek' => $versenyek,
    ]);
});
