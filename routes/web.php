<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

/* Pages */
Route::get('/', [App\Http\Controllers\projectController::class, 'home'])->name('welcome');
Route::get('/about', [App\Http\Controllers\projectController::class, 'about'])->name('about');

Route::get('/projects', [App\Http\Controllers\projectController::class, 'projects'])->name('projects');
Route::get('/projectShow.{id}', [App\Http\Controllers\projectController::class, 'show'])->name('projectShow');

Route::get('/gallery', [App\Http\Controllers\galleryController::class, 'gallery'])->name('gallery');
Route::get('/news', [App\Http\Controllers\postController::class, 'posts'])->name('news');
Route::get('/postShow.{id}', [App\Http\Controllers\postController::class, 'show'])->name('postShow');
Route::get('contact', function () {
    return view('pages.contact');
});
Route::post('/keepInTouch', [App\Http\Controllers\formController::class, 'keepInTouch'])->name('keepInTouch');
Route::post('/contactUs', [App\Http\Controllers\formController::class, 'contactUs'])->name('contactUs');

Route::get('terms&conditions', function () {
    return view('pages.terms&conditions');
});
Route::get('privacyPolicy', function () {
    return view('pages.privacyPolicy');
});
Route::get('faq', function () {
    return view('pages.faq');
});





/* Dashboard */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');

    Route::post('/update-profile-info', [App\Http\Controllers\AdminController::class, 'updateInfo'])->name('adminUpdateInfo');
    Route::get('/userList', [App\Http\Controllers\AdminController::class, 'userList'])->name('admin.userList');
    Route::post('/change-password', [App\Http\Controllers\AdminController::class, 'changePassword'])->name('adminChangePassword');
    Route::get('/destroy.{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/show.{id}', [App\Http\Controllers\AdminController::class, 'show'])->name('admin.show');
    Route::get('/edit.{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::get('/update.{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');

   /*  forms */
    Route::get('/keepIn', [App\Http\Controllers\formController::class, 'keepIn'])->name('admin.keepIn');
    Route::get('/destroy.{id}', [App\Http\Controllers\formController::class, 'destroy'])->name('admin.destroy');

    Route::get('/contact', [App\Http\Controllers\formController::class, 'contact'])->name('admin.contact');
    Route::get('/remove.{id}', [App\Http\Controllers\formController::class, 'remove'])->name('admin.remove');

/* projects */
    Route::get('/project', [App\Http\Controllers\projectController::class, 'index'])->name('admin.project');
    Route::get('/projectCreate', [App\Http\Controllers\projectController::class, 'create'])->name('admin.projectCreate');
    Route::post('/projectStore', [App\Http\Controllers\projectController::class, 'store'])->name('admin.projectStore');
    Route::get('/projectEdit.{id}', [App\Http\Controllers\projectController::class, 'edit'])->name('admin.projectEdit');
    Route::get('/projectUpdate.{id}', [App\Http\Controllers\projectController::class, 'update'])->name('admin.projectUpdate');
    Route::get('/projectDestroy.{id}', [App\Http\Controllers\projectController::class, 'destroy'])->name('admin.projectDestroy');


    /* posts */
    Route::get('/post', [App\Http\Controllers\postController::class, 'index'])->name('admin.post');
    Route::get('/postCreate', [App\Http\Controllers\postController::class, 'create'])->name('admin.postCreate');
    Route::post('/postStore', [App\Http\Controllers\postController::class, 'store'])->name('admin.postStore');
    Route::get('/postEdit.{id}', [App\Http\Controllers\postController::class, 'edit'])->name('admin.postEdit');
    Route::get('/postUpdate.{id}', [App\Http\Controllers\postController::class, 'update'])->name('admin.postUpdate');
    Route::get('/postDestroy.{id}', [App\Http\Controllers\postController::class, 'destroy'])->name('admin.postDestroy');

    /* gallerys */
    Route::get('/gallery', [App\Http\Controllers\galleryController::class, 'index'])->name('admin.gallery');
    Route::get('/galleryCreate', [App\Http\Controllers\galleryController::class, 'create'])->name('admin.galleryCreate');
    Route::post('/galleryStore', [App\Http\Controllers\galleryController::class, 'store'])->name('admin.galleryStore');
    Route::get('/galleryEdit.{id}', [App\Http\Controllers\galleryController::class, 'edit'])->name('admin.galleryEdit');
    Route::get('/galleryUpdate.{id}', [App\Http\Controllers\galleryController::class, 'update'])->name('admin.galleryUpdate');
    Route::get('/galleryDestroy.{id}', [App\Http\Controllers\galleryController::class, 'destroy'])->name('admin.galleryDestroy');



});


Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::get('/settings', [App\Http\Controllers\UserController::class, 'settings'])->name('user.settings');
});
