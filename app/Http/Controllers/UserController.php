<?php

namespace App\Http\Controllers;

use App\Mail\BarbingServiceMail;
use App\Models\Appointment;
use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = PaymentSchedule::where('type', '!=', 'course')->get();

        return view('application.servicesForm', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email', 'unique:users,email', 'max:255'],
            'phone' => ['required', 'regex:/^(080|091|090|070|081)[0-9]{8}$/'],
            'password' =>  ['required', 'string', 'min:8'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required', 'date_format:H:i'],
        ]);



      $appointment_exists = Appointment::where('appointment_date', $request->appointment_date)
                                ->where('appointment_time', $request->appointment_time)
                                ->exists();
      

      if($appointment_exists) {

        return redirect()->back()->with('error', 'This appointment slot is already booked');

      } 

      $details['email'] = $request->email;
      $details['phone'] = $request->phone;
      $details['password'] = Hash::make($request->password);
      $details['service_type'] = 'barbing';
      $appointment_details['appointment_date'] = $request->appointment_date;
      $appointment_details['appointment_time'] = $request->appointment_time;

      try {

        DB::beginTransaction();

     $user  =  User::create($details);
     
     $appointment_details['user_id'] = $user->id;
     $booking = Appointment::create($appointment_details);

        try {

            Mail::to($request->email)->send(new BarbingServiceMail($request->email, $request->phone));

        } catch (Exception $email_exception) {

            DB::rollBack();

            $err_message = $email_exception->getMessage();

            Log::error($err_message);

            return redirect()->back()->with('error', 'An error occured while processing notification, kindly try again later!!');

        }

        DB::commit();

        return   view('application.message', compact('user'));


      } catch(Exception $err){

        $err_message = $err->getMessage();

        Log::error($err_message);

        DB::rollBack();

        return redirect()->back()->with('error', 'Something went wrong when processing your application, kindly try again later!!');

        
      }






    }

    public function storeClientDetails(Request $request)
    {
        $validate = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:clients',
            'phone' => 'required',
            'service_type' => 'required|string|exists:payment_schedules,type',
            'image_url' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:1024', 
        ]);


        if($request->hasFile('image_url')) {

            $passport = $request->File('image_url');
            $rad = mt_rand(1000, 9999);

            $passportName = md5($passport->getClientOriginalName()) . $rad . '.' .  $passport->getClientOriginalExtension();

            $passport->move(public_path('upload/'), $passportName);
            $upload = 'upload/' . $passportName;

            if ($upload) {
                $validate['image_url'] = $passportName;
            } else {
                return redirect()->back()->with('error passport upload failed');
            }

        }


       $user =  User::create($validate);

       if($user) {

        return redirect()->route('application.user', ['id' => $user->id]);


       }
    }

    public function userMessage($id) {


        $userService = User::find($id);

            if($userService) {

                return view('application.message', compact('userService'));
            }

        
    }

    public function loadSevicePayments($id) {

        $user = User::find($id);

        if($user) {

          $service = $user->service_type;

          $schedule = PaymentSchedule::where('type', $service)->first();
          
          if($schedule) {

            return view('payments.paymentServices', compact('schedule','user'));
          }


        }

    }

    public function getUsers() 
    {
        $users = User::where('user_type', 'clients')->get();


        return view('admin.users.view', compact('users'));
    }


    public function getUsersAppointments() {

        $users = User::with('appointments')
                              ->where('user_type', 'clients')
                              ->whereNotNull('service_type')
                              ->where('service_type',  'barbing')
                              ->get();

        

        return view('admin.users.appointments', compact('users'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'email' => ['required', 'unique:users,email', 'string'],
            'phone' => ['required', 'regex:/^(080|091|090|070|081)[0-9]{8}$/'],
            'receipt_url' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:1024',
        ]);

    try{

        DB::beginTransaction();

        $user = User::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'service_type' => 'barbing',
        ]);

          $paymentData = [];
          
        if($request->hasFile('receipt_url')) {

            $passport = $request->File('receipt_url');
            $rad = mt_rand(1000, 9999);

            $passportName = md5($passport->getClientOriginalName()) . $rad . '.' .  $passport->getClientOriginalExtension();

            $passport->move(public_path('upload/'), $passportName);
            $upload = 'upload/' . $passportName;

            $paymentData['receipt_url'] = $passportName;
            
        }

        $year = date('Y');
        $txn = Student::genRefNo($year, 'TXN');
        $inv = Student::genRefNo($year, 'INV');

        $paymentData['user_id'] = $user->id;
        $paymentData['transaction_reference'] = $txn;
        $paymentData['invoice_no'] = $inv;
        $paymentData['purpose'] = 'services';
        $paymentData['amount_due'] = 0.00;

        Payment::create($paymentData);

        DB::commit();

        return redirect()->back()->with('success', 'Payment uploaded successfully');

    } catch(Exception $err) {

        DB::rollBack();

        log::error($err->getMessage());

        return redirect()->back()->with('error', 'Payment Upload could not be proccessed, kindly contact our support team');

    }







    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
