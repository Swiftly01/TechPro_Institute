<x-admin-layouts>
  <x-slot:title>
    view :: Appointments
  </x-slot:title>

  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"></h4>
      </div>
      <div class="card-body">
        @if(Auth::user()->user_type === 'admin')
        <h1 style="color: #105697;">Welome To Tech Pro Admin Dashboard</h1>

        @else
        <h6 style="color: #105697;">Welome {{ Auth::user()->email }}</h6>
        @endif
      </div>
    </div>
  </div>
  <div class="col mt-2">
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

  </div>



  <div class="col mt-4">
    <div class="card">
      <div style="background-color: #105697;" class="card-header  text-white">Appointment :: Details </div>
      <div class="card-body">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive text-dark">
                <table id="example" class="display" style="min-width: 845px">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Appintment Date</th>
                      <th>Appointment Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach ($appointments as $index => $appointment )
                  <tbody>
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $appointment->user->email}}</td>
                      <td>{{ $appointment->user->phone }}</td>
                      <td>{{ date('d,M Y', strtotime($appointment->appointment_date) ) }}</td>
                      <td>{{ date('h:i A', strtotime($appointment->appointment_time) ) }}</td>
                      <td>
                        @include('users.appointments.editmodal')
                        <div style="display: flex;gap:5px">

                          <button class="btn btn-success" data-toggle="modal"
                            data-target="#editModal{{ $appointment->id }}">Edit</button>

                           @include('users.appointments.deletemodal')
                          <button class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal{{ $appointment->id }}">Delete</button>
                        </div>
                        
                      </td>
                    </tr>

                  </tbody>

                  @endforeach

                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Appointment Date</th>
                      <th>Appointment Time</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>





      </div>
    </div>
  </div>


</x-admin-layouts>