<x-admin-layouts>
  <x-slot:title>
    View :: Students
  </x-slot:title>

  <div class="container-fluid">
    <div class="mx-0 row page-titles">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span class="ml-1 fs-5">{{ $user->email }}</span>
            </div>
        </div>
        <div class="mt-2 col-sm-6 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
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
              <h4 class="card-title">Student Table</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example" class="display" style="min-width: 845px">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                              <th>App No</th>
                              <th>Course</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($students as $index => $student )
                      <tbody>
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->firstname }}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->app_no }}</td>
                            <td>{{ $student->course->name}}</td>
                            <td>
                                <div style="display: flex;gap:5px">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#basicModal{{ $student->id }}" >Edit</button>
                                @include('admin.students.edit') 
                                
                                @include('admin.students.delete')
                                <button class="btn btn-danger"  data-toggle="modal" data-target="#basicModaldelete{{ $student->id }}" >Delete</button>

                                </div>
                                
                              

                            </td>
                        </tr>
                        
                    </tbody>
                        
                      @endforeach
                     
                      <tfoot>
                          <tr>
                              <th>#</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                              <th>App No</th>
                              <th>Course</th>
                              <th>action</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

  




</x-admin-layouts>