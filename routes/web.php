<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\JobCategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeEditController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminJobCategoryController;
use App\Http\Controllers\Admin\AdminPostController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/terms', [TermsController::class, 'index'])->name('terms');
Route::get('/categories', [JobCategoryController::class, 'categories'])->name('category');
Route::get('/post/{slug}', [PostController::class, 'postDetails'])->name('post');

Route::get('admin/invalid', function () {
    return view('admin.linkexpired');
})->name('admin.invalid');

/*
 * Admin Routes
 */

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/loginSubmit', [AdminLoginController::class, 'loginSubmitPost'])->name('admin.login.submit');
Route::get('/admin/recover', [AdminLoginController::class, 'recoverPassword'])->name('admin.recover');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::post('/admin/recoverSubmit', [AdminLoginController::class, 'recoverSubmitPost'])->name('admin.recover.submit');
Route::get('/admin/recoverPassword/{token}/{email}', [AdminLoginController::class, 'resetPassword'])->name('admin.recoverPassword');
Route::post('/admin/recoverPasswordSubmit', [AdminLoginController::class, 'resetPasswordSubmit'])->name('admin.recoverPassword.submit');
Route::get('/admin/soslogin', [AdminLoginController::class, 'sosLogin'])->name('admin.soslogin');
Route::post('/admin/sosloginSubmit', [AdminLoginController::class, 'sosLoginSubmitPost'])->name('admin.soslogin.submit');
Route::get('/admin/validateOTPassword/{token}', [AdminLoginController::class, 'enterOTPassword'])->name('admin.enterOTPassword');
Route::post('/admin/validateOTPasswordSubmit', [AdminLoginController::class, 'validateOTPasswordSubmit'])->name('admin.validateOTPassword.submit');


Route::middleware(['admin:admin'])->group(function () {
    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/adminProfileSubmit', [AdminProfileController::class, 'editProfileSubmit'])->name('admin.profile.submit');
    Route::get('/admin/edit-homepage', [AdminHomeEditController::class, 'index'])->name('admin.homepage.edit');
    Route::post('/admin/updateHomepage', [AdminHomeEditController::class, 'update'])->name('admin.updateHomepage');
    Route::get('/admin/job-category', [AdminJobCategoryController::class, 'index'])->name('admin.job.category');
    Route::post('/admin/jobCategoryCreate', [AdminJobCategoryController::class, 'create'])->name('admin.job.category.create');
    Route::get('/admin/job-category-edit/{id}', [AdminJobCategoryController::class, 'edit'])->name('admin.job.category.edit');
    Route::post('/admin/jobCategoryEdit/{id}', [AdminJobCategoryController::class, 'editCategory'])->name('admin.job.category.edit.submit');
    Route::get('/admin/job-category-delete/{id}', [AdminJobCategoryController::class, 'delete'])->name('admin.job.category.delete');

    Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin.post');
    Route::get('/admin/post/create', [AdminPostController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post/createSubmit', [AdminPostController::class, 'createSubmit'])->name('admin.post.create.submit');
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post.edit');
    Route::post('/admin/post/editSubmit/{id}', [AdminPostController::class, 'editSubmit'])->name('admin.post.edit.submit');
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin.post.delete');

});