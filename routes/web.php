<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasakumuController;
use App\Http\Controllers\TelpasController;
use App\Http\Controllers\LietotajuController;
use App\Http\Controllers\RezervesKopijuController;

Route::get('/', function () {
    // show a few pasākumi directly on the home page as a small CRUD preview
    $preview = \App\Models\Pasakumi::orderBy('ID','asc')->take(5)->get();
    return view('Home', ['preview' => $preview]);
});

// resourceful routes for pasakumi (similar to old DataController functionality)
Route::resource('pasakumi', PasakumuController::class);
// additional resources for other tables
Route::resource('telpas', TelpasController::class);
Route::resource('lietotaji', LietotajuController::class);
Route::resource('rezerveskopijas', RezervesKopijuController::class);
