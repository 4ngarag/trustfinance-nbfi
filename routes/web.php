<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Home\PageController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [PageController::class, 'home']);

Route::get('/company/about', [PageController::class, 'about']);
Route::get('/company/management', [PageController::class, 'management']);
Route::get('/address', [PageController::class, 'address']);
// Route::get('/loans', [PageController::class, 'loans']);
// Route::get('/loans/{id}', [PageController::class, 'loans_show']);
Route::get('/loan/business', [PageController::class, 'loan_business']);
Route::get('/loan/car', [PageController::class, 'loan_car']);
Route::get('/loan/consumer', [PageController::class, 'loan_consumer']);
Route::get('/loan/instant', [PageController::class, 'loan_instant']);
Route::get('/loan/salary', [PageController::class, 'loan_salary']);
Route::get('/investment/trust', [PageController::class, 'investment_trust']);
Route::get('/report', [PageController::class, 'report']);
Route::get('/report/audit', [PageController::class, 'report_audit']);
Route::get('/report/activity', [PageController::class, 'report_activity']);
Route::get('/calculator', [PageController::class, 'calculator']);
// Route::get('/contact', [PageController::class, 'contact']);
Route::get('/faq', [PageController::class, 'faq']);
// Route::get('/news/{id}', [PageController::class, 'news']);
Route::get('/news', [PageController::class, 'news']);

Route::get('/loan-request', [MailController::class, 'loan_request']);
Route::post('/loan-request', [MailController::class, 'loan_request_sendEmail']);
Route::post('/investment/trust', [MailController::class, 'invest_request_sendEmail']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
//     Route::get('/', [AdminController::class, 'index'])->name('index');
//     Route::resource('/posts', PostController::class);
//     Route::resource('/loans', LoanController::class);
// });

require __DIR__.'/auth.php';
