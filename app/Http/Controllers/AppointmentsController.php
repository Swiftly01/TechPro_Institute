<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {    
        $userId = Auth::user()->id;
        $appointments = Appointment::with('user')->where('user_id', $userId)->get();

        return view('users.appointments.view', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required', 'date_format:H:i'],

        ]);

        $appointment_exists = Appointment::where('appointment_date', $request->appointment_date)
        ->where('appointment_time', $request->appointment_time)
        ->exists();

        if($appointment_exists) {

            return redirect()->back()->with('error', 'This appointment slot is already booked');
        }

        $userId = Auth::user()->id;
        
        $details['user_id'] = $userId;
        $details['appointment_date'] = $request->appointment_date;
        $details['appointment_time'] = $request->appointment_time;

        Appointment::create($details);

        return redirect()->back()->with('success', 'Appointment booked successfully');

    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'appointment_id' => ['required', 'exists:appointments,id'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required', 'date_format:H:i'],

        ]);

        $appointment = Appointment::find($request->appointment_id);

        if(!$appointment)  {
            return redirect()->back()->with('error', 'Invalid appointment details');
        }

        $appointment_exists = Appointment::where('appointment_date', $request->appointment_date)
        ->where('appointment_time', $request->appointment_time)
        ->exists();

        if($appointment_exists) {

            return redirect()->back()->with('error', 'This appointment slot is already booked');
        }

        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_time = $request->appointment_time;
        $appointment->save();


        return redirect()->back()->with('success', 'Appointment details  updated successfully');


        


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
        $appointment = Appointment::find($id);

        if(!$appointment)  {

            return redirect()->back()->with('error', 'Invalid appointment details');
        }

        $appointment->delete();

        return redirect()->back()->with('success', 'Appointments canceled successfully');


    }
}
