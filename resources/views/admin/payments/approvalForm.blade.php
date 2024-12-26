<form action="{{ route('payment.approval') }}" method="POST">
  @csrf
  <div class="modal fade" id="basicModalapprove{{ $payment->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Approve :: Payment</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <input type="number" class="form-control  ms-5" value="{{ $payment->id }}" name="payment_id" hidden> 
              <div class="mb-3">
                <label for="amount" class="form-label  label-name">Amount</label>
                <input type="number" class="form-control  ms-5" value="{{ old('amount') }}" name="amount" required> 
                <span class="text-danger">
                  @error('amount')
                    {{ $message }}
                  @enderror
                </span>
              
             </div>
             <div class="mb-3">
              <label for="reference" class="form-label  label-name">Payment Refrence</label>
              <input type="text" class="form-control" value="{{ old('reference') }}" name="reference" required>
              <span class="text-danger">
                @error('reference')
                {{ $message }}
                  
                @enderror
                
              </span> 
            
           </div>
              
            </div>
            
          
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Approve</button>
            </div>
        </div>
    </div>
</div>

</form>