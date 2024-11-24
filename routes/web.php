<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;
use App\Models\Client;
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
Route::post('/outstanding/payment', [PaymentController::class, 'updateOutstandingPayment'])->name('outstanding.upload');

Route::get('/outstanding', function() {
    return view('application.outstanding');
});

Route::get('/verify/details', function() {

    return view('application.checkpayment');

});

Route::get('/payment/success', function() {
    return view ('payments.success');

})->name('payments.success');


Route::get('/payment/{id}', [PaymentController::class, 'loadPage'])->name('payment.show');
Route::post('/payment/upload', [PaymentController::class, 'store'])->name('payment.upload');

Route::get('/services/application', [ClientController::class, 'index'])->name('sevices.register');
Route::post('/services/register', [ClientController::class, 'create'])->name('services.store');
Route::get('/services/payment/{id}', [ClientController::class, 'loadSevicePayments'])->name('services.payment');
Route::post('/services/payment/upload', [PaymentController::class, 'uploadServicePayments'])->name('service.upload');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('/admin')->group(function() {
    Route::get('/students', [StudentController::class, 'show'])->name('show.students');
   // Route::get('/pending/view', [StudentController::class, 'pending'])->name('application.pending');
  //  Route::post('/approve', [StudentController::class, 'approve'])->name('application.approve');
    Route::post('/student/edit/{id}', [StudentController::class, 'update'])->name('student.edit');
    Route::post('/student/delete', [StudentController::class, 'destroy'])->name('student.delete');
   // Route::get('/approved/view', [StudentController::class, 'showApproved'])->name('show.approved');
   // Route::get('/rejected/view', [StudentController::class, 'showRejected'])->name('show.rejected');
    Route::get('/payments', [PaymentController::class, 'index'])->name('student.payments');
    Route::get('/payment/details/{id}', [PaymentController::class, 'show'])->name('details.show');
    Route::get('/payment/services/details/{id}', [PaymentController::class, 'showServiceDetails'])->name('services.show');
    Route::post('/payment/approve', [PaymentController::class, 'approvePayment'])->name('payment.approval');
    Route::post('/payment/services/approve', [PaymentController::class, 'serviceApprovePayment'])->name('servicespayment.approval');
    Route::post('/payment/services/reject', [PaymentController::class, 'serviceRejectPayment'])->name('servicespayment.reject');
    Route::post('/reject', [PaymentController::class, 'rejectPayment'])->name('payment.reject');
    Route::get('payment/active',[PaymentController::class, 'showApprovedPayment'])->name('view.active.payments');
    Route::get('payment/failed',[PaymentController::class, 'showRejectedPayment'])->name('view.failed.payments');
    Route::get('payment/service/active',[PaymentController::class, 'showApprovedServicePayment'])->name('view.active.servicePayments');
    Route::get('payment/service/failed',[PaymentController::class, 'showRejectedServicePayment'])->name('view.failed.servicePayments');
    Route::get('/payment/service', [PaymentController::class, 'showServicePayment'])->name('view.service.payments');



}); 

//Pages Route
Route::get('/about-u', function() {
    return view('pages.about-u');
});

// Route::get('/services/register', function() {
//     return view('application.services');
// });

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
    