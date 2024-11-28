
<x-layout>
  <x-slot:title>
    Student :: Details
  </x-slot:title>
  
  <div class="container">
    <div class="row main">
      <div class="col">
        <h1>
          <a class="text-danger home" href="{{ url('/') }}">Home</a> / 
          <a class="text-danger home" href="">Application</a> / 
          <a class="text-danger home" href="">Details</a>
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
            <h4>Firstname: {{ $student->firstname }}</h4>
            <h4>Lastname: {{ $student->lastname }}</h4>
            <h4>Email Address: {{ $student->email }}</h4>
            <h4>Phone Number: {{ $student->phone }}</h4>
            <h4>App No: {{ $student->app_no }}</h4>
            <h4>Course: {{ $student->course->name }}</h4>
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
                  <td><strong><a href="{{ url('/outstanding') }}">proceed to pay balance</a></strong></td>
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