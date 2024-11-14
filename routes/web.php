<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Models\Payment;
use App\Models\Student;
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

Route::post('/details',[StudentController::class, 'studentDetails'])->name('applicant.details');
Route::post('/outstanding/payment', [PaymentController::class, 'store'])->name('outstanding.upload');

Route::get('/outstanding', function() {
    return view('application.outstanding');
});


Route::get('/payment', [PaymentController::class, 'loadPage'])->name('payment.show');
Route::post('/payment/upload/', [PaymentController::class, 'store'])->name('payment.upload');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('/admin')->group(function() {
    Route::get('/students', [StudentController::class, 'show'])->name('show.students');
    Route::get('/pending/view', [StudentController::class, 'pending'])->name('application.pending');
    Route::post('/approve', [StudentController::class, 'approve'])->name('application.approve');
    Route::post('/reject', [StudentController::class, 'reject'])->name('application.reject');
    Route::post('/student/edit/{id}', [StudentController::class, 'update'])->name('student.edit');
    Route::post('/student/delete', [StudentController::class, 'destroy'])->name('student.delete');
    Route::get('/approved/view', [StudentController::class, 'showApproved'])->name('show.approved');
    Route::get('/rejected/view', [StudentController::class, 'showRejected'])->name('show.rejected');
    Route::get('/payments', [PaymentController::class, 'index'])->name('student.payments');
    Route::get('/payment/details/{id}', [PaymentController::class, 'show'])->name('details.show');
    Route::post('/payment/approve', [PaymentController::class, 'approvePayment'])->name('payment.approval');
    Route::get('payment/view',[PaymentController::class, 'showPayment'])->name('view.payments');


});

//Pages Route
Route::get('/about-u', function() {
    return view('pages.about-u');
});

Route::get('/consultancy', function() {
    return view('pages.consultancy');
});

Route::get('/contact', function() {
    return view('pages.contact');
});

Route::get('/courses', function() {
    return view('pages.courses');
});

Route::get('/events', function() {
    return view('pages.events');
});

Route::get('/gallery', function() {
    return view('pages.gallery');
});

Route::get('/gaming', function() {
    return view('pages.gaming');
});

Route::get('/hostel', function() {
    return view('pages.hostel');
});

Route::get('/incubation', function() {
    return view('pages.incubation');
});

Route::get('/internship', function() {
    return view('pages.internship');
});

Route::get('/mentor', function() {
    return view('pages.mentor');
});

Route::get('/services', function() {
    return view('pages.services');
});

Route::get('/working', function() {
    return view('pages.working');
});














Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
    