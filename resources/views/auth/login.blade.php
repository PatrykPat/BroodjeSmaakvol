<x-guest-layout>
    <style>
    .inputveld{
        background-color: #F1F2F2;
        color: black;
        border-radius: 23px;
    }
    .loginbutton{
        background-color: #EB5258;
        border-radius: 23px;
    }
    .back{
        border-style: none;
    }
    .topImg{
        max-width: 450px;
        max-height: 400px;
        width: 100%;
        position: fixed;
        top: 0px;
        right: 0px;
        z-index: -1;
    }
    .botImg{
        max-width: 450px;
        max-height: 400px;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: -1;
    }
    .waveMaxTop{  
        float: right;
    }
    .waveMaxBot{
        float: left;
    }
    .logo{
        position: relative;
        top: 120px
    }
    .form{
        position: relative;
        top: 120px
    }
    .padaanpas{
        padding: 0px;
        justify-content: start;
    }
    .reset:hover{
        color: red;
    }
    
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="inputveld back" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Login')" />
            <x-text-input id="email" class="inputveld mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="School Mail"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password" :value="__('Password')" /> -->

            <x-text-input id="password" class="inputveld mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Wachtwoord"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="reset underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3 loginbutton">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
