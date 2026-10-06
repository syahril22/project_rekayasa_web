<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

route::get('/profile', [MahasiswaController::class,'index']);


?>
