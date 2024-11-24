<?php

namespace App\Http\Controllers;

use App\Mail\AdminApplicationNotification;
use App\Mail\AdminRejectionNotification;
use App\Mail\ApplicationApprovalMail;
use App\Mail\ApplicationMailNotification;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Models\Course;
use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Student;
use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        return view('application.form', compact('courses'));
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
        $validate = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'course_id' => 'required|integer|exists:courses,id',
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


       $student =  Student::create($validate);

       if($student) {

        return redirect()->route('application.mail', ['id' => $student->id]);


       }


    
    }

    public function applicationMailNotification($id) {

        $adminUser = User::first();
        $adminEmail = $adminUser->email;
        $adminName = $adminUser->name;


        $student = Student::with('course')->whereNull('app_no')->find($id);

        if($student) {

        $firstName = $student->firstname;
        $lastName  = $student->lastname;
        $course =  $student->course->name;
        $phone = $student->phone;
        $email = $student->email;
        $id = $student->id;
       
        Mail::to($email)->send(new ApplicationMailNotification($firstName, $lastName, $course, $phone, $email, $id));


        return view('application.message', compact('student'));

        } else {


            $client = Client::find($id);

            if($client) {

                return view('application.message', compact('client'));
            }
        }
        

    }

    public function studentDetails(Request $request) {

        $validate = $request->validate([
            'app_no' => 'required'

        ]);


        $student = Student::with('course')->where('app_no', $request->input('app_no'))->first();
    
        if(!$student) {

            return redirect()->back()->with('error', 'Invalid Application Number');

        }


        $payments = Payment::with('schedule')
                            ->where('student_id', $student->id)
                            ->where('status', 'success')
                            ->get();

        if($payments->isEmpty()) {

            return view('admin.students.details', compact('student'));
        }

        $schedule_id = $student->course_id;

        $schedule  = PaymentSchedule::where('course_id', $schedule_id)->first();

        $amountDue = $schedule->amount;

        $paid = 0;
    

        foreach($payments as $payment ) {

    

            $paid += $payment->amount;


        }

        $balanceDue = $amountDue - $paid;

        return view('admin.students.details', ['student' => $student,
                                                'paid' => $paid,
                                                 'balanceDue' => $balanceDue,
                                                 'amountDue' => $amountDue,
                                                 'payments' => $payments
                                                 
                                        
                                                
                                                ]);
    

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student, Request $request) 
    {
        $students = Student::with('course')->get();

        $user = $request->user();

        if(!$students->isEmpty()) {

            return view('admin.students.view', ['students' => $students, 'user' => $user]);
        }
    }

/*

    public function pending(Request $request) {

        $pendingStudents = Student::where('status', 0)->get();
        $approvedStudents = Student::where('status', 1)->get();
        $rejectedStudents = Student::where('status', -1)->get();

        $adminUser = $request->user();

        return view('admin.students.approve', [
            'pendingStudents' => $pendingStudents,
            'approvedStudents' => $approvedStudents,
            'rejectedStudents' => $rejectedStudents,
             'user' => $adminUser,
            
        ]);



            
    }

    */

    /*
    public function approve(Request $request) {

       $student_id = $request->input('student_id');

       $student = Student::find($student_id);

       if($student) {


       $year = date('Y');

       $app_no = Student::genAppNo($year);

       $status = 1;

       $student->status = $status;
       $student->app_no = $app_no;    

       $student->save();

       
       $firstName = $student->firstname;
       $lastName = $student->lastname;
       $email = $student->email;
       $course = $student->course->name;
       $phone = $student->phone;
       $app_no = $student->app_no;




       Mail::to($email)->send(new ApplicationApprovalMail ($firstName, $lastName, $email, $course, $phone, $app_no));

       return redirect()->back()->with('success', 'Student Application Approved Successfully');

       }

       return redirect()->back()->with('error', 'Student Application Approval Failed');

    }
    */

    /*

    public function reject(Request $request) {

        $student_id = $request->input('student_id');
        $reason = $request->input('reject-reason');

        $student = Student::find($student_id);

        if($student) {

            $firstName = $student->firstname;
            $lastName = $student->lastname;
            $email = $student->email;
            $course = $student->course->name;
            $phone = $student->phone;

            $status = 0;

            $student->status = $status;

            $student->save();

            Mail::to($email)->send(new AdminRejectionNotification ($firstName, $lastName, $email, $course, $phone, $reason));

            return redirect()->back()->with('success', 'Student Application Rejected Successfully');

        }

        return redirect()->back()->with('error', 'Student Application Approval Failed');

    }

    */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {     
         $validate = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:students',
            'phone' => 'required', 

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
                return redirect()->back()->with('error', 'passport upload failed');
            }

        }


        $student =  Student::where('id', $id)->first();

        $student->update($validate);


        if($student) {
 
         return redirect()->back()->with('success', 'Student Record Updated succesfully');
 
 
        }
 

    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validate = $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        $id = $request->input('student_id');
        $student = Student::find($id);

        $student->delete(); 

        if($student) {
            return redirect()->back()->with('success', 'Student Record Deleted Successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong!!');






    }
}
