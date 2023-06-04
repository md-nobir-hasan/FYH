<x-guest-layout>
<img src="{{asset('/images/fyhlogo.png')}}" alt="" class="lg:ml-20 h-8 w-24">
    <div class="grid lg:grid-cols-3 lg:gap-3 grid-cols-1 bg-white lg:mx-20 rounded-lg lg:p-10" style="font-family: 'Montserrat';">
    <form class="lg:col-span-2 p-10 border-2 border-black rounded-xl" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="flex">
        <h1 class="text-2xl font-extrabold">Create Your Account</h1>
        <div class="ml-auto flex">
        <h1>Already have an account?</h1>
        <button class="px-3 rounded-lg font-semibold flex justify-center items-center bg-[#D1052C] text-white ml-2"><a href="/login">{{ __('Log in') }}</a></button>
        </div>
        </div>
        <h1 class="mb-2">Describe yourself as clearly so that there are no mistakes.</h1>
        <!-- google icon -->
        <a href="{{route('google.auth',$planId->plan_id)}}" class="w-full border hover:bg-[#D1052C] hover:text-white border-[#000000] p-3 rounded-lg font-semibold flex justify-center items-center"><svg class="mr-1" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    </svg>Continue with Google</a>
        <!-- google icon end -->
        <div class="grid grid-cols-4">
    <hr class="h-px my-8 bg-black col-span-1 border-0">
    <p class="col-span-2 flex justify-center items-center font-medium">or continue with email</p>
    <hr class="h-px my-8 bg-black col-span-1 border-0">
    </div>


 <input type="hidden" name="planId"     @if($planId!==null)value="{{$planId->plan_id}}" @endif>  

        <!-- Name -->
        <div>
            <x-input-label for="name" : />
            <x-text-input id="name" class="block mt-1 w-full border-gray-700" type="text" name="name" :value="old('name')" required  autocomplete="name"  style="border-top:0;border-right:0; border-left:0" placeholder="First Name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" : />
            <x-text-input id="name" class="block mt-2 w-full border-gray-700" type="text" name="name" :value="old('name')" required  autocomplete="name"  style="border-top:0;border-right:0; border-left:0" placeholder="Last Name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="">
            <x-input-label for="email" : />
            <x-text-input id="email" class="block mt-2 w-full border-gray-700" type="email" name="email" :value="old('email')" required autocomplete="username" style="border-top:0;border-right:0; border-left:0" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

      

        <!-- Password -->
        <div class="">
            <x-input-label for="password" : />

            <x-text-input id="password" class="block mt-2 w-full border-gray-700"
                            type="password"
                            name="password"
                            required autocomplete="new-password" style="border-top:0;border-right:0; border-left:0" placeholder="Password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="">
            <x-input-label for="password_confirmation" : />

            <x-text-input id="password_confirmation" class="block mt-2 w-full border-gray-700"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" style="border-top:0;border-right:0; border-left:0" placeholder="Confirm Password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
         <!-- Photo upload -->
         <div class="">
              <label
                for="img"
                class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                ></label
              >
              <input name="img"
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid  bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 border-gray-700"
                type="file"
                id="img"
                style="border-top:0;border-right:0; border-left:0" placeholder="Photo"/>
                 <x-input-error :messages="$errors->get('img')" class="mt-2" />
          </div>
          <div class="flex items-center my-3">
            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes,I understand and agree to the FYH <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Terms of Services</a>.</label>
        </div>
        <button class="w-full text-xl p-3 rounded-lg font-semibold flex justify-center items-center bg-[#D1052C] text-white">{{ __('Create Account & Continue') }}</button>
    </form>
    <div class="lg:col-span-1 mt-10 lg:mt-0">
    <div class=" ">
        <div class="border-2 border-black rounded-xl p-3">
            <h1 class="font-bold text-xl ml-4">Order Summary</h1>
            <div class="flex mt-2">
                <h1 class="pl-4 uppercase"> @if($planId !==null){{$planId->name }} @endif - Online Payment... </h1>     
                <h1 class="ml-auto uppercase">@if($planId !==null){{$planId->currency }} @endif @if($planId !==null){{$planId->price }} @endif</h1>     
            </div>
            <div class="flex mt-2">
                <h1 class="pl-4">Other fee</h1>     
                <h1 class="ml-auto uppercase">@if($planId !==null){{$planId->currency }}.00 @endif</h1>     
            </div>
            <div class="flex mt-2">
                <h1 class="pl-4">Vat & Tax</h1>     
                <h1 class="ml-auto uppercase">@if($planId !==null){{$planId->currency }}. 00 @endif</h1>     
            </div>
            <hr class="mt-3 h-px my-1 bg-gray-700 border-0">
            <div class="flex">
                <h1 class="font-bold text-xl ml-4">Total</h1>
                <h1 class="ml-auto">@if($planId !==null){{$planId->currency }} @endif @if($planId !==null){{$planId->price }} @endif</h1>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-guest-layout>
