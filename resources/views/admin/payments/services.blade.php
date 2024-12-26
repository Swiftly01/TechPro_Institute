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
            <h4 class="card-title">Basic Datatable</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Amount_due</th>
                            <th>purpose</th>
                            <th>Receipt</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($payments as $index => $payment )
                    <tbody>
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $payment->user->firstname }}  {{ $payment->user->lastname }}</td>
                          <td> {{ $payment->start_date }}</td>
                          <td>{{ $payment->end_date }}</td>
                          <td>{{ $payment->amount_due}}</td>
                          <td>{{ $payment->purpose}}</td>
                          <td> <a href="{{ asset('upload/'.$payment->receipt_url) }}" target="_blank">
                            <img style="height: 100px" src="{{ asset('upload/'.$payment->receipt_url) }}" alt="">
                          </a></td>
                          <td>
                            @include('admin.payments.servicesApproval')
                              <div style="display: flex;gap:5px">
                              <a href="{{ route('services.show',['id' => $payment->id]) }}" class="btn btn-primary" >View Details</a>
                              
                              <button class="btn btn-success"data-toggle="modal" data-target="#basicModalServiceApprove{{ $payment->id }}" >Approve</button>

                             @include('admin.payments.servicesReject') 
                              <button class="btn btn-danger"  data-toggle="modal" data-target="#basicModalServiceReject{{ $payment->id }}" >Reject</button>
                              </div>
                              
                            

                          </td>
                      </tr>
                      
                  </tbody>
                      
                    @endforeach
                   
                    <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Amount_due</th>
                          <th>purpose</th>
                          <th>Receipt</th>
                          <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


  </div>

   


</x-admin-layouts>