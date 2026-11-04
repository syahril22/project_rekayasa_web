
<?php

use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/profile', [MahasiswaController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index'])
    ->name('project.index');

Route::get('/project/{id}', [ProjectController::class, 'show'])
    ->name('project.show');


// Admin Routes
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('home');

        Route::resource('projects', AdminProjectController::class)
            ->except(['show']);

    });


// Admin Authentication
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');
?>
