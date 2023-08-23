<x-guest-layout>
    <style>
        
    </style>
<x-auth-session-status class="" :status="session('status')"/>

    <div class="pt-1 pb-1">
        <div class="shadow-xl lg:mx-40 lg:pb-5 pb-36" style="">
        <form class=" shadow-xl lg:px-28 md:p-16 p-10 my-20 lg:py-16 rounded-2xl lg:h-[750px] md:w-[500px]  lg:w-[584px] bg-white lg:mx-auto md:mx-auto mx-auto" method="POST" action="{{ route('login') }}" style="font-family: 'Poppins';" enctype="multipart/form-data">
    @csrf
       <div>
       <a href="{{route('home')}}">
        <img src="{{$setting->logo}}" alt="" class="h-8 w-24 mx-auto  mt-[-30px]">
       </a>

    <h1 class="text-center text-[28px] font-medium mt-[37px]">Welcome Back!</h1>
    <p class="text-center font-normal text-base">Continue with Google or Enter your details</p>

    <a href="{{route('google.auth')}}" class=" mt-[10px] w-full border font-medium  border-[#000000] p-3 rounded-lg text-sm flex justify-center items-center"><svg class="mr-1" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        </svg>
        Log in with Google
    </a>
    <div class="grid grid-cols-4 mt-[10px]">
    <hr class="h-px mt-3 bg-black col-span-1 border-0">
    <p class="col-span-2 flex justify-center items-center font-normal ">or continue with email</p>
    <hr class="h-px mt-3 bg-black col-span-1 border-0">
    </div>

        <!-- Email Address -->
        <div class="mt-[10px]">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="myemail@mail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
        <label class="relative" for="password">
                <x-input-label for="password" : value="Password"/>

                <x-text-input id="password" class="block mt-2 w-full shadow" type="password" name="password"
                    required autocomplete="new-password" style="border-top:0;border-right:0; border-left:0;border-bottom:0"
                    placeholder="min 8 character"/>
                    <svg onclick=passwordShow() xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-0 top-1/2 transform -translate-y-1/2  mt-3 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300  text-indigo-600 shadow-sm focus:ring-indigo-500  " name="remember">
                <span class="ml-2 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-2 ">
            @if (Route::has('password.request'))
                <div class="flex justify-center items-center">
                <a class=" text-sm text-[#D1052C]  hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('password.request') }}">
                    {{ __('Don’t remember your password?') }}
                </a>
                </div>
            @endif

            <button class="w-full text-base p-3 rounded-lg font-bold flex justify-center items-center hover:bg-[#FCEEF1] hover:text-[#D1052C] bg-[#D1052C] text-white mt-[10px]">{{ __('Log in') }}</button>
            <p class="mt-2 text-[14px] font-normal text-center">Don't have an account?<a href="{{$setting->trail ? route('register') : route('member')}}" class="text-[#D1052C] text-[14px] font-normal ml-[7px] hover:text-orange-600">Create an account</a></p>
        </div>
       </div>
    </form>
        </div>
    </div>
    <script>
        const passwordShow=()=>{
            const pass=document.getElementById('password')
            if(pass.type=== 'password'){
                pass.type='text'
            }
            else{
                pass.type='password'
            }
        }
    </script>

    </x-guest-layout>