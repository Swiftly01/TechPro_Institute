<form action="{{ route('student.edit', ['id' => $student->id]) }}" enctype="multipart/form-data" method="POST">
  @csrf
  <div class="modal fade" id="basicModal{{ $student->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit :: Student</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="firstName" class="form-label mt-2 ms-5 label-name">FirstName</label>
                <input type="text" class="form-control  ms-5" value="{{ $student->firstname }}" name="firstname" required> 
                <span class="text-danger">
                    @error('firstname')
                    {{ $message }}
                        
                    @enderror
                    
               </span> 
             </div>
             <div class="mb-3">
              <label for="lastName" class="form-label mt-2 ms-5 label-name">LastName</label>
              <input  type="text" class="form-control  ms-5" value="{{ $student->lastname }}" name="lastname" required>
              <span class="text-danger">
                @error('lastname')
                {{ $message }}
                    
                @enderror
                
           </span>  
             </div>
             <div class="mb-3">
              <label for="email" class="form-label mt-2 ms-5 label-name">Email</label>
              <input  type="email" class="form-control ms-5" value="{{ $student->email }}" name="email" required>
              <span class="text-danger">
                @error('email')
                {{ $message }}
                    
                @enderror
                
           </span>    
             </div>
             <div class="mb-3">
              <label for="phone" class="form-label mt-2 ms-5 label-name">Phone No</label>
              <input  type="number" class="form-control ms-5" value="{{ $student->phone }}" name="phone" required> 
              <span class="text-danger">
                @error('phone')
                {{ $message }}
                    
                @enderror
                
           </span>  
             </div>
             <div class="mb-3">
              <label for="phone" class="form-label mt-2 label-name">Upload Pitch Deck</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input name="image_url" type="file" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
              </div>
              <span class="text-danger">
                @error('image_url')
                {{ $message }}
                    
                @enderror
                
           </span> 
              
             </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
</form>