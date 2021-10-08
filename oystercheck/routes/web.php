<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;
use Illuminate\Support\Facades\Route;

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
