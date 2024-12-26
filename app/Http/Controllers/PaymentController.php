<?php

namespace App\Http\Controllers;

use App\Mail\AdminPaymentNotification;
use App\Mail\PaymentApprovalMail;
use App\Mail\PaymentRejectionNotification;
use App\Mail\ServicePaymentMail;
use App\Mail\servicesRejectMail;
use App\Models\Client;
use App\Models\Payment;
use App\Models\User;
use App\Models\PaymentSchedule;
use App\Models\ServiceSchedule;
use App\Models\Student;
use App\Models\UserService;
use Database\Seeders\ServicesScheduleSeeder;
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
        $payments = Payment::with('student')
                             ->where('status', $status )
                             ->whereNotNull('student_id')
                             ->whereNotNull('schedule_id')
                             ->get();

        $user = $request->user();
        return  view('admin.payments.uploads', ['payments' => $payments, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    

    public function updateOutstandingPayment(Request $request) {
      $request->validate([
          'input' => 'required|string',
          'receipt_url' => 'required|file|mimes:jpeg,png,pdf|max:2048',
      ]);
  
      $input = $request->input('input');
      
      $student = Student::where('app_no', $input)->first();
   //   $client = Client::where('service_no', $input)->first();
  
      if (!$student) {
          return redirect()->back()->with('error', 'Invalid details provided.');
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
  
  
      
      if ($student) {
          $courseId = $student->course_id;
          $schedule = PaymentSchedule::where('course_id', $courseId)->first();
  
          if (!$schedule) {
              return redirect()->back()->with('error', 'No payment schedule found for the course.');
          }

          $year = date('Y');
          $type = 'TXN';
    
          $txn = Student::genRefNo($year, $type);
  
          Payment::create([
              'receipt_url' => $receiptName,
              'student_id' => $student->id,
              'amount_due' => $schedule->amount,
              'purpose' => $schedule->purpose,
              'schedule_id' => $courseId,
              'transaction_reference' => $txn,
          ]);
  
          $student->update([
              'payment_option' => $request->input('payment_option'),
              'terms' => $request->input('terms'),
          ]);
  
          $admin = User::first();
    
          $adminEmail = $admin->email;
          $adminName = $admin->name;
    
      
        Mail::to($adminEmail)->send(new AdminPaymentNotification ($adminName));
          return redirect()->route('payments.success');
      }
  
      // if ($client) {
      //     $serviceType = $client->service_type;
      //     $paymentSchedule = PaymentSchedule::where('type', $serviceType)->first();
  
      //     if (!$paymentSchedule) {
      //         return redirect()->back()->with('error', 'No payment schedule found for the service.');
      //     }
  
      //     Payment::create([
      //         'receipt_url' => $receiptName,
      //         'client_id' => $client->id,
      //         'amount_due' => $paymentSchedule->amount,
      //         'purpose' => $paymentSchedule->purpose,
      //     ]);
  
      //     $admin = User::first();
    
      //     $adminEmail = $admin->email;
      //     $adminName = $admin->name;
    
      
      //   Mail::to($adminEmail)->send(new AdminPaymentNotification ($adminName));
      //     return redirect()->route('payments.success');
      // }
  
      return redirect()->back()->with('error', 'Failed to process payment.');
  }


  public function uploadRevalidatePayments(Request $request) {

    $inv = $request->input('inv');

    $user = User::where('app_service_no', $inv)->first();
    
    if(!$user) {

      return redirect()->back()->with('error', 'No previous payment or Invalid Service No');
    }

    $validate = $request->validate([
      'receipt_url' => 'required|file|mimes:jpg,jpeg,png,pdf|max:1024',
      'start_date' => 'required|date|after_or_equal:today',
      'end_date' => 'required|date|after:start_date',
      'number_of_people' => 'required|integer|min:1',
      'amount_due' => 'required|numeric|min:0'
      
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

     
    $service_type = $user->service_type;

    $schedule = PaymentSchedule::where('type', $service_type)->first();

    if($schedule) {

      $year = date('Y');
      $type = 'TXN';

      $txn = Student::genRefNo($year, $type);

     $payment =  Payment::create([
       'receipt_url' => $receiptName,
       'amount_due' => $request->input('amount_due'),
       'start_date' => $request->input('start_date'),
       'end_date' => $request->input('end_date'),
       'number_of_people' => $request->input('number_of_people'),
      // 'amount' => $schedule->amount,
      'transaction_reference' => $txn,
       'user_id' => $user->id,
       'purpose' => $schedule->purpose
     ]);

     $admin = User::first();

     $adminEmail = $admin->email;
     $adminName = $admin->name;

   

 
       Mail::to($adminEmail)->send(new AdminPaymentNotification ($adminName));

       return redirect()->route('payments.success');



       }



      






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

      $payment_option = $request->payment_option;


      if($student->course_id === 8 && $payment_option === null) {

        $payment_option = 'one_time';

        $request->merge(['payment_option' => $payment_option]);

       
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

      $year = date('Y');
      $type = 'TXN';

      $txn = Student::genRefNo($year, $type);

        $payment =  Payment::create([
            'receipt_url' => $receiptName,
            'student_id' => $student->id,
            'amount_due' => $schedule->amount,
            'purpose' => $schedule->purpose,
            'schedule_id' => $course_id,
            'transaction_reference' => $txn,
    
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


    public function uploadServicePayments(Request $request) {

      $userId = $request->input('id');
  
      $user = User::find($userId);

      if(!$user) {

        return  redirect()->back()->with('error', 'Invalid  Details');
      }

      $validate = $request->validate([
        'receipt_url' => 'required|file|mimes:jpg,jpeg,png,pdf|max:1024',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after:start_date',
        'number_of_people' => 'required|integer|min:1',
        'amount_due' => 'required|numeric|min:0'
        
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

      
     $service_type = $user->service_type;

     $schedule = PaymentSchedule::where('type', $service_type)->first();

     if($schedule) {
      $year = date('Y');
      $type = 'TXN';

      $txn = Student::genRefNo($year, $type);

      $payment =  Payment::create([
        'receipt_url' => $receiptName,
        'amount_due' => $request->input('amount_due'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
        'number_of_people' => $request->input('number_of_people'),
       // 'amount' => $schedule->amount,
         'transaction_reference' => $txn,
        'user_id' => $user->id,
        'purpose' => $schedule->purpose
      ]);

      $admin = User::first();

      $adminEmail = $admin->email;
      $adminName = $admin->name;

    

  
        Mail::to($adminEmail)->send(new AdminPaymentNotification ($adminName));

        return redirect()->route('payments.success');



        }
  




    }





    

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $studentId = $id;
        $user = $request->user();
        
        $student = Student::with('course')->where('id', $studentId)->first();

        
        if($student) {

          return view('admin.payments.details', [ 'user' => $user, 'student' => $student]);
          
        } 
        
    }


    public function showServiceDetails(Request $request, $id) {

      $paymentId = $id;

      $user = $request->user();

      $payment = Payment::with('user')->where('id', $paymentId)->first();
      if($payment)  {

        return view('admin.payments.details', [ 'user' => $user, 'payment' => $payment]);


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
      $type = 'APP';

      $app_no = Student::genRefNo($year, $type);

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


    public function serviceApprovePayment(Request $request) {

      
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



      $userId = $payment->user_id;

      $user = User::find($userId);

      $year = date('Y');

      $type = 'INV';

      $inv = Student::genRefNo($year, $type);
 
      if(is_null($user->service_no)) {

        $user->app_service_no = $inv;
        $user->save();
      }

      $payment->save();

      Mail::to($user->email)->send( new ServicePaymentMail ($user->firstname, $user->lastname, $user->email, $user->service_type, $user->phone, $inv, $payment->payment_reference, $payment->amount));


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

  public function serviceRejectPayment(Request $request) {

    $payment_id = $request->input('payment_id');
      $reason = $request->input('reject-reason');

      $payment = Payment::with('user')->find($payment_id);


      if($payment) {

        $firstName = $payment->user->firstname;
        $lastName = $payment->user->lastname;
        $email = $payment->user->email;
        $course = $payment->user->service_type;
        $phone = $payment->user->phone;

        $status = 'failed';

        $payment->status = $status;

        $payment->save();

        Mail::to($email)->send(new servicesRejectMail ($firstName, $lastName, $email, $course, $phone, $reason));

        return redirect()->back()->with('success', 'Payment  Rejected Successfully');

    }

    return redirect()->back()->with('error', 'Payment Rejection Failed');

      


  }


    public function showApprovedPayment(Request  $request) {

      $approvedPayments = Payment::with('student')->where('status','success')->whereNotNull('student_id')->get();
      
      $user = $request->user();

      return view('admin.payments.approved', [
        'approvedPayments' => $approvedPayments,
         'user' => $user
      ]);
    }

    public function showApprovedServicePayment(Request $request) {

      $approvedPayments = Payment::with('user')->where('status','success')->whereNull('student_id')->get();
      
      $user = $request->user();

      return view('admin.payments.serviceApprovedPayments', [
        'approvedPayments' => $approvedPayments,
         'user' => $user
      ]);

    }

    public function showRejectedServicePayment(Request $request) {

      
      $rejectedPayments = Payment::with('user')->where('status', 'failed')->whereNull('student_id')->get();

      $user = $request->user();

      return view('admin.payments.serviceRejectedpayments', [
        'rejectedPayments' => $rejectedPayments,
         'user' => $user
      ]);

    }




    public function showRejectedPayment(Request  $request) {

     
      $rejectedPayments = Payment::with('student')->where('status', 'failed')->whereNotNull('student_id')->get();

      $user = $request->user();

      return view('admin.payments.rejected', [
        'rejectedPayments' => $rejectedPayments,
         'user' => $user
      ]);
    }




    public function showServicePayment(Request $request) {

      $payments = Payment::with('user')->whereNotNull('user_id')->whereNull('status')->get();

      $user = $request->user();

      return view('admin.payments.services', compact('payments', 'user'));

      

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
