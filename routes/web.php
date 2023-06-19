<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestPaymantController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome_page');
// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);


Route::get('_login', [LoginController::class, 'showLoginForm'])->name('_login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('_register', [RegisterController::class, 'showRegistrationForm'])->name('_register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('prefecture/select/{id}', [ProvinceController::class, 'index_selected'])->name('prefecture.select');

Route::get('test/apply/{id}', [TestController::class, 'apply_test'])->name('test.apply');

Route::get('payment/apply/{id}', [TestPaymantController::class, 'payment_apply'])->name('payment.apply');

Route::get('reserve/add/{id}', [ReserveController::class, 'add'])->name('reserve.add');

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('admin/reserve/accept', [AdminController::class, 'reserve_accept'])->name('admin.reserve.accept');
Route::get('admin/reserve/delete/{id}', [AdminController::class, 'reserve_delete'])->name('admin.reserve.delete');
Route::get('admin/reserve/agree/{id}', [AdminController::class, 'reserve_agree'])->name('admin.reserve.agree');
Route::get('admin/reserve/mail_send/{id}', [AdminController::class, 'reserve_mail_send'])->name('admin.reserve.mail_send');

Route::get('_verifyMailSend', [VerificationController::class, '_verifyMailSend'])->name('_verifyMailSend');
Route::post('verifyMailSend', [VerificationController::class, 'verifyMailSend'])->name('verifyMailSend');
Route::get('/email/verify/{hash}', [VerificationController::class, 'getVerifyMail'])->name('getVerifyMail');

Route::get('/mailSended', [VerificationController::class, 'mailSended'])->name('mailSended');
