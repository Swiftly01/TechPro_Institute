<form action="{{ route('payment.reject') }}" method="POST">
  @csrf
  <div class="modal fade" id="basicModalReject{{ $payment->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reject :: Application</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">Are you sure you want to Reject <span class="text-danger" > {{ ucfirst(strtolower($payment->student->firstname)) }} {{ ucfirst(strtolower($payment->student->lastname))  }} Payment </span></div>
            <input type="hidden"  name="payment_id" type="text" value="{{ $payment->id }}">
            <input type="text" class="form-control  " value="" name="reject-reason" required> 
            <span class="text-danger">
              @error('payment_id')
              {{ $message }}
                
              @enderror
            </span>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Reject</button>
                
            </div>
        </div>
    </div>
</div>

</form>