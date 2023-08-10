<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\LandingPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IdentityIndexController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CandidatesDocsReviewController as Candidates;
use App\Http\Controllers\ClientProfileController;
use App\Http\Controllers\Admin\{AdminBusinessController, AdminAddressController, AdminClientController, AdminCandidateController, AdminIdentityController, AdminPaymentController, UserController};
use App\Http\Controllers\CustomVerification;
use App\Http\Controllers\SanctionPepController;
use App\Http\Controllers\AdverseMediaController;
use App\Http\Middleware\ClientMiddleware;

// use App\Models\Transaction;

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

Route::webhooks('verifications/youverify');
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


// Route::get('email', [LandingPages::class, 'email'])->name('email');
#===================== USERS ROUTE ===============================
Route::group(['middleware' => ['clients', 'auth']], function() { 
Route::get('/getting-started', [HomeController::class, 'gettingStarted'])->name('instructions');
Route::get('/dashboard', [HomeController::class, 'Home'])->name('index');
Route::get('/home', [HomeController::class, 'Home'])->name('home');
Route::get('/identity/bank-account/banks', [IdentityController::class, 'getBanks']);
Route::get('/user/identities/{slug}', IdentityIndexController::class)->name('identityIndex');
Route::get('/user/identities/check/{slug}',[IdentityController::class, 'showIdentityVerificationForm'])->name('showIdentityVerificationForm');
Route::post('/user/identities/verify/{slug}', [IdentityController::class, 'StoreVerify'])->name('StoreVerify');
// Route::get('/test', [IdentityController::class, 'test']);
Route::get('/user/identities/{slug}/{verificationId}', [IdentityController::class, 'verificationReport'])->name('showIdentityReport');
// Route::get('/user/identities/details/{id}', [IdentityController::class, 'verifyDetails'])->name('verify.details');
Route::get('/user/business/{slug}', [BusinessController::class, 'index'])->name('businessIndex');
Route::get('/user/business/check/{slug}', [BusinessController::class, 'businessCheck'])->name('businessCheck');
Route::post('/user/business/verify/{slug}', [BusinessController::class, 'BusinessStore'])->name('businessStore');
Route::get('/user/business/{slug}/{verificationId}', [BusinessController::class, 'BusinessReport'])->name('showBusinessReport');
Route::get('/user/address/verification/{slug}', [AddressController::class,'AddressIndex'])->name('addressIndex');
Route::get('/user/address/verification/{slug}/{addressId}', [AddressController::class, 'verificationReport'])->name('showAddressReport');
Route::post('/user/address/verification/store/{slug}', [AddressController::class,'submitAddressVerify'])->name('AddressStore');
Route::get('/user/address/verification/{slug}/candidate/{service_ref}', [AddressController::class, 'showVerificationDetailsForm'])->name('showVerificationDetailsForm');
Route::get('/user/address/verification/{slug}/candidate/create', [AddressController::class,'showCreateCandidate'])->name('showCreateCandidate');
Route::post('/user/address/verification/candidate/create/{slug}', [AddressController::class,'createCandidate'])->name('createCandidate');
Route::get('/user/candidate/index', [CandidateController::class, 'CandidateIndex'])->name('candidate.index');
Route::get('/user/candidate/create', [CandidateController::class, 'CadidateCreate'])->name('candidate.create');
Route::post('/user/candidate/store', [CandidateController::class, 'CadidateStore'])->name('candidate.store');
Route::get('/user/candidate/details/{id}', [CandidateController::class, 'CandidateDetails'])->name('candidate.details');
Route::get('/user/transactions/{transaction}', [TransactionController::class, 'getTransaction'])->name('user.transaction');
Route::get('/user/transactions/{transaction}/download', [TransactionController::class, 'downloadTransaction'])->name('user.transaction.download');
Route::get('/user/transactions', [HomeController::class, 'UserTransactions'])->name('user.transactions');
Route::post('/user/fund/wallet', [PaymentController::class, 'pay'])->name('fundWallet');
Route::post('/user/fund/request', [HomeController::class, 'fundRequest'])->name('fundRequest');
Route::get('/payment-success', [PaymentController::class, 'handleCallback']);
Route::get('/user/payment/{trxref}', [HomeController::class, 'PaymentVerify'])->name('verify.pay');
Route::get('/user/reports', [HomeController::class, 'UserReports'])->name('users.report');
Route::get('/user/reports/get/', [HomeController::class, 'getReports'])->name('users.getReports');
Route::get('/user/profile', [HomeController::class, 'Profile'])->name('user.profile');
Route::post('user/updates/details', [HomeController::class, 'updateUserDetails'])->name('users.updateDetails');
Route::post('/user/password/update', [HomeController::class, 'passwordUpdate'])->name('users.passwordUpdate');
Route::post('/user/get/data', [HomeController::class, 'GetData'])->name('query.data');
Route::post('/user/sort/business/data/{name}', [BusinessController::class, 'bizSort'])->name('bizSort');
Route::post('/user/sort/identity/data/{slug}', [IdentityController::class, 'IdentitySort'])->name('IdentitySort');
Route::get('/frequently-asked-questions', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/knowledge-base', [HomeController::class, 'knowledgeBase'])->name('knowledgeBase');
Route::post('/user/profile/update', [ClientProfileController::class, 'StorePersonalInfo'])->name('form_profileUpdate');
Route::post('/user/password/update', [ClientProfileController::class, 'UpdatePassword'])->name('form_PasswordeUpdate');
Route::post('/user/basic/information/update', [ClientProfileController::class, 'UpdateBusinessInfo'])->name('basic_information');
Route::post('/user/contact/information/update', [ClientProfileController::class, 'UpdateContactInfo'])->name('contact_information');
Route::post('/user/document/update', [ClientProfileController::class, 'UpdateDocumentInfo'])->name('document_information');
Route::get('/user/activated/account', [HomeController::class, 'AccountActivate'])->name('client.AccountActivate');
Route::get('/user/account/activities', [HomeController::class, 'ActivityLog'])->name('client.ActivityLog');

#=========== approve candidates documents by clients ========
Route::post('/candidates/doc/approve/{service}', [Candidates::class, 'ApproveDoc'])->name('candidate.doc.approve');
Route::post('/candidates/doc/disapprove/{service}', [Candidates::class, 'DisapproveDoc'])->name('candidate.doc.disapprove');
Route::post('/candidates/markapprove/{user_id}', [Candidates::class, 'ApproveCandidate'])->name('candidateApprove');
Route::post('/candidates/markdisapprove/{user_id}', [Candidates::class, 'DisApproveCandidate'])->name('candidateDisApprove');

#send custom verification
Route::get('/request/candiate/custom/verification/{id}', [CustomVerification::class, 'RequestVerification'])->name('candidate.request-verification');
Route::post('/request/candiate/custom/verification/store/{id}', [CustomVerification::class, 'RequestVerificationStore'])->name('candidate.request-verification.store');

###### candidates routes  

Route::get('/user/candidate/upload/', [CandidateController::class, 'CandidateFileUpload'])->name('candidate.FileUpload');
Route::post('/user/candidate/upload/store', [CandidateController::class, 'CandidateFileStore'])->name('candidate.FileStore');
Route::get('/user/candidate/upload/index', [CandidateController::class, 'candidateHomePage'])->name('candidate.homepage');
Route::get('/user/candidate/documents/', [CandidateController::class, 'viewCandidateDocuments'])->name('candidate.documents');


//Pep-sanction screen and Adverse media
Route::get('user/aml/sanction-pep-screening/{slug}',[SanctionPepController::class, 'SanctionPepIndex'])->name('user.aml_pep-sanction-list');
Route::get('user/aml/sanction-pep-screening/{slug}/check',[SanctionPepController::class, 'SanctionPepCheck'])->name('user.aml_pep_sanction_check');
Route::post('user/aml/sanction-pep-screening/{slug}/verify',[SanctionPepController::class, 'SanctionPepVerify'])->name('user.aml_pep_sanction_verify');
Route::get('user/aml/sanction-pep-screening/report/{ref}',[SanctionPepController::class, 'SanctionPepGetReport'])->name('user.aml_pep_sanction_get_report');


Route::get('user/aml/adversemedia/{slug}',[AdverseMediaController::class, 'AdverseMediaIndex'])->name('user.aml_adverse-media-intelligence');
Route::get('user/aml/adversemedia/{slug}/check',[AdverseMediaController::class, 'AdverseMediaCheck'])->name('user.aml_adverse_media_check');
Route::post('user/aml/adversemedia/{slug}/verify',[AdverseMediaController::class, 'AdverseMediaVerify'])->name('user.aml_adverse_media_verify');
Route::get('user/aml/adversemedia/report/{ref}',[AdverseMediaController::class, 'AdverseMediaGetReport'])->name('user.aml_adverse_media_get_report');
// Route::get('/addressReport', function(){
//     return view('users.address.addressReport');
// });
});

#====================ADMIN ROUTES ============================
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function() { 
Route::get('/', [AdminController::class, 'Index'])->name('index');
Route::get('/index', [AdminController::class, 'Index'])->name('index');
Route::get('/identity/{slug}', [AdminIdentityController::class, 'getVerify'])->name('verify');
Route::get('/identities/{slug}/{verificationId}', [AdminIdentityController::class, 'verificationReport'])->name('showIdentityReport');
Route::get('/business/{slug}', [AdminBusinessController::class, 'businessIndex'])->name('businessIndex');
Route::get('/business/{slug}/{verificationId}', [AdminBusinessController::class, 'businessDetails'])->name('showBusinessReport');
Route::get('/address/{slug}', [AdminAddressController::class, 'AddressIndex'])->name('addressIndex');
Route::get('/candidate', [AdminCandidateController::class, 'getVerify'])->name('candidate.index');
Route::get('/candidate/index', [AdminCandidateController::class, 'CandidateIndex'])->name('candidate.index');
Route::get('/candidate/details/{id}', [AdminCandidateController::class, 'CandidateDetails'])->name('candidate.details');
Route::get('candidate/', [AdminCandidateController::class, 'UserCandidates'])->name('user.candidates');
Route::get('/clients/candidate/{id}', [AdminCandidateController::class, 'ClientCandidates'])->name('client.candidates');
Route::get('/user/clients/', [AdminClientController::class, 'UserClients'])->name('user.clients');
Route::get('/clients/details/{client_id}', [AdminClientController::class, 'ClientProfile'])->name('client.details');
Route::get('/client/activate/{client_id}', [AdminClientController::class, 'ActivateClientAccount'])->name('client.activateAccount');
Route::get('/client/suspend/{client_id}', [AdminClientController::class, 'SuspendClientAccount'])->name('client.suspendAccount');
Route::get('/clients/create', [AdminClientController::class, 'createClient'])->name('client.create');
Route::post('/clients/store', [AdminClientController::class, 'ClientStore'])->name('client.store');
Route::get('/administrators/index', [AdminController::class, 'AdministratorIndex'])->name('administratorIndex');
Route::get('/administrators/create', [AdminController::class, 'AdministratorCreate'])->name('administratorCreate');
Route::post('/administrators/store', [AdminController::class, 'AdministratorStore'])->name('administratorStore');
Route::get('/file/download/{id}', [AdminCandidateController::class, 'FileDownload'])->name('fileDownload');
Route::post('/candidate/status/update/{id}', [AdminCandidateController::class, 'statusUpdate'])->name('statusUpdate');
Route::post('/candidate/payment/update/{id}', [AdminPaymentController::class, 'paymentUpdate'])->name('paymentUpdate');
Route::post('/candidate/qa/update/{id}', [AdminCandidateController::class, 'QAUpdate'])->name('qaUpdate');
Route::post('/candidate/qa/review/{id}', [AdminCandidateController::class, 'QAReview'])->name('qaReviews');
Route::post('/candidate/document/verified/{id}', [AdminCandidateController::class, 'VerifyCandidate'])->name('VerifyCandidate');
Route::get('/client/company/details/{id}', [AdminCandidateController::class, 'VerifyCandidate'])->name('VerifyCandidate');

Route::get('/reports', [AdminController::class, 'UserReports'])->name('users.report');
Route::get('/reports/get/', [AdminController::class, 'getReports'])->name('users.getReports');
Route::get('/profile', [AdminController::class, 'Profile'])->name('user.profile');
Route::get('/transactions', [AdminController::class, 'getTransaction'])->name('user.transactions');
Route::post('/profile/update', [AdminController::class, 'StorePersonalInfo'])->name('form_profileUpdate');
Route::post('/password/update', [AdminController::class, 'UpdatePassword'])->name('form_PasswordeUpdate');
Route::post('/basic/information/update', [AdminController::class, 'UpdateBusinessInfo'])->name('basic_information');
Route::post('/contact/information/update', [AdminController::class, 'UpdateContactInfo'])->name('contact_information');
});