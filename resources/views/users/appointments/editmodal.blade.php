<form action="{{ route('appointment.update') }}" method="POST">
  @csrf
  <div class="modal fade" id="editModal{{ $appointment->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit :: Appointment</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="date" class="form-label">Appointment Date</label>
                <input value="{{ $appointment->appointment_date}}" name="appointment_date" type="date" class="form-control" id="date">
              </div>
    
              <div class="mb-3">
                <label for="timeInput" class="form-label">Select Time</label>
                <input  value="{{ $appointment->appointment_time}}" type="time" id="timeInput" name="appointment_time" class="form-control" min="09:00" max="17:00">
              </div>
          
              

            </div>
            <input type="hidden"  name="appointment_id" type="text" value="{{ $appointment->id }}">
          
           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
                
            </div>
        </div>
    </div>
</div>

</form>