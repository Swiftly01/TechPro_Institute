<form action="{{ route('student.delete') }}" method="POST">
  @csrf
  <div class="modal fade" id="basicModaldelete{{ $student->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete :: Students</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to delete {{ $student->firstname }}</div>
            <input type="hidden"  name="student_id" type="text" value="{{ $student->id }}">
            <span class="text-danger">
              @error('student_id')
              {{ $message }}
                
              @enderror
            </span>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

</form>