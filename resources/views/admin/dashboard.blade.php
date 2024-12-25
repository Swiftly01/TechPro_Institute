<x-admin-layouts>
  <x-slot:title>
    Dashboard
  </x-slot:title>

  <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-body">
          @if(Auth::user()->user_type === 'admin')
            <h1 style="color: #105697;" >Welome To Tech Pro Admin Dashboard</h1>

         @else
         <h6 style="color: #105697;" >Welome {{ Auth::user()->email }}</h6>
          @endif
        </div>
    </div>
</div>


</x-admin-layouts>