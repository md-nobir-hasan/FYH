<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\BrotcastController;
use App\Http\Controllers\ClientTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MembershipTypeController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserCommonController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

//broadcast
Route::get('/broadcast',[BrotcastController::class,'UserRegInfoAdmin'])->name('brotcast');

//Profile common for comstomer and admin
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Comtomer route
Route::prefix('/cumstomer')->name('customer.')->group(function(){
    Route::get('/dashboard',[UserCommonController::class,'dashboard'])->name('dashboard');
    // Route::get('/index',[UserCommonController::class,'index'])->name('index');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');
//end dashoard


// Admin route ===============================================
Route::middleware(['auth','admin'])->prefix('/admin')->name('admin.')->group(function () {

    //Delete
    Route::get('/delete/{id}/{model}',[MiscellaneousController::class,'SingleDelete'])->name('delete');

    //ajax throug axios
    Route::get('customer/mark-as-read',[AjaxController::class,'customerMarkAsRead'])->name('customer.mark_as_read');

    // Export routes
    Route::get('/customers/export/excel',[ExportController::class,'CustomerExport'])->name('customer.export');
    Route::get('/customers/export/pdf',[ExportController::class,'CustomerExportPdf'])->name('customer.export.pdf');
    // Route::get('/customers/export/pdf/htmlshow',[ExportController::class,'CustomerExportPdfhtml'])->name('customer.export.html');

    //Customers
    Route::prefix('/customer')->name('customer.')->group(function(){
        Route::get('/index',[CustomerController::class,'index'])->name('index');
    });

    //Setup
    Route::prefix('/setup')->name('setup.')->group(function(){
        //Client type
        Route::resource('/client-type',ClientTypeController::class);

        //Membership type
        Route::resource('/membership',MembershipTypeController::class);

        //Benefit
        Route::resource('/benefit',BenefitController::class);
    });

    //User Management
    Route::prefix('/user')->name('user.')->group(function(){
        //Features
        Route::resource('features',FeatureController::class)->names([
            'index' => 'feature.index',
            'create' => 'feature.create',
            'edit' => 'feature.edit',
            'store' => 'feature.store',
            'update' => 'feature.update',
            'show' => 'feature.show',
            ]);


        //role
        Route::group(['as' => 'role.', 'prefix' => 'role'], function (){
            Route::get('/index', [SettingController::class, 'roleIndex'])->name('index');
            Route::get('/create/{id?}', [SettingController::class, 'roleCreate'])->name('create');
            Route::post('/store', [SettingController::class, 'roleStore'])->name('store');
        });

        //user
        Route::group(['as' => 'user.', 'prefix' => 'user'], function (){
            Route::get('/index', [SettingController::class, 'userIndex'])->name('index');
            Route::get('/create/{id?}', [SettingController::class, 'userCreate'])->name('create');
            Route::post('/store', [SettingController::class, 'userStore'])->name('store');
        });
    });

});
//=================================== End admin route

require __DIR__.'/auth.php';
