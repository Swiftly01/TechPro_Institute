
<x-layout>
  <x-slot:title>
    Application :: Form
  </x-slot:title>
  
  <div   class="container">
    <div  class="row main">
      <div class="text-center col">
        <!-- <h1  class="text-danger home">Home/Services</h1> -->
        <h1 class="text-danger"><a class=" text-danger home">Tech-A-Teen</a></h1>
      </div>
    </div>
   </div> 
   
  
   <div class="container mt-2">
    <div  class="row">
      <div style="background-color: whitesmoke;" class="mx-auto col-lg-6 col-md-12">
  
     <form action="{{ route('application.store.form') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <h1 class="about ms-5">Tech-A-Teen Form</h1>
          <div class="mb-3">
              <label for="firstName" class="mt-2 form-label ms-5 label-name">FirstName</label>
              <input style="width: 80%;" type="text" class="form-control ms-5" value="{{ old('firstname') }}" name="firstname" placeholder="John" >
             <span class="text-danger ms-5">
              @error('firstname')
  
              {{ $message }}
                
               @enderror
  
             </span>
          </div>
          <div class="mb-3">
              <label for="lastName" class="mt-2 form-label ms-5 label-name">LastName</label>
              <input style="width: 80%;" type="text" class="form-control ms-5" value="{{ old('lastname') }}" name="lastname" placeholder="Doe" >
              <span class="text-danger ms-5">
                @error('lastname')
                {{ $message }}
                  
                @enderror
              </span>
          </div>
          <div class="mb-3">
              <label for="email" class="mt-2 form-label ms-5 label-name">Email</label>
              <input style="width: 80%;" type="email" class="form-control ms-5" value="{{ old('email') }}" name="email" placeholder="name@example.com" >
              <span class="text-danger ms-5">
                @error('email')
                {{ $message }}
                  
                @enderror
  
              </span>
          </div>
          <div class="mb-3">
              <label for="phone" class="mt-2 form-label ms-5 label-name">Phone No</label>
              <input style="width: 80%;" type="number" class="form-control ms-5" value="{{ old('phone') }}" name="phone" placeholder="1234567890" >
              <span class="text-danger ms-5">
                @error('phone')
                {{ $message }}
                  
                @enderror
  
              </span>
          </div>
          <label for="tech-a-teen" class="mt-2 form-label ms-5 label-name">Program: Tech A Teen</label>
          <input style="width: 80%;" type="text" class="form-control ms-5" value="{{ $tech_a_teen->name }}"  readonly>
          <input style="width: 80%;" type="text" class="form-control ms-5" value="{{ $tech_a_teen->id }}" name="course_id" hidden>
              <span class="text-danger ms-5">
                @error('course_id')
                {{ $message }}
                  
                @enderror
  
              </span>      
          <div class="mb-3">
              <label for="image_url" class="form-label ms-5 label-name">Upload Passport Photograph </label>
              <input style="width: 80%;" type="file" class="mt-2 form-control ms-5"  name="image_url" >
              <span class="text-danger ms-5">
                @error('image_url')
                {{ $message }}
                  
                @enderror
  
              </span>
          </div>
          <button type="submit" class="mb-5 submit-btn ms-5">Submit</button>
    </form>
  
  
      </div>
      {{-- <div class="p-0 col-lg-6 col-md-12">
         <img width="100%" height="100%"  src="{{asset('assets/images/IMG_2590.DNG')}}" class="" alt=""> 
  
      </div> --}}
    </div>
   </div>
  
  
  
  </x-layout>