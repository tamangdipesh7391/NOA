<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ApplicationController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\MemberDashboardController;


Route::get('/', function () {
    return view('frontend.pages.home.home');
})->name('index');

Route::get('/optometrists', [ApplicationController::class, 'findOptometrists'])
    ->name('optometrists.list');
Route::get('/optometrists/{criteria?}', [ApplicationController::class, 'findOptometrists'])
    ->name('optometrists');
Route::post('/optometrists', [ApplicationController::class, 'filteredOptometrists'])
    ->name('searchOptometrists');


Route::group(['prefix' => 'about-us'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'aboutUs'])->name('about-us');
});

Route::group(['prefix' => 'our-projects'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'ourProjects'])->name('our-projects');
});
Route::group(['prefix' => 'awards'], function () {
    Route::post('/apply-for-travel-grant', [ApplicationController::class, 'storeAwardGrant'])->name('apply-for-travel-grant');
    Route::get('/{criteria?}', [ApplicationController::class, 'awardsList'])->name('awards');
});

Route::group(['prefix' => 'rewards'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'rewardsList'])->name('rewards');
});

Route::group(['prefix' => 'activities'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'activitiesList'])->name('activities');

});
Route::group(['prefix' => 'events'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'eventsList'])->name('events');

});
Route::group(['prefix' => 'news'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'newsList'])->name('news');

});
Route::group(['prefix' => 'financial-reports-funding'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'frfList'])->name('financial-reports-funding');

});
Route::group(['prefix' => 'conference'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'conferenceList'])->name('conference');

});

Route::get('gallery', [ApplicationController::class, 'galleryList'])->name('gallery');


Route::group(['prefix' => 'publication'], function () {
    Route::get('/{criteria?}', [ApplicationController::class, 'publicationList'])->name('publication');

});


Route::any('register/step-one', [RegisterController::class, 'registerStepOne'])->name('register.step.one');
Route::any('register/step-two', [RegisterController::class, 'registerStepTwo'])->name('register.step.two');
Route::any('register/step-three', [RegisterController::class, 'registerStepThree'])->name('register.step.three');

Route::post('ajax-address-filter', [RegisterController::class, 'ajaxAddressFilter'])->name('ajax-address-filter');


Route::any('login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => 'member-dashboard', 'middleware' => 'auth'], function () {
    Route::any('/', [MemberDashboardController::class, 'index'])->name('member-dashboard');
    Route::any('update-general-info', [MemberDashboardController::class, 'updateGeneralInfo'])->name('update-general-info');
    Route::any('update-address-info', [MemberDashboardController::class, 'updateAddressInfo'])->name('update-address-info');
    Route::any('update-documents-info', [MemberDashboardController::class, 'updateDocumentsInfo'])->name('update-documents-info');

    Route::any('member-certificate', [MemberDashboardController::class, 'memberCertificate'])->name('member-certificate');
    Route::any('member-id-card', [MemberDashboardController::class, 'memberIdCard'])->name('member-id-card');
    Route::any('update-member-voucher', [MemberDashboardController::class, 'updateVoucher'])->name('update-member-voucher');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

});
