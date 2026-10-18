<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes (Front / Public)
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/program/{slug}', [FrontController::class, 'programDetail'])->name('program.detail');
Route::get('/artikel', [FrontController::class, 'articles'])->name('articles');
Route::get('/artikel/{slug}', [FrontController::class, 'articleDetail'])->name('article.detail');
Route::get('/wilayah/{slug}', [FrontController::class, 'wilayahProvinsi'])->name('wilayah.provinsi');
Route::get('/wilayah/{provinceSlug}/program/{programSlug}', [FrontController::class, 'wilayahProvinsiProgramDetail'])->name('wilayah.provinsi.program');
Route::get('/wilayah/{provinceSlug}/program/{programSlug}/artikel/{articleSlug}', [FrontController::class, 'wilayahProvinsiProgramArticleDetail'])->name('wilayah.provinsi.program.article');
Route::get('/wilayah/{provinceSlug}/{kabkotSlug}', [FrontController::class, 'wilayahKabkot'])->name('wilayah.kabkot');
Route::get('/wilayah/{provinceSlug}/{kabkotSlug}/program/{programSlug}', [FrontController::class, 'wilayahKabkotProgramDetail'])->name('wilayah.kabkot.program');
Route::get('/wilayah/{provinceSlug}/{kabkotSlug}/program/{programSlug}/artikel/{articleSlug}', [FrontController::class, 'wilayahKabkotProgramArticleDetail'])->name('wilayah.kabkot.program.article');
Route::get('/hubungi-kami', [FrontController::class, 'contact'])->name('contact');
Route::post('/hubungi-kami/kirim', [FrontController::class, 'contactSubmit'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Protected Admin Routes
    |--------------------------------------------------------------------------
    */
    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // 1. Setting WA & General
        Route::get('/settings/whatsapp', [SettingController::class, 'whatsapp'])->name('settings.whatsapp');
        Route::post('/settings/whatsapp', [SettingController::class, 'updateWhatsapp'])->name('settings.whatsapp.update');
        Route::get('/settings/general', [SettingController::class, 'general'])->name('settings.general');
        Route::post('/settings/general', [SettingController::class, 'updateGeneral'])->name('settings.general.update');

        // 2. CMS Program
        Route::resource('programs', ProgramController::class);
        Route::post('/programs/{program}/toggle-status', [ProgramController::class, 'toggleStatus'])->name('programs.toggle-status');

        // 3. CMS Artikel
        Route::resource('articles', ArticleController::class);

        // 4. CMS FAQ
        Route::resource('faqs', FaqController::class);

        // 5. Contact Inquiries
        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
        Route::post('/contacts/{contact}/replied', [ContactController::class, 'markAsReplied'])->name('contacts.replied');
        Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });
});
