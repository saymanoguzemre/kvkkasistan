<?php

use App\Http\Controllers\Customer\CustomerPageController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [RouteController::class, 'homepage'])->name('homepage');
Route::resource('/form', FormController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profil', [CustomerPageController::class, 'index'])->name('dashboard');
    Route::get('/profil/duzenle', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/siparislerim', [CustomerPageController::class, 'orders'])->name('customer.orders');

    Route::get('/siparis/{referenceNo}', [CustomerPageController::class, 'order'])->name('order.show');
    Route::get('/siparis/{referenceNo}/odeme', [CustomerPageController::class, 'orderPay'])->name('order.pay');

    # PAYMENT
    Route::get('stripe', [StripeController::class, 'stripe']);
    Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
});

Route::get('/deneme', [CustomerPageController::class, 'deneme']);
Route::get('/deneme2', function () {
    return Auth::logout(Auth::user());
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
