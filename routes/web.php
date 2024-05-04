<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $versenyek = [
        ['type' => 'Városi', 'nyelv' => 'Magyar'],
        ['type' => 'Megyei', 'nyelv' => 'Angol'],
        ['type' => 'országos', 'nyelv' => 'Német']
    ];

    return view('welcome', ['versenyek' => $versenyek]);
});
