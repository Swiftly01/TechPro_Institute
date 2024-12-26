
<x-layout>
  <x-slot:title>
    Student :: Details
  </x-slot:title>
  
  <div class="container">
    <div class="row main">
      <div class="col">
        <h1>
          <a class="text-danger home" href="{{ url('/') }}">Home</a> / 
          <a class="text-danger home" href="{{ route('application.form') }}">Application</a> / 
          <a class="text-danger home">Details</a>
        </h1>
      </div> 
    </div>
  </div> 

  <!-- Student Details -->
  <div class="container mt-5">
    <div class="card">
      <div class="card-header" style="background-color: #0A5098;">
        <h4 class="card-title text-white">Student :: Details</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <!-- Student Information -->
          <div class="col-md-8">
            <h5>Firstname: {{ $student->firstname }}</h5>
            <h5>Lastname: {{ $student->lastname }}</h5>
            <h5>Email Address: {{ $student->email }}</h5>
            <h5>Phone Number: {{ $student->phone }}</h5>
            <h5>App No: {{ $student->app_no }}</h5>
            <h5>Course: {{ $student->course->name }}</h5>
          </div>

          <!-- Student Image -->
          <div class="col-md-4 mt-3 mt-md-0 d-flex justify-content-md-end">
            <img class="img-fluid" style="max-height: 200px; width: 200px;" src="{{ asset('upload/' . $student->image_url) }}" alt="Student Image">
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Payment Details -->
@if(isset($payments) && $payments)
  <div class="container mt-5">
    <div class="card">
      <div class="card-header" style="background-color: #0A5098;">
        <h4 class="card-title text-white">Payment :: Details</h4>
      </div>
      <div class="card-body">
        <!-- Responsive Table Wrapper -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Payment Reference</th>
                <th scope="col">Receipt</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
              @php $totalAmount = 0 @endphp
              @foreach ($payments as $index => $payment) 
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ date('d/m/y', strtotime($payment->created_at)) }}</td>
                  <td>{{ $payment->schedule->desc }}</td>
                  <td>{{ $payment->payment_reference }}</td>
                  <td>
                    <a href="{{ asset('upload/' . $payment->receipt_url) }}" target="_blank">
                      <img class="img-fluid" style="height: 100px;" src="{{ asset('upload/' . $payment->receipt_url) }}" alt="">
                    </a>
                  </td>
                  <td>&#8358;{{ number_format($payment->amount) }}</td>
                </tr>
                @php $totalAmount += $payment->amount; @endphp
              @endforeach
              <tr>
                <td colspan="5" class="text-right"><strong>Total Amount Paid</strong></td>
                <td><strong>&#8358;{{ number_format($totalAmount) }}</strong></td>
              </tr>
              @if( isset($balanceDue) && $balanceDue > 0)
                <tr>
                  <td colspan="5" class="text-right"><strong>Balance Remaining</strong></td>
                  <td><strong>&#8358;{{ number_format($balanceDue) }}</strong></td>
                </tr>
                <tr>
                  <td colspan="9"><strong><a href="{{ url('/outstanding') }}">proceed to pay balance</a></strong></td>
                </tr>
              @endif

              @if($student->course_id === 8)
              <tr>
                <td colspan="9"><strong><a  href="{{ url('/outstanding') }}">proceed to pay for a new month</a></strong></td>
              </tr>
                
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endif



   
   </div>
   
  
  
  </x-layout>