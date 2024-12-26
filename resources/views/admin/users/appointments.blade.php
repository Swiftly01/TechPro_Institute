<x-admin-layouts>
  <x-slot:title>
    view :: Appointments
  </x-slot:title>

  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h4>Hi, welcome back!</h4>
          <span class="ml-1 fs-5">{{ Auth::user()->email }}</span>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Appointments</a></li>
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
          <h4 class="card-title">Details</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Service Type</th>
                  <th>Booked Date</th>
                  <th>Booked Time</th>

                </tr>
              </thead>
              <tbody>

                @foreach ($users as $index => $user )

                @if ($user->appointments->isNotEmpty())

                @foreach ($user->appointments as $appointment )

                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td> {{ $user->phone}}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->service_type}}</td>
                  <td>{{ date('d-M-Y', strtotime($appointment->appointment_date)) }}</td>
                  <td>{{ date('h:i A', strtotime($appointment->appointment_time)) }}</td>
                </tr>

                @endforeach

                @endif


                @endforeach
              </tbody>

              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Service Type</th>
                  <th>Booked Date</th>
                  <th>Booked Time</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>




</x-admin-layouts>