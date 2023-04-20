<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\CrudController;

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

Route::middleware('auth')->group(function () {

    Route::controller(CMSController::class)->group(function () {

        Route::post('UpdateUser', 'UpdateUser')->name('UpdateUser');

        Route::post('NewUser', 'NewUser')->name('NewUser');

        Route::get('UAC', 'UAC')->name('UAC');
        Route::get('dashboard', 'CMS_aboutAfriChild')->name('dashboard');
        Route::get('CmsHome', 'CMS_aboutAfriChild')->name('CmsHome');
        Route::get('CMS_aboutAfriChild', 'CMS_aboutAfriChild')->name('CMS_aboutAfriChild');
        Route::get('CMS_ourWork', 'CMS_ourWork')->name('CMS_ourWork');
        Route::get('CMS_boardOfDirectors', 'CMS_boardOfDirectors')->name('CMS_boardOfDirectors');
        Route::get('CMS_theSecretariat', 'CMS_theSecretariat')->name('CMS_theSecretariat');
        Route::get('CMS_corePrograms', 'CMS_corePrograms')->name('CMS_corePrograms');
        Route::get('CMS_foundingPartners', 'CMS_foundingPartners')->name('CMS_foundingPartners');
        Route::get('CMS_researchAssociates', 'CMS_researchAssociates')->name('CMS_researchAssociates');
        Route::get('CMS_promotingPartners', 'CMS_promotingPartners')->name('CMS_promotingPartners');
        Route::get('CMS_affiliates', 'CMS_affiliates')->name('CMS_affiliates');
        Route::get('CMS_gallery', 'CMS_gallery')->name('CMS_gallery');
        Route::get('CMS_research', 'CMS_research')->name('CMS_research');
        Route::get('CMS_reports', 'CMS_reports')->name('CMS_reports');
        Route::get('CMS_policyBriefs', 'CMS_policyBriefs')->name('CMS_policyBriefs');

    });

    Route::controller(CrudController::class)->group(function () {

        Route::get('MassDelete/{TableName}/{id}', 'MassDelete')->name('MassDelete');

        Route::post('MassUpdate', 'MassUpdate')->name('MassUpdate');

        Route::post('MassInsert', 'MassInsert')->name('MassInsert');
    });
});
