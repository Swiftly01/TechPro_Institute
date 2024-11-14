<x-admin-layouts>
  <x-slot:title>
    View :: Students
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
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
            <!-- Nav tabs -->
            <div class="default-tab">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home">Pending</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#profile">Approved</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#contact">Rejected</a>
                  </li>
                  
              </ul>
              <div class="tab-content">
                  <div class="tab-pane fade show active" id="home" role="tabpanel">
                      <div class="pt-4">
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th  scope="col">Firstname</th>
                                        <th scope="col" >Lastname</th>
                                        <th  scope="col">Email</th>
                                        <th  scope="col">Course</th>
                                        <th  scope="col">View Details</th>
                                        <th  scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendingStudents as $index => $student )
                              <tbody>
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->course->name}}</td>
                                    <td><a href="{{ route('details.show',['id' => $student->id]) }}">View details</a></td>
                                    <td>
                                        <div style="display: flex;gap:2px">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#basicModalApprove{{ $student->id }}" >Approve</button>
                                        @include('admin.students.approveModal')
                                        
                                        @include('admin.students.rejectModal')
                                        <button class="btn btn-danger"  data-toggle="modal" data-target="#basicModalReject{{ $student->id }}" >Reject</button>
                                        </div>
    
                                    </td>
                                </tr>
                                
                            </tbody>
                                
                              @endforeach



                                </tbody>
                            </table>
                         
                      </div>
                          
                      </div>
                  </div>
                  <div class="tab-pane fade" id="profile">
                      <div class="pt-4">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>View Details</th>
                                
                                </tr>
                            </thead>
                            @foreach ($approvedStudents as $index => $student )
                            <tbody>
                              <tr>
                                  <td>{{ $index + 1 }}</td>
                                  <td>{{ $student->firstname }}</td>
                                  <td>{{ $student->lastname }}</td>
                                  <td>{{ $student->email }}</td>
                                  <td>{{ $student->course->name}}</td>
                                  <td><a href="{{ route('details.show',['id' => $student->id]) }}">View details</a></td>
                                  
                              </tr>
                              
                          </tbody>
                              
                            @endforeach
                           
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>View Details</th>
                                
                                </tr>
                            </tfoot>
                        </table>
                        
                          
                      </div>
                  </div>
                  <div class="tab-pane fade" id="contact">
                      <div class="pt-4">
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th  scope="col">Firstname</th>
                                        <th scope="col" >Lastname</th>
                                        <th  scope="col">Email</th>
                                        <th  scope="col">Course</th>
                                        <th  scope="col">View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rejectedStudents as $index => $student )
                              <tbody>
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->course->name}}</td>
                                    <td><a href="{{ route('details.show',['id' => $student->id]) }}">View details</a></td>
                                    
                                </tr>
                                
                            </tbody>
                                
                              @endforeach



                                </tbody>
                            </table>
                         
                      </div>
                          
                      </div>
                  </div>
              </div>
          </div>
              
          </div>
      </div>
  </div>
</div>

  

 




</x-admin-layouts>