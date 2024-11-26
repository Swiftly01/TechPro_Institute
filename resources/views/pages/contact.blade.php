
<x-layout>
  <x-slot:title>
    Contact Us :: Form
  </x-slot:title>

  <div  class="container">
    <div  class="row main">
      <div class="col">
        <!-- <h1  class="text-danger home">Home/Services</h1> -->
        <h1 ><a class=" text-danger home" href="{{ url('/') }}">Home/</a><a class=" text-danger home" href="{{ url('/contact') }}">Contact Us</a></h1>
      </div>
    </div>
   </div> 

  
   <div class="container mt-5">
    <div class="row ">
      <div style="background-color: #3F5F94;" class="col-lg-4 col-md-12 p-0">
        <img  class="img-fluid image" src="{{ asset('assets/images/Frame 58.png') }}" alt="">
      </div>
      <div style="background-color: #3F5F94;" class="col-lg-8 col-md-12 ">
        
                
          @if(session('success'))
          <div class="alert alert-success mt-2">
            {{ session('success') }}

          </div>
            
          @endif

          @if(session('error'))

          <div class="alert alert-danger mt-2">
            {{ session('error') }}

          </div>
            
          @endif
        <h1  class=" how ms-5">How can we help</h1>
        <p class="send mt-4 ms-5">Send Us A Message</p>
        <form action="{{ route('contact.submit') }}">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label email mt-2 ms-5">Email address</label>
            <input style="width: 80%;" type="email" name="email" class="form-control mt-2 ms-5" id="exampleFormControlInput1" placeholder="name@example.com">
            <span class="text-danger ms-5">
              @error('email')

              {{ $message }}
                
              @enderror

            </span>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label desc mt-2 ms-5">Desciption</label>
            <textarea style="width: 80%;" name="description" class="form-control mt-2 ms-5" id="exampleFormControlTextarea1" rows="3"></textarea>
            <span class="text-danger ms-5">
              @error('description')

              {{ $message }}
                
              @enderror

            </span>
          </div>
          <button type="submit" class="submit-btn mt-4 ms-5">Submit</button>
    
       </form>
  
  
      
  
  
      </div>
    </div>
  </div>
  

 
</x-layout>
