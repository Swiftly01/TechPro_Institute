<?php

namespace App\Http\Controllers;

use App\Mail\AdminPaymentNotification;
use App\Mail\PaymentApprovalMail;
use App\Mail\PaymentRejectionNotification;
use App\Models\Payment;
use App\Models\User;
use App\Models\PaymentSchedule;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   public function loadPage(Request $request ,$id) {

    $student_id = $request->id;

    $student = Student::find($student_id);
 
    $course_id = $student->course_id;

    $schedule = PaymentSchedule::where('course_id', $course_id)->first();

    $amount_due = $schedule->amount;

    return view('payments.payment', ['id' => $student_id, 'student' => $student, 'amount_due' => $amount_due]);


   }

    public function index(Request $request)
    {   
        $status = null;
        $payments = Payment::with('student')->where('status', $status )->get();
        $user = $request->user();
        return  view('admin.payments.view', ['payments' => $payments, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
     $student_id = $request->input('id');
  
     $student = Student::find($student_id);

      if(!$student) {

        return  redirect()->back()->with('error', 'Invalid Student Details');
      }

    
      $validate = $request->validate([
        'receipt_url' => 'required|image|max:1024',
        'payment_option' => 'required|in:one_time,installments',
        
      ]);

      if ($request->payment_option === 'installments' && !$request->has('terms')) {
        return redirect()->back()->withErrors(['terms' => 'You must accept the terms for installments.']);
    }
    


  


      if($request->hasFile('receipt_url')) {

        $receipt = $request->File('receipt_url');
        $rad =  mt_rand(1000, 9999);

         
        $receiptName =  md5($receipt->getClientOriginalName()) . $rad . '.' . $receipt->getClientOriginalExtension();


        $receipt->move(public_path('upload/'), $receiptName);
        $upload = 'upload/' . $receiptName;

        if ($upload) {
            $validate['receipt_url'] = $receiptName;
        } else {
            return redirect()->back()->with('error', 'Receipt Upload Failed');
        }

      }

     $course_id = $student->course_id;

     $schedule = PaymentSchedule::where('course_id', $course_id)->first();

     if($schedule) {

        $payment =  Payment::create([
            'receipt_url' => $receiptName,
            'student_id' => $student->id,
            'amount_due' => $schedule->amount,
            'purpose' => $schedule->purpose,
            'schedule_id' => $course_id,
    
          ]);


          $student->payment_option = $request->input('payment_option');
          $student->terms = $request->input('terms');

          $student->save();


          $admin = User::first();

          $adminEmail = $admin->email;
          $adminName = $admin->name;
    
      
        Mail::to($adminEmail)->send(new AdminPaymentNotification ($adminName));

        return redirect()->route('payments.success');

    
     }

     return redirect()->back()->with('error', 'Payment Receipt Upload Failed');


    }


    

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $paymentId = $id;
        $user = $request->user();
        $payment  = Payment::find($paymentId);
        $student = Student::with('course')->where('id', $paymentId)->first();

        if($payment || $student) {

          return view('admin.payments.details', ['payment' => $payment, 'user' => $user, 'student' => $student]);
        }
    }

    public function approvePayment(Request $request) {

      $validate = $request->validate([
        'payment_id' => 'required|exists:payments,id',
        'amount' => 'required|numeric',
        'reference' => 'required',

      ]);


      $id = $request->input('payment_id');

      $payment = Payment::find($id);

      if(!$payment) {

        return redirect()->back()->with('error', 'payment not found');

      }

      if($payment) {

       $status = 'success';

      $payment->amount = $request->input('amount');
      $payment->payment_reference = $request->input('reference');
      $payment->status = $status;

      $student_id = $payment->student_id;
      
      $student = Student::find($student_id);

      $year = date('Y');

      $app_no = Student::genAppNo($year);

      if(empty($student->app_no)) {

        $student->app_no = $app_no;
        $student->save();
      }

     
      $payment->save();

      Mail::to($student->email)->send( new PaymentApprovalMail ($student->firstname, $student->lastname, $student->email, $student->course->name, $student->phone, $student->app_no, $payment->payment_reference, $payment->amount));


      return redirect()->back()->with('success', 'Payment Record Updated Successfully');

      }


      return redirect()->back()->with('error', 'Payment Update Failed!!');


    }

    public function rejectPayment(Request $request) {

      $payment_id = $request->input('payment_id');
      $reason = $request->input('reject-reason');

      $payment = Payment::with('student')->find($payment_id);

      if($payment) {

          $firstName = $payment->student->firstname;
          $lastName = $payment->student->lastname;
          $email = $payment->student->email;
          $course = $payment->student->course->name;
          $phone = $payment->student->phone;

          $status = 'failed';

          $payment->status = $status;

          $payment->save();

          Mail::to($email)->send(new PaymentRejectionNotification ($firstName, $lastName, $email, $course, $phone, $reason));

          return redirect()->back()->with('success', 'Payment  Rejected Successfully');

      }

      return redirect()->back()->with('error', 'Payment Rejection Failed');

  }


    public function showApprovedPayment(Request  $request) {

      $approvedPayments = Payment::with('student')->where('status','success')->get();
      

      $user = $request->user();

      return view('admin.payments.approvedpayments', [
        'approvedPayments' => $approvedPayments,
         'user' => $user
      ]);
    }

    public function showRejectedPayment(Request  $request) {

     
      $rejectedPayments = Payment::with('student')->where('status', 'failed')->get();

      $user = $request->user();

      return view('admin.payments.rejectedpayments', [
        'rejectedPayments' => $rejectedPayments,
         'user' => $user
      ]);
    }

    


    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
