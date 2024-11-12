
<x-layout>
  <x-slot:title>
    Application :: Form
  </x-slot:title>
  
  <div   class="container">
    <div  class="row main">
      <div class="col">
        <!-- <h1  class="text-danger home">Home/Services</h1> -->
        <h1 ><a class=" text-danger home" href="{{ url('/') }}">Home/</a><a class=" text-danger home" href="">Application</a><a class=" text-danger home" href="">/outstanding payment</a></h1>
      </div>

      <div class="mb-3">
      <form action="{{ route('applicant.details') }}" method="post">
        @csrf
        <label for="app_no" class="form-label mt-2 label-name">View Application Details</label>
        <input style="width: 50%"  type="text" class="form-control" value="{{ old('lastname') }}" name="app_no" placeholder="App/2024/123456" required>
        <span class="text-danger">
          @error('app_no')
          {{ $message }}
            
          @enderror
        </span>
        <button type="submit" class="complete-btn mt-3">Submit</button>
      </form>
      </div>
    </div>
   </div> 
   <div class="container mt-5">
    <div style="background-color: whitesmoke;" class="row">
      <div class="col-lg-6 col-md-12">
        <div class="container">
          <div class="row">
            <div class="col text-center mt-5">
              @if(session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
              </div>
            
              @endif 
      
              @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>   
              @endif
              <h1 class="payment-text">Payment Details</h1>
              <p class="fs-4">Your Payment reference no <span class="text-danger fs-4">Kabirakinola234567FTD</span></p>
              <p class="fs-5">Make direct payment to the below bank details</p>
              <p class="fs-5">Bank Name: UBA</p>
              <p class="fs-5">Account Number: 123456789</p>
              <p class="fs-5">Account Name: Tech Pro Institute</p>
              <p class="fs-5">Upload Payment Evidence</p>
            
              <form action="{{ route('outstanding.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="mb-3">
                        <label for="app_no" class="form-label mt-2 label-name">Aplication Number</label>
                        <input style="width: 50%"  type="text" class="form-control mx-auto " value="{{ old('lastname') }}" name="app_no" placeholder="Doe" required>
                        <span class="text-danger">
                          @error('app_no')
                          {{ $message }}
                            
                          @enderror
                        </span>
                      </div>
                      <div class="col text-center">
                        <div class="mb-3">
                          <label for="receipt_url" class="form-label label-name">Upload Payment Receipts</label>
                          <input style="width: 50%;" type="file" class="form-control mt-2 mx-auto" name="receipt_url" required>
                          <span class="text-danger">
                            @error('receipt_url')
                            {{ $message }}
                              
                            @enderror
                          </span>
                        </div>

                      </div>
                </div>
          
                <div class="row">
                  <div class="col mx-auto mt-4">
                    <button type="submit" class="complete-btn">Upload</button>
                  </div>
                </div>
            </form>
            </div>
          </div>
        </div>
  
     
  
  
      </div>
      <div class="col-lg-6 col-md-12 p-0">
        <img width="100%" height="100%"  src="{{asset('assets/images/IMG_2590.DNG')}}" class="" alt="">
  
      </div>
    </div>
   </div>
   
  
  
  </x-layout>