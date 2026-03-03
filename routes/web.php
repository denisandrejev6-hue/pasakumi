<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasakumuController;

Route::get('/', function () {
    return view('Home');
});

// resourceful routes for pasakumi (similar to old DataController functionality)
Route::resource('pasakumi', PasakumuController::class);
