<form action="{{ route('appointment.destroy', ['id' => $appointment->id]) }}" method="Post">
  @csrf
  @method('DELETE')
  <div class="modal fade" id="deleteModal{{ $appointment->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete :: Appointments</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">Are you sure you want to Delete this appointments {{ date('d,M Y', strtotime($appointment->appointment_date) ) }}  {{ date('h:i A', strtotime($appointment->appointment_time) ) }} </div>

            
         
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Yes</button>
                
            </div>
        </div>
    </div>
</div>

</form>