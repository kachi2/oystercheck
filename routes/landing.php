<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPages;



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
Route::get('/frequently-asked-questions', [LandingPages::class, 'Faqs'])->name('faqs');
Route::get('/terms-of-use', [LandingPages::class, 'Terms'])->name('terms');
Route::get('/knowledge-base', [LandingPages::class, 'knowledgeBase'])->name('knowledgeBase');
