<?php

use App\Http\Controllers\KamarController;
use App\Models\Kamar;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'active' => 'home'
    ]);

});

Route::get('/kamars', function () {
    return view('kamars', [
        "kamars" => Kamar::all(),
        'active' => 'kamar'

    ]);
});

Route::get('/kamar/{no}', function ($no){

return view('kamar',[
    "title" => "Detail",
    "kamar" => Kamar::find($no),
    "active" => "kamar"
]);
});

Route::get('/kamar', [KamarController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');