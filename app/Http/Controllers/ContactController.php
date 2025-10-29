<?php

namespace App\Http\Controllers;

use App\Mail\ContacUsMail;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request  $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|unique:contacts',
            'description' => 'required|string|max:300'

        ]);

       $contact = Contact::create($validate);

       if($contact) {

        $admin = User::first();
    
        $adminEmail = $admin->email;
        $adminName = $admin->name;
  
    
        Mail::to($adminEmail)->send(new ContacUsMail ($adminName, $contact->email, $contact->description));


        return redirect()->back()->with('success', 'Your Request Has Been Sent Successfully');

      

       }

       return redirect()->back()->with('errror', 'Sorry, Your Request Could Not Be Completed !!');



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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
