<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\PaymentSchedule;
use Illuminate\Http\Request;

class ClientController extends Controller
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


       $client =  Client::create($validate);

       if($client) {

        return redirect()->route('application.client', ['id' => $client->id]);


       }
    }


    public function clientMessage($id) {


        $client = Client::find($id);

            if($client) {

                return view('application.message', compact('client'));
            }

        
    }


    public function loadSevicePayments($id) {

        $client = Client::find($id);

        if($client) {

          $service = $client->service_type;

          $schedule = PaymentSchedule::where('type', $service)->first();
          
          if($schedule) {

            return view('payments.paymentServices', compact('schedule','client'));
          }


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
