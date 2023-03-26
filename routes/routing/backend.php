<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;

use App\Http\Controllers\Backend\Admin\AdminLoginController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Ckeditor\CkeditorController;
use App\Http\Controllers\Backend\Address\ManageAddressController;
use App\Http\Controllers\Backend\Gallery\GalleryController;
use App\Http\Controllers\Backend\Conference\ConferenceController;


Route::group(['namespace' => 'Backend', 'prefix' => 'admin-login'], function () {
    Route::get('/', [AdminLoginController::class, 'index'])->name('admin-login');
    Route::post('/', [AdminLoginController::class, 'login'])->name('admin-login');
});


Route::group(['namespace' => 'Backend', 'prefix' => 'company-backend', 'middleware' => 'auth:admin'], function () {
    Route::post('voucher-status', [DashboardController::class, 'voucherStatus'])->name('voucher-status');
    Route::get('certificate-error', function () {
        return view('frontend.members.home');
    })->name('certificate-error');
    Route::get('id-card-error', function () {
        return view('frontend.members.home');
    })->name('id-card-error');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('college-admin', "\App\Http\Controllers\Backend\Admin\AdminController");
     Route::any('admin-logout', [AdminLoginController::class, 'logout'])->name('admin-logout');
    Route::any('admin-status-update', [AdminController::class, 'updateAdminStatus'])->name('admin-status-update');
    Route::any('admin-password-change', [AdminController::class, 'passwordChange'])->name('admin-password-change');
    Route::any('admin-gallery-add/{criteria}', [AdminController::class, 'imageAdd'])->name('admin-gallery-add');
    Route::any('admin-gallery-delete/{criteria}', [AdminController::class, 'imageDelete'])->name('admin-gallery-delete');
    Route::any('admin-gallery-update/{criteria}', [AdminController::class, 'updateImage'])->name('admin-gallery-update');


    Route::group(['prefix' => 'manage-address'], function () {
        Route::any('/{criteria?}', [ManageAddressController::class, 'index'])->name('manage-address');
        Route::any('/delete-country/{criteria}', [ManageAddressController::class, 'deleteCountry'])->name('delete-country');
        Route::any('/manage-province/{criteria}', [ManageAddressController::class, 'manageProvince'])->name('manage-province');
        Route::any('/delete-province/{criteria}', [ManageAddressController::class, 'deleteProvince'])->name('delete-province');
        Route::any('/edit-province/{criteria}', [ManageAddressController::class, 'editProvince'])->name('edit-province');

        Route::any('/manage-district/{criteria}', [ManageAddressController::class, 'manageDistrict'])->name('manage-district');
        Route::any('/delete-district/{criteria}', [ManageAddressController::class, 'deleteDistrict'])->name('delete-district');
        Route::any('/edit-district/{criteria}', [ManageAddressController::class, 'editDistrict'])->name('edit-district');

        Route::any('/manage-municipalities/{criteria}', [ManageAddressController::class, 'manageMunicipalities'])->name('manage-municipalities');
        Route::any('/delete-municipalities/{criteria}', [ManageAddressController::class, 'deleteMunicipalities'])->name('delete-municipalities');
        Route::any('/edit-municipalities/{criteria}', [ManageAddressController::class, 'editMunicipalities'])->name('edit-municipalities');

    });

    Route::resource('admin-gallery', "\App\Http\Controllers\Backend\Gallery\GalleryController");
    Route::any('delete-galley-image/{criteria}', [GalleryController::class, 'deleteGalleryImage'])->name('delete-galley-image');
    Route::any('edit-galley-image/{criteria}', [GalleryController::class, 'editGalleryImage'])->name('edit-galley-image');


    Route::resource('admin-partners', "\App\Http\Controllers\Backend\Partners\PartnersController");
    Route::resource('setting', "\App\Http\Controllers\Backend\Setting\SettingController");


    Route::resource('admin-menu', "\App\Http\Controllers\Backend\Menu\MenuController");

    Route::resource('admin-about', "\App\Http\Controllers\Backend\About\AboutController");
    Route::resource('admin-events', "\App\Http\Controllers\Backend\Events\EventsController");
    Route::resource('admin-publication', "\App\Http\Controllers\Backend\Publication\PublicationController");

    Route::resource('admin-banner', "\App\Http\Controllers\Backend\Banner\BannerController");
    Route::resource('admin-activities', "\App\Http\Controllers\Backend\Activities\ActivitiesController");
    Route::resource('admin-awards', "\App\Http\Controllers\Backend\Awards\AwardsController");
    Route::resource('admin-rewards', "\App\Http\Controllers\Backend\Rewards\RewardsController");
    Route::resource('admin-project', "\App\Http\Controllers\Backend\Project\ProjectController");
    Route::post('ckeditor-image-upload', [CkeditorController::class, 'index'])->name('ckeditor-image-upload');

    Route::any('register-user-list', [DashboardController::class, 'registerUserList'])->name('register-user-list');
    Route::any('register-user-list-details/{criteria}', [DashboardController::class, 'registerUserListDetails'])->name('register-user-list-details');

    /*
    * content types
    */
    Route::resource('admin-content-type', "\App\Http\Controllers\Backend\Content\ContentTypeController");
    /*
     * content route
     */
    Route::resource('admin-content', "\App\Http\Controllers\Backend\Content\ContentController");

    Route::resource('admin-news', "\App\Http\Controllers\Backend\News\NewsController");
    Route::resource('admin-fraf', "\App\Http\Controllers\Backend\Fraf\FrafController");

    Route::resource('admin-conference', "\App\Http\Controllers\Backend\Conference\ConferenceController");
    Route::any('admin-conference-participation/{criteria}', [ConferenceController::class,'allParticipation'])->name('admin-conference-participation');


});
