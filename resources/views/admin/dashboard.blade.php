<x-admin-layouts>
  <x-slot:title>
    Dashboard
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
  
  @if(Auth::user()->user_type === 'clients')

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
    
 
  <div class="col-lg-6 col-md-12  mt-4">
    <div class="card">
      <div style="background-color: #105697;" class="card-header  text-white">User :: Details </div>
      <div class="card-body">
        <h6>Email : {{ Auth::user()->email }}</h6>
        <h6>Phone Number: {{ Auth::user()->phone }}</h6>
        
        @include('users.appointments.modalform')
        <button class="btn btn-primary btn-sm mt-3" data-toggle="modal"
        data-target="#formModal">Schedule appointment</button>
      </div>
    </div>
   
  </div>


  @endif

 


  
  


</x-admin-layouts>