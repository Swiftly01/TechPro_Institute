
<x-layout>
<x-slot:title>
    Admin :: Login
</x-slot:title>

<div style="margin-top: 170px" class="container d-flex justify-content-center">
    <div class="card" style="max-width: 500px; width: 100%;">
        <div style="background-color: #0A5098;" class="card-header  text-white text-center">Login :: Page</div>
        <div class="card-body p-4 p-lg-5 text-black">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex align-items-center mb-3 pb-1 justify-content-center">
                    <img src="{{asset('assets/images/image 17.png')}}" alt="Logo" style="max-width: 150px;">
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="email">Email address</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        class="form-control form-control-lg border-0 shadow-none" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="form-control form-control-lg border-0 shadow-none" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="form-check">
                    <input class="form-check-input" id="remember_me" type="checkbox">
                    <label class="form-check-label" for="remember_me">
                        Remember me
                    </label>
                </div>

                <div class="mt-4">
                    <button style="background-color: #0A5098;" class="btn text-white  w-100" type="submit">
                        {{ __('Log in') }}
                    </button> <br>

                    @if (Route::has('password.request'))
                        <a class="d-block text-center mt-3 text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>

        </div>
    </div>
</div>





</x-layout>
