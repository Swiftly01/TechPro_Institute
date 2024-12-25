<form action="{{ route('appointment.create') }}" method="POST">
  @csrf
  <div class="modal fade" id="formModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create :: Appointment</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="date" class="form-label">Appointment Date</label>
            <input value="{{ old('appointment_date') }}" name="appointment_date" type="date" class="form-control"
              id="date">
            @error('appointment_time')
            <span class="text-danger">
              {{ $message }}
            </span>

            @enderror
          </div>

          <div class="mb-3">
            <label for="timeInput" class="form-label">Select Time</label>
            <input value="{{ old('appointment_time') }}" type="time" id="timeInput" name="appointment_time"
              class="form-control" min="09:00" max="17:00">
            @error('appointment_time')
            <span class="text-danger">
              {{ $message }}
            </span>

            @enderror
          </div>



        </div>



        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Create</button>

        </div>
      </div>
    </div>
  </div>

</form>