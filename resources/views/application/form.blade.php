
<x-layout>
<x-slot:title>
  Application :: Form
</x-slot:title>

<div   class="container">
  <div  class="row main">
    <div class="col text-center">
      <!-- <h1  class="text-danger home">Home/Services</h1> -->
      <h1 class="text-danger" ><a class=" text-danger home" href="{{ url('/') }}">Home/</a><a class=" text-danger home">Application</a>
        </h1>
        {{-- <a class=" text- home" href="{{ url('/outstanding') }}">/Outstanding Payment</a> --}}
    </div>
  </div>
 </div> 
 

 <div class="container mt-2">
  <div  class="row">
    <div style="background-color: whitesmoke;" class="col-lg-6 col-md-12 mx-auto">

   <form action="{{ route('application.store.form') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="about ms-5">Registration Form</h1>
        <div class="mb-3">
            <label for="firstName" class="form-label mt-2 ms-5 label-name">FirstName</label>
            <input style="width: 80%;" type="text" class="form-control  ms-5" value="{{ old('firstname') }}" name="firstname" placeholder="John" >
           <span class="text-danger ms-5">
            @error('firstname')

            {{ $message }}
              
             @enderror

           </span>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label mt-2 ms-5 label-name">LastName</label>
            <input style="width: 80%;" type="text" class="form-control  ms-5" value="{{ old('lastname') }}" name="lastname" placeholder="Doe" >
            <span class="text-danger ms-5">
              @error('lastname')
              {{ $message }}
                
              @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label mt-2 ms-5 label-name">Email</label>
            <input style="width: 80%;" type="email" class="form-control ms-5" value="{{ old('email') }}" name="email" placeholder="name@example.com" >
            <span class="text-danger ms-5">
              @error('email')
              {{ $message }}
                
              @enderror

            </span>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label mt-2 ms-5 label-name">Phone No</label>
            <input style="width: 80%;" type="number" class="form-control ms-5" value="{{ old('phone') }}" name="phone" placeholder="1234567890" >
            <span class="text-danger ms-5">
              @error('phone')
              {{ $message }}
                
              @enderror

            </span>
        </div>
        <label for="phone" class="form-label mt-2 ms-5 label-name">Available Programs</label>
        <select style="width: 80%;" class="form-select ms-5 mb-3" name="course_id" aria-label="Default select example">
          <option value = ''>Choose A Program</option>
          @foreach ($courses as $course )
          <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
          @endforeach
         </select>
         <span class="text-danger ms-5">
          @error('course_id')
          {{ $message }}
            
          @enderror

         </span>
        
        <div class="mb-3">
            <label for="image_url" class="form-label  ms-5 label-name">Upload Passport Photograph </label>
            <input style="width: 80%;" type="file" class="form-control mt-2 ms-5"  name="image_url" >
            <span class="text-danger ms-5">
              @error('image_url')
              {{ $message }}
                
              @enderror

            </span>
        </div>
        <button type="submit" class="submit-btn ms-5 mb-5">Submit</button>
  </form>


    </div>
    {{-- <div class="col-lg-6 col-md-12 p-0">
       <img width="100%" height="100%"  src="{{asset('assets/images/IMG_2590.DNG')}}" class="" alt=""> 

    </div> --}}
  </div>
 </div>



</x-layout>