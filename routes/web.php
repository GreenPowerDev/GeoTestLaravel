<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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
    return view('welcome');
})->name('welcome');

// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);


Route::get('_login', [LoginController::class, 'showLoginForm'])->name('_login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('_register', [RegisterController::class, 'showRegistrationForm'])->name('_register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('_verifyMailSend', [VerificationController::class, '_verifyMailSend'])->name('_verifyMailSend');
Route::post('verifyMailSend', [VerificationController::class, 'verifyMailSend'])->name('verifyMailSend');
Route::get('/email/verify/{hash}', [VerificationController::class, 'getVerifyMail'])->name('getVerifyMail');

Route::group(['middleware' => ['auth']], function() {

    /**
    * Verification Routes
    */
    Route::get('/email/verify', [VerificationController::class,'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class,'resend'])->name('verification.resend');

});