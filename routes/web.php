<?php

use App\Models\comments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'index']);


Route::get('pulau/jawa', function () {
    return view('jawa');
});

Route::get('pulau/', function () {
    return redirect('pulau/jawa');
});

Route::get('/jogja', function () {
    return view('jogja');
});

Route::get('/semarang', function () {
    return view('semarang');
});

Route::get('review/jogja', function () {
    return view('review-jogja', [
        "komentar" => comments::all()
    ]);
});