<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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
Route::get('/', function() {
    return view('index');
    
});

Route::prefix('/application')->name('application.')->group(function() {
    Route::get('/', [StudentController::class, 'index'])->name('form');
    Route::post('/form', [StudentController::class, 'store'])->name('store.form');
    Route::get('/mail/{id}', [StudentController::class, 'applicationMailNotification'])->name('mail');

});


Route::get('/payment', [PaymentController::class, 'loadPage'])->name('payment.show');
Route::post('/payment/upload/', [PaymentController::class, 'store'])->name('payment.upload');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('/admin')->group(function() {
    Route::get('/students', [StudentController::class, 'show'])->name('show.students');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
