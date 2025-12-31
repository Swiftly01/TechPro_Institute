
<x-layout>
  <x-slot:title>
    Contact Us :: Form
  </x-slot:title>

  <div  class="container">
    <div  class="row main">
      <div class="col">
        <!-- <h1  class="text-danger home">Home/Services</h1> -->
        <h1 class="text-danger" ><a class=" text-danger" href="{{ url('/') }}">Home/</a><a class=" text-danger" href="{{ url('/contact') }}">Contact Us</a></h1>
      </div>
    </div>
   </div> 

  
   <div class="container mt-3">
    <div class="row ">
      <div style="background-color: #3F5F94;" class="p-0 col-lg-4 col-md-12">
        <img  class="img-fluid image" src="{{ asset('assets/images/Frame 58.png') }}" alt="">
      </div>
      <div style="background-color: #3F5F94;" class="col-lg-8 col-md-12 ">
        
                
          @if(session('success'))
          <div class="mt-2 alert alert-success">
            {{ session('success') }}

          </div>
            
          @endif

          @if(session('error'))

          <div class="mt-2 alert alert-danger">
            {{ session('error') }}

          </div>
            
          @endif
        <h1  class=" how ms-5">How can we help</h1>
        <p class="mt-4 send ms-5">Send Us A Message</p>
        <form method="POST" action="{{ route('contact.submit') }}">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="mt-2 form-label email ms-5">Email address</label>
            <input style="width: 80%;" type="email" name="email" class="mt-2 form-control ms-5" id="exampleFormControlInput1" placeholder="name@example.com">
            <span class="text-danger ms-5">
              @error('email')

              {{ $message }}
                
              @enderror

            </span>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="mt-2 form-label desc ms-5">Desciption</label>
            <textarea style="width: 80%;" name="description" class="mt-2 form-control ms-5" id="exampleFormControlTextarea1" rows="3"></textarea>
            <span class="text-danger ms-5">
              @error('description')

              {{ $message }}
                
              @enderror

            </span>
          </div>
          <button type="submit" class="mt-4 submit-btn ms-5">Submit</button>
    
       </form>
  
  
      
  
  
      </div>
    </div>
  </div>
  

 
</x-layout>
