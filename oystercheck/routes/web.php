<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::middleware('auth')->group(function() {
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/user/identities/check/{slug}', [HomeController::class, 'VerifyIndex'])->name('verifyIndex');
Route::post('/user/identities/verify/{slug}', [IdentityController::class, 'StoreVerify'])->name('StoreVerify');
Route::get('/test', [IdentityController::class, 'test']);
Route::get('/user/identities/details/{id}', [IdentityController::class, 'verifyDetails'])->name('verify.details');
Route::get('/user/business/check/{slug}', [BusinessController::class, 'Index'])->name('businessIndex');
Route::post('/user/business/verify/{slug}', [BusinessController::class, 'BusinessStore'])->name('businessStore');
Route::get('/user/address/verification/{slug}', [AddressController::class,'AddressIndex'])->name('addressIndex');
Route::post('/user/candidate/create/{slug}', [AddressController::class,'createCandidate'])->name('createCandidate');
Route::get('/user/candidate/index', [CandidateController::class, 'CandidateIndex'])->name('candidate.index');
Route::get('/user/candidate/create', [CandidateController::class, 'CadidateCreate'])->name('candidate.create');
Route::post('/user/candidate/store', [CandidateController::class, 'CadidateStore'])->name('candidate.store');
Route::get('/user/candidate/details/{id}', [CandidateController::class, 'CandidateDetails'])->name('candidate.details');
Route::get('/user/candidate/upload/', [CandidateController::class, 'CandidateFileUpload'])->name('candidate.FileUpload');
Route::post('/user/candidate/upload/store', [CandidateController::class, 'CandidateFileStore'])->name('candidate.FileStore');
Route::get('/user/candidate/upload/index', [CandidateController::class, 'candidateHomePage'])->name('candidate.homepage');
Route::get('/user/transactions', [HomeController::class, 'UserTransactions'])->name('user.transactions');
Route::post('/user/fund/request', [HomeController::class, 'fundRequest'])->name('fundRequest');
Route::get('/user/payment/{trxref}', [HomeController::class, 'PaymentVerify'])->name('verify.pay');
Route::get('/user/reports', [HomeController::class, 'UserReports'])->name('users.report');
Route::get('/user/reports/get/', [HomeController::class, 'getReports'])->name('users.getReports');
Route::get('/user/profile', [HomeController::class, 'Profile'])->name('user.profile');
Route::post('user/updates/details', [HomeController::class, 'updateUserDetails'])->name('users.updateDetails');
Route::post('/user/password/update', [HomeController::class, 'passwordUpdate'])->name('users.passwordUpdate');

});