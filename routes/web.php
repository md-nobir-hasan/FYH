<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\BrotcastController;
use App\Http\Controllers\ClientTypeController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontendControler;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MembershipTypeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\PaymentDurationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Submenucontroller;
use App\Http\Controllers\UserCommonController;
use Illuminate\Support\Facades\Route;


// Frontend controller
    Route::get('/', [FrontendControler::class,'homePage'])->name('home');
    Route::get('/membership', [FrontendControler::class,'membershipPage'])->name('member');
    Route::get('/community', [FrontendControler::class,'communityPage'])->name('community');
    Route::get('/payment', [FrontendControler::class,'paymentPage'])->name('payment');
    Route::get('/congratulations', [FrontendControler::class,'congratsPage'])->name('congrats');
    Route::get('/benefits', [FrontendControler::class,'benefitPage'])->name('benefit');
    Route::get('/about', [FrontendControler::class,'aboutPage'])->name('about');
    Route::get('/discover', [FrontendControler::class,'discoverPage'])->name('discover');
    Route::get('/billing', [FrontendControler::class,'billingPage'])->name('billing');
    Route::prefix('/guide')->name('guide.')->group(function(){
        Route::get('/moving-to-switzerland',[FrontendControler::class,'moveSwitzerland'])->name('move_switzerland');
        Route::get('/integration-in-switzerland',[FrontendControler::class,'integrationSwitzerland'])->name('move_switzerland');
    });
//End frontend controller

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

    //Settings
    Route::prefix('/setting')->name('setting.')->group(function(){
        Route::resource('setting',SettingsController::class);
    });
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

        //Links
        Route::resource('/link',LinkController::class);

        //Currency
        Route::resource('/currency',CurrencyController::class);

        //Payment Duration
        Route::resource('/payment_duration',PaymentDurationController::class);
    });

    //Menus route
    Route::prefix('/menu')->name('menu.')->group(function(){
        Route::resource('menu',MenuController::class);
        Route::resource('submenu',Submenucontroller::class);
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
