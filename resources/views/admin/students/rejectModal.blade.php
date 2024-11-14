<form action="{{ route('application.reject') }}" method="POST">
  @csrf
  <div class="modal fade" id="basicModalReject{{ $student->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reject :: Application</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to Reject {{ ucfirst(strtolower($student->firstname)) }} {{ ucfirst(strtolower($student->lastname))  }}</div>
            <input type="hidden"  name="student_id" type="text" value="{{ $student->id }}">
            <input type="text" class="form-control  " value="" name="reject-reason" required> 
            <span class="text-danger">
              @error('student_id')
              {{ $message }}
                
              @enderror
            </span>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Reject</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

</form>