<?php

use App\Events\scoreBord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\error;

Route::get('/', function () {
    return view('home');
});

Route::get('/match-simulation', function () {
    return view('live-match-simulation');
});

Route::get('/live-match-view', function () {
    return view('live-match-view');
});

Route::get('/livescore', function (Request $request) {
    try {
        broadcast(new scoreBord($request));  
    } catch (\Throwable $th) {
       return error();
    }
});
