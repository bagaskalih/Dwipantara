<?php

use App\Models\Jogja;
use App\Models\Jakarta;
use App\Models\Semarang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogjaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\JakartaController;
use App\Http\Controllers\SemarangController;

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

Route::get('/home', function () {
    return redirect('/');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


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

Route::get('/jakarta', function () {
    return view('jakarta');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/search', [SearchController::class, 'search']);

Route::resource('/review/jogja', JogjaController::class)->middleware('auth');
Route::resource('/review/semarang', SemarangController::class)->middleware('auth');
Route::resource('/review/jakarta', JakartaController::class)->middleware('auth');

// Route::get('review/jogja', function () {
//     return view('review-jogja', [
//         "komentar" => Jogja::all()
//     ]);
// })->middleware('auth');

// Route::get('review/semarang', function () {
//     return view('review-semarang', [
//         "komentar" => Semarang::all()
//     ]);
// })->middleware('auth');

// Route::get('review/jakarta', function () {
//     return view('review-jakarta', [
//         "komentar" => Jakarta::all()
//     ]);
// })->middleware('auth');