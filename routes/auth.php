<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register/{planId?}', [RegisteredUserController::class, 'create'])
                ->name('register')->withoutMiddleware('pdc');

    Route::post('register', [RegisteredUserController::class, 'store'])->withoutMiddleware('pdc');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login')->withoutMiddleware('pdc');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->withoutMiddleware('pdc');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request')->withoutMiddleware('pdc');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email')->withoutMiddleware('pdc');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset')->withoutMiddleware('pdc');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store')->withoutMiddleware('pdc');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice')->withoutMiddleware('pdc');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify')->withoutMiddleware('pdc');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send')->withoutMiddleware('pdc');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm')->withoutMiddleware('pdc');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store'])->withoutMiddleware('pdc');

    Route::put('password', [PasswordController::class, 'update'])->name('password.update')->withoutMiddleware('pdc');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout')->withoutMiddleware('pdc')->withoutMiddleware('pdc');
});
