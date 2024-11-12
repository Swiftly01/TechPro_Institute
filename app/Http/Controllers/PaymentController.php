<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   public function loadPage(Request $request) {

    $app_no = $request->query('app_no');
    
    return view('payments.payment', ['app_no' => $app_no]);


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
      $app_no =  $request->input('app_no');

      $student = Student::where('app_no', $app_no)->first();

     // dd($app_no);


      if(!$student) {

        return  redirect()->back()->with('error', 'Invalid Application Number');
      }


      $validate = $request->validate([
        'receipt_url' => 'required|image|max:1024',
      ]);


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


          return redirect()->back()->with('success', 'Payment Receipt Uploaded Successfully');
    
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

        if($payment) {

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

      if($payment) {

       $status = 'success';

      $payment->amount = $request->input('amount');
      $payment->payment_reference = $request->input('reference');
      $payment->status = $status;

      $payment->save();


      return redirect()->back()->with('success', 'Payment Record Updated Successfully');

      }


      return redirect()->back()->with('error', 'Payment Update Failed!!');


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
