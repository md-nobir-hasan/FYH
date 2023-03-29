<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
    //Delete
    Route::get('/delete/{id}/{model}',[MiscellaneousController::class,'SingleDelete'])->name('delete');
    Route::prefix('/user')->name('user.')->group(function(){
        //role
    Route::group(['as' => 'role.', 'prefix' => 'role'], function (){
        Route::get('/index', [SettingController::class, 'roleIndex'])->name('index');
        Route::get('/create/{id?}', [SettingController::class, 'roleCreate'])->name('create');
        Route::post('/store', [SettingController::class, 'roleStore'])->name('store');
        Route::get('/destroy/{id}', [SettingController::class, 'roleDestroy'])->name('destroy');
    });

    //user
    Route::group(['as' => 'user.', 'prefix' => 'user'], function (){
        Route::get('/index', [SettingController::class, 'userIndex'])->name('index');
        Route::get('/create/{id?}', [SettingController::class, 'userCreate'])->name('create');
        Route::post('/store', [SettingController::class, 'userStore'])->name('store');
        Route::get('/destroy/{id}', [SettingController::class, 'userDestroy'])->name('destroy');
    });

    //Features
    Route::resource('features',FeatureController::class)->names([
        'index' => 'feature.index',
        'create' => 'feature.create',
        'edit' => 'feature.edit',
        'store' => 'feature.store',
        'update' => 'feature.update',
        'destroy' => 'feature.destroy',
        'show' => 'feature.show',
        ]);
    });
});

require __DIR__.'/auth.php';
