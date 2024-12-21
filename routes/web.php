<?php

use App\Http\Controllers\RuangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\PemasokController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name as NodeName;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'guest'], function() {
    Route::resource('/ruang', RuangController::class);
    Route::resource('/karyawan', KaryawanController::class);
    Route::resource('/pemasok', PemasokController::class);
    Route::resource('/barang', BarangController::class);
    Route::resource('/barang_masuk', BarangMasukController::class);
});

Route::get('/', function () {
    return view('welcome',["title" => "Dashboard"]);
})->name('dashboard');

Route::get('/sample', function () {
    return view('sample', ["title" => "Sample"]);
})->name('sample'); 

    
