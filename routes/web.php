<?php

use App\Http\Controllers\Customer\CustomerPageController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StripeController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [CustomerPageController::class, 'index'])->name('dashboard');
    Route::get('/profil/duzenle', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/siparislerim', [CustomerPageController::class, 'orders'])->name('customer.orders');

    Route::get('/siparis/{referenceNo}', [CustomerPageController::class, 'order'])->name('order.show');
    Route::get('/dokuman/indir/{referenceNo}/{documentId}', [DocumentController::class, 'download'])->name('document.download');
    Route::get('/dokuman/incele/{referenceNo}/{documentId}', [DocumentController::class, 'stream'])->name('document.stream');

    # PAYMENT
    Route::get('/siparis/{referenceNo}/odeme', [StripeController::class, 'stripe'])->name('order.pay');
    Route::post('/siparis/{referenceNo}/odeme/post', [StripeController::class, 'stripePost'])->name('stripe.post');
});

Route::get('/aydinlatma-metni', [RouteController::class, 'aydinlatma']);
Route::get('/acik-riza-metni', [RouteController::class, 'acikriza']);


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
