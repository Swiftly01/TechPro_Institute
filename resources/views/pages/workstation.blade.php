
<x-layout>
  <x-slot:title>
    Application :: Form
  </x-slot:title>
 
  <div   class="container">
    <div  class="row main">
      <div class="col">
        <!-- <h1  class="text-danger home">Home/Services</h1> -->
        <h1 ><a class=" text-danger home" href="{{ url('/') }}">Home/</a><a class=" text-danger home" href="">Workstation</a><a class="text-danger home" href="{{ route('revalidate.booking') }}">/Revalidate booking</a></h1>
      </div>
    </div>
   </div> 
   
  
   <div class="container mt-5">
    <div style="background-color: whitesmoke;" class="row">
      <div class="container">
        <div class="gallery-layout">
          <img class="gallery-img" src="{{ asset('assets/images/DSC_4906.jpg') }}" alt="">
          <div style="background-color: #0A5098; width: 30%;">
              <div class="gallery-btn-layout">
                <a href="{{ route('services.register') }}" class="gallery-btn">Book Now</a> 
              </div>
            
          </div>
        </div>
       </div>
    
     
    </div>
   </div>
  
  
  
  </x-layout>