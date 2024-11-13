
<x-layout>
    <x-slot:title>
        Reset :: Password
    </x-slot:title>

    <div style="margin-top: 170px" class="container d-flex justify-content-center">
        <div class="card" style="max-width: 500px; width: 100%;">
            <div style="background-color: #0A5098;" class="card-header text-white text-center">Reset :: Password</div>
            <div class="card-body p-4 p-lg-5 text-black">
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <img src="{{ asset('assets/images/image 17.png') }}" alt="Logo" style="max-width: 150px; margin-top: -20px;">
                </div>
    
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
    
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
    
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    
                    <div class="form-outline mb-3">
                        <label class="form-label" for="email">Email Address</label>
                        <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username"
                            class="form-control form-control-lg w-100 mx-auto" style="border-radius: 0; box-shadow: none;" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
    
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="form-control form-control-lg w-100 mx-auto" style="border-radius: 0; box-shadow: none;" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
    
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                            class="form-control form-control-lg w-100 mx-auto" style="border-radius: 0; box-shadow: none;" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
    
                    <button style="background-color: #0A5098;" type="submit" class="btn w-100 mt-4 text-white">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
    


   
</x-layout>