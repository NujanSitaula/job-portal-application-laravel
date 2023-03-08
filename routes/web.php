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
use App\Http\Controllers\Admin\AdminPackageController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\SigninController;
use App\Http\Controllers\Employer\EmployerController;
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
Route::get('/verify', function () {
    return view('frontend.verify');
})->name('email.verify');
Route::get('/verified', function () {
    return view('frontend.verified');
})->name('email.verified');


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
Route::get('/admin/otp-authentication', [AdminLoginController::class, 'sosLogin'])->name('admin.soslogin');
Route::post('/admin/otploginSubmit', [AdminLoginController::class, 'sosLoginSubmitPost'])->name('admin.soslogin.submit');
Route::get('/admin/validateOTPassword/{token}', [AdminLoginController::class, 'enterOTPassword'])->name('admin.enterOTPassword');
Route::post('/admin/validateOTPasswordSubmit', [AdminLoginController::class, 'validateOTPasswordSubmit'])->name('admin.validateOTPassword.submit');


Route::middleware(['admin:admin'])->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/adminProfileSubmit', [AdminProfileController::class, 'editProfileSubmit'])->name('admin.profile.submit');
    Route::get('/admin/homepage/edit', [AdminHomeEditController::class, 'index'])->name('admin.homepage.edit');
    Route::post('/admin/updateHomepage', [AdminHomeEditController::class, 'update'])->name('admin.updateHomepage');
    Route::get('/admin/category/view', [AdminJobCategoryController::class, 'index'])->name('admin.job.category');
    Route::post('/admin/category/create', [AdminJobCategoryController::class, 'create'])->name('admin.job.category.create');
    Route::get('/admin/category/edit/{id}', [AdminJobCategoryController::class, 'edit'])->name('admin.job.category.edit');
    Route::post('/admin/jobCategoryEdit/{id}', [AdminJobCategoryController::class, 'editCategory'])->name('admin.job.category.edit.submit');
    Route::get('/admin/category/delete/{id}', [AdminJobCategoryController::class, 'delete'])->name('admin.job.category.delete');

    Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin.post');
    Route::get('/admin/post/create', [AdminPostController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post/createSubmit', [AdminPostController::class, 'createSubmit'])->name('admin.post.create.submit');
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post.edit');
    Route::post('/admin/post/editSubmit/{id}', [AdminPostController::class, 'editSubmit'])->name('admin.post.edit.submit');
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin.post.delete');

    Route::get('/admin/post/package/view', [AdminPackageController::class, 'featured'])->name('admin.post.featured');
    Route::get('/admin/post/package/create', [AdminPackageController::class, 'createFeatured'])->name('admin.post.featured.create');
    Route::post('/admin/post/package/createSubmit', [AdminPackageController::class, 'createFeaturedSubmit'])->name('admin.post.featured.create.submit');
    Route::get('/admin/post/package/edit/{id}', [AdminPackageController::class, 'editFeatured'])->name('admin.post.featured.edit');
    Route::post('/admin/post/package/editSubmit/{id}', [AdminPackageController::class, 'editFeaturedSubmit'])->name('admin.post.featured.edit.submit');
    Route::get('/admin/post/package/delete/{id}', [AdminPackageController::class, 'deleteFeatured'])->name('admin.post.featured.delete');


});

/*
 * Employer Routes
 */

 Route::get('/employer/signin', [SigninController::class, 'index'])->name('employer.signin');
 Route::get('/employer/signup', [SignupController::class, 'index'])->name('employer.signup');
 Route::get('/employer/forgot-password', [RecoverController::class, 'index'])->name('employer.forgot-password');



 Route::post('/employer/signupSubmit', [SignupController::class, 'signupSubmit'])->name('employer.signup.submit');
 Route::post('/employer/signinSubmit', [SigninController::class, 'signinSubmit'])->name('employer.signin.submit');
 Route::get('/verify-email/{token}/{email}', [SignupController::class, 'verifyEmail'])->name('verify.email');
 Route::get('/employer/logout', [SigninController::class, 'employerLogout'])->name('employer.logout');


 Route::middleware(['employer:employer'])->group(function () {

    Route::get('/employer/dashboard', [EmployerController::class, 'index'])->name('employer.dashboard');
 
 });
/*
 * Employee Routes
 */

 Route::get('/employee/signin', [SigninController::class, 'employee'])->name('employee.signup');
 Route::get('/employee/signup', [SignupController::class, 'employee'])->name('employee.login');
 Route::get('/employer/forgot-password', [RecoverController::class, 'index'])->name('employer.forgot-password');

 