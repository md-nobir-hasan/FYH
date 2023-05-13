<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="p-10" method="POST" action="{{ route('login') }}" style="font-family: 'Poppins';">
    <img src="{{asset('/images/logo.jpg')}}" alt="" class="h-8 w-24 mx-auto mb-14 mt-[-40px]">
    <h1 class="text-center text-4xl font-bold">Welcome Back!</h1>
    <p class="text-center font-medium text-lg">Continue with Google or Enter your details</p>

    <button class="w-full border hover:bg-[#D1052C] hover:text-white border-[#000000] p-3 rounded-lg font-semibold flex justify-center items-center"><svg class="mr-1" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_468_289)">
    <path d="M5.09729 13.8991L4.29669 16.8879L1.37052 16.9498C0.496027 15.3278 0 13.472 0 11.4999C0 9.59294 0.463773 7.79463 1.28584 6.21118H1.28647L3.89158 6.68879L5.03278 9.27827C4.79393 9.9746 4.66374 10.7221 4.66374 11.4999C4.66383 12.3441 4.81675 13.1529 5.09729 13.8991Z" fill="#FFD500"/>
    <path d="M22.7991 9.35156C22.9311 10.0472 23 10.7657 23 11.4999C23 12.3232 22.9134 13.1263 22.7485 13.901C22.1887 16.5372 20.7259 18.8391 18.6995 20.468L18.6989 20.4674L15.4176 20.3L14.9532 17.4009C16.2978 16.6124 17.3486 15.3783 17.9022 13.901H11.7528V9.35156H17.9919H22.7991Z" fill="#167EE6"/>
    <path d="M18.6988 20.4674L18.6995 20.4681C16.7287 22.0521 14.2252 22.9999 11.5 22.9999C7.12048 22.9999 3.31286 20.5521 1.37048 16.9498L5.09725 13.8992C6.06841 16.4911 8.56872 18.3361 11.5 18.3361C12.7599 18.3361 13.9403 17.9956 14.9531 17.401L18.6988 20.4674Z" fill="#12B347"/>
    <path d="M18.8405 2.64752L15.115 5.69753C14.0667 5.0423 12.8276 4.66379 11.5 4.66379C8.50245 4.66379 5.95538 6.5935 5.03287 9.27834L1.28652 6.21126H1.28589C3.19983 2.52115 7.05547 0 11.5 0C14.2904 0 16.8488 0.993941 18.8405 2.64752Z" fill="#FF4B26"/>
    </g>
    <defs>
    <clipPath id="clip0_468_289">
    <rect width="23" height="23" fill="white"/>
    </clipPath>
    </defs>
    </svg>Log in with Google</button>
    <div class="grid grid-cols-4">
    <hr class="h-px my-8 bg-black col-span-1 border-0">
    <p class="col-span-2 flex justify-center items-center font-medium">or continue with email</p>
    <hr class="h-px my-8 bg-black col-span-1 border-0">
    </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="myemail@mail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="min 8 character"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class=" mt-4">
            @if (Route::has('password.request'))
                <a class=" text-sm text-[#D1052C] dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="w-full  p-3 rounded-lg font-semibold flex justify-center items-center bg-[#D1052C] text-white">{{ __('Log in') }}</button>
            <p class="mt-2 text-lg">Don't have an account?<a href="/register" class="text-[#D1052C] hover:text-orange-600">Create an account</a></p>
        </div>
    </form>
</x-guest-layout>

