<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Modules\Admin\App\Http\Controllers\BackendController;
use Modules\Admin\Http\Controllers\AboutCMsController;
use Modules\Admin\Http\Controllers\AddressController;
use Modules\Admin\Http\Controllers\AdminConfigurationController;
use Modules\Admin\Http\Controllers\AuthController;
use Modules\Admin\Http\Controllers\AuthenticateController;
use Modules\Admin\Http\Controllers\BannerAndMetaTagController;
use Modules\Admin\Http\Controllers\CommonFunctionController;
use Modules\Admin\Http\Controllers\ContactusController;
use Modules\Admin\Http\Controllers\CountController;
use Modules\Admin\Http\Controllers\DashboardController;
use Modules\Admin\Http\Controllers\HomeBannerController;
use Modules\Admin\Http\Controllers\HomeCMSController;
use Modules\Admin\Http\Controllers\KeyElementController;
use Modules\Admin\Http\Controllers\MiningCmsController;
use Modules\Admin\Http\Controllers\MiningProcessController;
use Modules\Admin\Http\Controllers\NewsEventsCMSController;
use Modules\Admin\Http\Controllers\NewsEventsController;
use Modules\Admin\Http\Controllers\PrivacyPolicyController;
use Modules\Admin\Http\Controllers\SiteCommonContentController;
use Modules\Admin\Http\Controllers\StructureCmsController;
use Modules\Admin\Http\Controllers\TeamController;
use Modules\Admin\Http\Controllers\TermsAndConditionController;

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
/**
 * web route
 *
 * @author Priya
 */
Route::prefix('3RT-admin-portal')->group(function () {
    Route::get('login', [AuthenticateController::class, 'showLoginForm'])->name('admin.login.form');
    Route::post('login', [AuthenticateController::class, 'login'])->name('admin.login');
    Route::post('logout', [AuthenticateController::class, 'logout'])->name('admin.logout');
    Route::group(['middleware' => 'auth:admin'], function () {
        // dashboard
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });

        Route::post('update-status', [CommonFunctionController::class, 'updateStatus'])->name('update-status');
        Route::post('update-sort-order', [CommonFunctionController::class, 'updateSortOrder'])->name('update-sort-order');
        //banner and meta tag
        Route::resource('bannerandmetatag', BannerAndMetaTagController::class);
        //site common content
        Route::get('site-common-content', [SiteCommonContentController::class, 'edit'])->name('site-common-content.edit');
        Route::put('site-common-content/update/{id}', [SiteCommonContentController::class, 'update'])->name('site-common-content.update');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        //terms and condition
        Route::get('terms-and-condition/edit', [TermsAndConditionController::class, 'edit'])->name('terms-and-condition.edit');
        Route::put('terms-and-condition/{id}', [TermsAndConditionController::class, 'update'])->name('terms-and-condition.update');
        //privacy policy
        Route::get('privacy-policy/edit', [PrivacyPolicyController::class, 'edit'])->name('privacy-policy.edit');
        Route::put('privacy-policy/{id}', [PrivacyPolicyController::class, 'update'])->name('privacy-policy.update');

        //home banner
        Route::get('home-banner/edit', [HomeBannerController::class, 'edit'])->name('home-banner.edit');
        Route::put('home-banner/{id}', [HomeBannerController::class, 'update'])->name('home-banner.update');
        //home cms
        Route::get('home-cms/edit', [HomeCMSController::class, 'edit'])->name('home-cms.edit');
        Route::put('home-cms/{id}', [HomeCMSController::class, 'update'])->name('home-cms.update');
        //admin configuration
        Route::resource('admin-config', AdminConfigurationController::class);

        //about us
        Route::get('about-cms/edit', [AboutCMsController::class, 'edit'])->name('about-cms.edit');
        Route::put('about-cms/{id}', [AboutCMsController::class, 'update'])->name('about-cms.update');
        //team management
        Route::resource('team-management', TeamController::class);

        //Mining Process cms
        Route::get('mining_cms/edit', [MiningCmsController::class, 'edit'])->name('mining_cms.edit');
        Route::put('mining_cms/{id}', [MiningCmsController::class, 'update'])->name('mining_cms.update');

        //mining process
        Route::resource('mining-process', MiningProcessController::class);
        //location management -contact page
        Route::resource('location', ContactusController::class);
        //key element management
        Route::resource('key-element', KeyElementController::class);

        //structure over view
        Route::get('/structure-overview/edit', [StructureCmsController::class, 'edit'])->name('structure-overview.edit');

        Route::put('/structure-overview/{id}', [StructureCmsController::class, 'update'])->name('structure-overview.update');
        //newsand events
        Route::resource('/news-events', NewsEventsController::class);

        Route::get('/news-events-cms/edit', [NewsEventsCMSController::class, 'edit'])->name('news-events-cms.edit');

        Route::put('/news-events-cms/{id}', [NewsEventsCMSController::class, 'update'])->name('news-events-cms.update');
        Route::resource('/address-management', AddressController::class);

        Route::resource('/count-setting', CountController::class);
    });


});
