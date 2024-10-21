<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Web\UserController;
use Slides\Saml2\Http\Controllers\Saml2Controller;

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
    return view('auth.login');
});

Route::get('/saml2/login', [Saml2Controller::class, 'login'])->name('saml.login');
Route::get('/saml2/logout', [Saml2Controller::class, 'logout'])->name('saml.logout');
Route::post('/saml2/acs', [Saml2Controller::class, 'acs'])->name('saml.acs');
Route::get('/saml2/sls', [Saml2Controller::class, 'sls'])->name('saml.sls');

Route::middleware(['auth', 'verified', 'saml'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('profile', [PhotoController::class, 'index'])->name('profile');
    Route::post('profile', [PhotoController::class, 'store'])->name('photo.store');

    Route::resource('users', UserController::class);
});

