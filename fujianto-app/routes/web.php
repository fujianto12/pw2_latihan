<?php

use App\Http\Controllers\FalkutasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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



// Route::get('/prodi', function () {
//     return view('prodi');
// });



Route::resource('falkutas',FalkutasController::class);
Route::resource('prodi',ProdiController::class);
Route::resource('mahasiswa',MahasiswaController::class);


// Route::get('/mahasiswa', function () {
//     $data  = [
//         ["npm" => 2225250001, "nama" => "Ahmad"],
//         ["npm" => 2225250002, "nama" => "Kareem"],
//     ];
//     return view('mahasiswa.index')-> with('mahasiswa', $data);
// });





