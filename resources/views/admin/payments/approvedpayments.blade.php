<x-admin-layouts>
  <x-slot:title>
    Payments
  </x-slot:title>

  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
          <div class="welcome-text">
              <h4>Hi, welcome back!</h4>
              <span class="ml-1 fs-5">{{ $user->email }}</span>
          </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Payments</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
          </ol>
      </div>
  </div>

  @if(session('success'))
     <div class="alert alert-primary">

        {{ session('success') }}

     </div>
        
     @endif

     @if(session('error'))
     <div class="alert alert-danger">

        {{ session('error') }}

     </div>
        
     @endif


  <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Approved :: Payment</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>App No</th>
                            <th>Amount_due</th>
                            <th>purpose</th>
                            <th>Receipt</th>
                        </tr>
                    </thead>
                    @foreach ($payments as $index => $payment )
                    <tbody>
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $payment->student->firstname }}</td>
                          <td>{{ $payment->student->lastname }}</td>
                          <td>{{ $payment->student->app_no }}</td>
                          <td>{{ $payment->amount_due }}</td>
                          <td>{{ $payment->purpose}}</td>
                          <td> <a href="{{ asset('upload/'.$payment->receipt_url) }}" target="_blank">
                            <img style="height: 100px" src="{{ asset('upload/'.$payment->receipt_url) }}" alt="">
                          </a></td>
                       
                      </tr>
                      
                  </tbody>
                      
                    @endforeach
                   
                    <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>App No</th>
                          <th>Amount_due</th>
                          <th>purpose</th>
                          <th>Receipt</th>
                
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


  </div>

   


</x-admin-layouts>