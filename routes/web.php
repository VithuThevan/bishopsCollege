<?php

use App\Http\Controllers\donorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.form');
});

Route::post('/products/create', [App\Http\Controllers\donorController::class, 'store']);

Route::post('/page1', [App\Http\Controllers\donorController::class, 'store2']);
Route::get('/page2', [App\Http\Controllers\donorController::class, 'store3'])->name('page2');

Route::post('/products/response', [App\Http\Controllers\donorController::class, 'display']);

Route::get('/list1', [App\Http\Controllers\donorController::class, 'index'])->name('list1');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/list', function () {
    return view('frontend.list1');
});

Route::get('/response', function () {
    return view('frontend.response');
});

Route::get('/sendbasicemail6', [MailController::class, 'sendEmail'])->name('sendEmail');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/process-payment',[TestController::class,'processPayment'])->name('process.payment');


require __DIR__ . '/auth.php';
