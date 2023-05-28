<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Middleware\AdminAuthenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionController as AdminAuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\Admin\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DocumentController;

Route::middleware(AdminAuthenticate::class)->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/documents', DocumentController::class, ['as' => 'admin']);
});


/* AUTH ROUTES */
Route::prefix('admin')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('admin.register');

    Route::post('register', [RegisteredUserController::class, 'store']);


    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])
            ->name('admin.login');

    Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('admin.password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('admin.password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('admin.password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('admin.password.store');



    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('admin.verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('admin.verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('admin.verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('admin.password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('admin.password.update');

    Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});

