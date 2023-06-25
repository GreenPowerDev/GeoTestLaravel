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
use App\Http\Controllers\GuideController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\GanreController;
use App\Http\Controllers\TestProblemController;
use App\Http\Controllers\NoticeController;



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



Route::get('mypage/test_login_/{id}', [MypageController::class, 'test_login_form'])->name('test.login_form');
Route::post('mypage/test_login', [MypageController::class, 'test_login'])->name('test.login');
Route::post('mypage/test/enter', [MypageController::class, 'test_enter'])->name('test.enter');


Route::get('guide/notice', [NoticeController::class, 'notice'])->name('guide.notice');
Route::get('guide/notice/{id}', [NoticeController::class, 'notice_select'])->name('notice.select');

Route::get('guide/about_site', [GuideController::class, 'about_site'])->name('guide.about_site');
Route::get('guide/method', [GuideController::class, 'method'])->name('guide.method');
Route::get('guide/question', [GuideController::class, 'question'])->name('guide.question');
Route::get('my_page', [GuideController::class, 'my_page'])->name('my_page');

Route::get('ganre/select/{id}', [GanreController::class, 'ganre_selected'])->name('ganre.select');
Route::get('prefecture/select/{id}', [ProvinceController::class, 'index_selected'])->name('prefecture.select');
Route::get('prefecture/search', [ProvinceController::class, 'all_area_selected'])->name('search.area');



Route::get('test/apply/{id}', [TestController::class, 'apply_test'])->name('test.apply');

Route::get('payment/apply/{id}', [TestPaymantController::class, 'payment_apply'])->name('payment.apply');

Route::get('reserve/add/{id}', [ReserveController::class, 'add'])->name('reserve.add');

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('admin/reserve/accept', [AdminController::class, 'reserve_accept'])->name('admin.reserve.accept');
Route::get('admin/reserve/delete/{id}', [AdminController::class, 'reserve_delete'])->name('admin.reserve.delete');
Route::get('admin/reserve/agree/{id}', [AdminController::class, 'reserve_agree'])->name('admin.reserve.agree');
Route::get('admin/reserve/mail_send/{id}', [AdminController::class, 'reserve_mail_send'])->name('admin.reserve.mail_send');
Route::get('admin/test/make',[AdminController::class, 'test_make'])->name('admin.test.make');
Route::post('admin/test/add_test', [AdminController::class, 'add_test'])->name('admin.test.add_test');
Route::get('admin/test/problem_make', [AdminController::class, 'problem_make'])->name('admin.test.problem_make');
Route::post('admin/test/add_problem', [AdminController::class, 'add_problem'])->name('admin.test.add_problem');
// Route::get('admin/test/problem', [AdminController::class, 'test_problem'])->name('admin.test.problem');

Route::post('admin/test/problem/save', [TestProblemController::class, 'test_problem_save'])->name('admin.test.problem.save');
Route::post('admin/test/add_problem_test', [TestProblemController::class, 'add_problem_test'])->name('admin.test.add_problem_test');
Route::post('admin/test/estimate/calc', [TestProblemController::class, 'calc_test'])->name('admin.test.estimate.calc');

Route::get('_verifyMailSend', [VerificationController::class, '_verifyMailSend'])->name('_verifyMailSend');
Route::post('verifyMailSend', [VerificationController::class, 'verifyMailSend'])->name('verifyMailSend');
Route::get('/email/verify/{hash}', [VerificationController::class, 'getVerifyMail'])->name('getVerifyMail');

Route::get('/mailSended', [VerificationController::class, 'mailSended'])->name('mailSended');
