<?php

namespace App\Http\Controllers;

use App\Mail\BarbingServiceMail;
use App\Models\Appointment;
use App\Models\PaymentSchedule;
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
        $schedules = PaymentSchedule::where('type', '!=', '0')->get();

        return view('application.services', compact('schedules'));
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
