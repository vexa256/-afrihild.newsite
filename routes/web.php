<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::controller(MainController::class)->group(function () {

    Route::get('AfriChildBlogNewsDetails/{id}', 'AfriChildBlogNewsDetails')->name('AfriChildBlogNewsDetails');

    Route::get('AfriChildBlogPostDetails/{AfriChildBlogPost}', 'AfriChildBlogPostDetails')->name('AfriChildBlogPostDetails');

    Route::get('AfriChildCenterBlogPosts', 'AfriChildCenterBlogPosts')->name('AfriChildCenterBlogPosts');

    Route::get('AfriChildCenterGallery', 'AfriChildCenterGallery')->name('AfriChildCenterGallery');

    Route::get('AfriChildCenterPolicyBriefs', 'AfriChildCenterPolicyBriefs')->name('AfriChildCenterPolicyBriefs');

    Route::get('AfriChildCenterReports', 'AfriChildCenterReports')->name('AfriChildCenterReports');

    Route::get('AfriChildResearchPublications', 'AfriChildResearchPublications')->name('AfriChildResearchPublications');

    Route::get('AfriChildPromotingPartners', 'AfriChildPromotingPartners')->name('AfriChildPromotingPartners');

    Route::get('AfriChildCenterMakerereAffiliates', 'AfriChildCenterMakerereAffiliates')->name('AfriChildCenterMakerereAffiliates');

    Route::get('AfriChildCenterMakerereResearchAssociates', 'AfriChildCenterMakerereResearchAssociates')->name('AfriChildCenterMakerereResearchAssociates');

    Route::get('Afri_Child_Center_Makerere_Contact_Us', 'Afri_Child_Center_Makerere_Contact_Us')->name('Afri_Child_Center_Makerere_Contact_Us');
    Route::get('AfriChildFounders', 'AfriChildFounders')->name('AfriChildFounders');

    Route::get('TheAfriChildCoreProgramAreas', 'TheAfriChildCoreProgramAreas')->name('TheAfriChildCoreProgramAreas');

    Route::get('TheAfriChildSecretariatTeam', 'TheAfriChildSecretariatTeam')->name('TheAfriChildSecretariatTeam');

    Route::get('TheAfriChildCenterBoardOfDirectors', 'TheAfriChildCenterBoardOfDirectors')->name('TheAfriChildCenterBoardOfDirectors');

    Route::get('OurWorkAtAfriChildCenterMakerere', 'OurWorkAtAfriChildCenterMakerere')->name('OurWorkAtAfriChildCenterMakerere');

    Route::get('AboutTheAfriChildCenterMakerere', 'AboutTheAfriChildCenterMakerere')->name('AboutTheAfriChildCenterMakerere');

    Route::get('/', 'Afri_Child_Center_Makerere')->name('AfriChildCenterMakerere');
    // Route::post('UpdateAccount', 'UpdateAccount')->name('UpdateAccount');
    // Route::any('MgtUserRoles', 'MgtUserRoles')->name('MgtUserRoles');

});

/*Route::get('/', function () {
return view('welcome');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__ . '/auth.php';
