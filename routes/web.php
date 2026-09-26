<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/Mahasiswa', [MahasiswaController::class,'index']);
// Route::get('/', function () {
//     return view('Mahasiswa');
// });
?>
