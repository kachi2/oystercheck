<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\LandingPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminController;
use App\Models\Admin;

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



require __DIR__.'/auth.php';

Route::get('/logouts', [HomeController::class, 'Logouts'])->name('logouts');

#=====================LANDING PAGES ===========================
Route::get('/', [LandingPages::class, 'index'])->name('landing');
Route::get('/who-we-are', [LandingPages::class, 'WhoWeAre'])->name('who-we-are');
Route::get('/core-values', [LandingPages::class, 'CoreValues'])->name('core-values');
Route::get('/mission', [LandingPages::class, 'Mission'])->name('mission');
Route::get('/contact', [LandingPages::class, 'ContactUs'])->name('contact-us');
Route::get('/about', [LandingPages::class, 'AboutUs'])->name('about-us');
Route::get('/kyc', [LandingPages::class, 'KYC'])->name('kyc');
Route::get('/aml', [LandingPages::class, 'AML'])->name('aml');
Route::get('/services', [LandingPages::class, 'Services'])->name('services');
Route::get('/technology', [LandingPages::class, 'Technology'])->name('technology');
Route::get('/industry', [LandingPages::class, 'Industry'])->name('industry');
Route::get('/resources', [LandingPages::class, 'Resources'])->name('resource');
Route::post('/contact/form', [LandingPages::class, 'ContactForm'])->name('ContactForm');
#===================== USERS ROUTE ===============================
Route::middleware('auth')->group(function() {
Route::get('/dashboard', [HomeController::class, 'Home'])->name('index');
Route::get('/home', [HomeController::class, 'Home'])->name('home');
Route::get('/user/identities/check/{slug}', [HomeController::class, 'VerifyIndex'])->name('verifyIndex');
Route::post('/user/identities/verify/{slug}', [IdentityController::class, 'StoreVerify'])->name('StoreVerify');
Route::get('/test', [IdentityController::class, 'test']);
Route::get('/user/identities/details/{id}', [IdentityController::class, 'verifyDetails'])->name('verify.details');
Route::get('/user/business/check/{slug}', [BusinessController::class, 'Index'])->name('businessIndex');
Route::post('/user/business/verify/{slug}', [BusinessController::class, 'BusinessStore'])->name('businessStore');
Route::get('/user/business/details/{slug}', [BusinessController::class, 'BusinessDetails'])->name('business.details');
Route::get('/user/address/verification/{slug}', [AddressController::class,'AddressIndex'])->name('addressIndex');
Route::post('/user/address/verification/store/{slug}', [AddressController::class,'submitAddressVerify'])->name('AddressStore');
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
Route::post('/user/get/data', [HomeController::class, 'GetData'])->name('query.data');
Route::post('/user/sort/business/data/{name}', [BusinessController::class, 'bizSort'])->name('bizSort');
Route::post('/user/sort/identity/data/{slug}', [IdentityController::class, 'IdentitySort'])->name('IdentitySort');
});

#====================ADMIN ROUTES ============================
Route::middleware('admin')->prefix('admin')->group( function() { 
Route::get('/', [AdminController::class, 'Index'])->name('admin.index');
Route::get('/index', [AdminController::class, 'Index'])->name('admin.index');
Route::get('/identity/{slug}', [AdminController::class, 'getVerify'])->name('admin.verify');
Route::get('/business/{slug}', [AdminController::class, 'businessIndex'])->name('admin.businessIndex');
Route::get('/business/details/{id}', [AdminController::class, 'businessDetails'])->name('admin.business.details');
Route::get('/address/{slug}', [AdminController::class, 'AddressIndex'])->name('admin.addressIndex');
Route::get('/candidate', [AdminController::class, 'getVerify'])->name('admin.candidate.index');
Route::get('/candidate/index', [AdminController::class, 'CandidateIndex'])->name('admin.candidate.index');
Route::get('/candidate/details/{id}', [AdminController::class, 'CandidateDetails'])->name('admin.candidate.details');
Route::get('/users/candidate/', [AdminController::class, 'UserCandidates'])->name('admin.user.candidates');
Route::get('/users/clients/candidate/{id}', [AdminController::class, 'ClientCandidates'])->name('admin.client.candidates');
Route::get('/user/clients/', [AdminController::class, 'UserClients'])->name('admin.user.clients');
Route::get('/clients/create', [AdminController::class, 'createClient'])->name('admin.client.create');
Route::post('/clients/store', [AdminController::class, 'ClientStore'])->name('admin.client.store');
Route::get('/administrators/index', [AdminController::class, 'AdministratorIndex'])->name('administratorIndex');
Route::get('/administrators/create', [AdminController::class, 'AdministratorCreate'])->name('administratorCreate');
Route::post('/administrators/store', [AdminController::class, 'AdministratorStore'])->name('administratorStore');
Route::get('/file/download/{id}', [AdminController::class, 'FileDownload'])->name('fileDownload');
Route::post('/candidate/status/update/{id}', [AdminController::class, 'statusUpdate'])->name('statusUpdate');
Route::post('/candidate/payment/update/{id}', [AdminController::class, 'paymentUpdate'])->name('paymentUpdate');
Route::post('/candidate/qa/update/{id}', [AdminController::class, 'QAUpdate'])->name('qaUpdate');
Route::post('/candidate/qa/review/{id}', [AdminController::class, 'QAReview'])->name('qaReviews');
Route::post('/candndate/document/verified/{id}', [AdminController::class, 'VerifyCandidate'])->name('VerifyCandidate');

});