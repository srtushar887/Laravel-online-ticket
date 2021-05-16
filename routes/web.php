<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});



Route::get('/', [\App\Http\Controllers\FrontendController::class,'index'])->name('front');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::prefix('superadmin')->group(function (){
    Route::get('/login', [\App\Http\Controllers\Auth\SuperAdminLoginController::class,'showLoginform'])->name('superadmin.login');
    Route::post('/login', [\App\Http\Controllers\Auth\SuperAdminLoginController::class,'login'])->name('superadmin.login.submit');
    Route::get('/logout', [\App\Http\Controllers\Auth\SuperAdminLoginController::class,'logout'])->name('superadmin.logout');
});

Route::group(['middleware' => ['auth:superadmin']], function() {
    Route::prefix('superadmin')->group(function() {
        Route::get('/', [\App\Http\Controllers\SuperAdmin\SuperAdminController::class,'index'])->name('superadmin.dashboard');


        Route::get('/general-setting', [\App\Http\Controllers\SuperAdmin\SuperAdminController::class,'general_setting'])->name('superadmin.general.setting');
        Route::post('/general-setting-update', [\App\Http\Controllers\SuperAdmin\SuperAdminController::class,'general_setting_update'])->name('superadmin.general.setting.update');

        //ticket
        Route::get('/ticket-management', [\App\Http\Controllers\SuperAdmin\SuperAdminTicketController::class,'ticket_management'])->name('superadmin.ticket.management');
        Route::post('/ticket-get', [\App\Http\Controllers\SuperAdmin\SuperAdminTicketController::class,'ticket_get'])->name('superadmin.ticket.get');
        Route::post('/ticket-save', [\App\Http\Controllers\SuperAdmin\SuperAdminTicketController::class,'ticket_save'])->name('superadmin.ticket.save');

        //product
        Route::get('/product-management', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_management'])->name('superadmin.product.management');
        Route::post('/product-get', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_get'])->name('superadmin.product.get');
        Route::get('/product-create', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_create'])->name('superadmin.product.create');
        Route::post('/product-save', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_save'])->name('superadmin.product.save');
        Route::get('/product-edit/{id}', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_edit'])->name('superadmin.product.edit');
        Route::post('/product-update', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_update'])->name('superadmin.product.update');
        Route::post('/product-delete', [\App\Http\Controllers\SuperAdmin\SuperAdminProductController::class,'product_delete'])->name('superadmin.product.delete');



    });
});




