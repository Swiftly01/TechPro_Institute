<x-admin-layouts>
  <x-slot:title>
    Student :: Details
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


  <div class="col-12">
    <div class="card">
        <div class="card-header ">
            <h4 class="card-title ">Student :: Details</h4>
        </div>
        <div class="card-body">
          <div style="display: flex; justify-content:space-between; align-item:center">
          <div>
            <h4>Firstname : {{ $student->firstname  }}</h4>
            <h4>lastname : {{ $student->lastname }}</h4>
            <h4>Email Address : {{ $student->email  }}</h4>
            <h4>Phone Number : {{ $student->phone  }}</h4>
            <h4>App No : {{ $student->app_no  }}</h4>
            <h4>Course : {{ $student->course->name  }}</h4>
          </div>
          <div>
            <img style="height: 200px; width:200px" src="{{ asset('upload/'. $student->image_url) }}" alt="">
          </div>
        

          </div>
            
        </div>
    </div>
  </div>
  
  


</x-admin-layouts>