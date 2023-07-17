<x-guest-layout>

    <div class="bg-white w-[1320px] h-[850px] mt-[107px] mb-[158px] rounded-xl lg:px-16 lg:py-10 @if($planId) lg:mx-auto @else mx-auto lg:w-[886px]@endif">
    <a href="{{ route('home') }}" class=" @if($planId) lg:mt-1 @else mb-10 flex items-center justify-center @endif">
        <img src="{{ $setting->logo }}" alt="" class="lg:-mt-5 h-8 w-24 ml-[88px]">
    </a>
    @if($planId)
    <a href="/membership">
        <button class=" mb-4 mt-4 px-6 py-2 border ml-[88px]">Back</button>
    </a>
    @endif
    <div class=" @if($planId) flex @else lg:w-[603px] mx-auto @endif"
        style="font-family: 'Poppins';">
        <form class="@if($planId) mr-[24px] lg:w-[702px] lg:h-[700px] ml-[88px] border-gray-300 border-2 lg:col-span-2 p-10 rounded-xl @endif" method="POST" action="{{ route('register') }}"

            enctype="multipart/form-data">
            @csrf
            <div class="">
            @if($planId)
                <h1 class="text-[28px] lg:-mt-5 font-semibold ">Create Your Account</h1>
            @else
                <h1 class="text-[28px] font-semibold text-center">Create Your Account & Start free Trial</h1>
            @endif
            </div>
            <h1 class="mb-1 text-base font-normal @if($planId) @else text-center @endif">Describe yourself as clearly so that there are no mistakes.</h1>
            <!-- google icon -->
            <a href="{{ route('google.auth', $planId ? $planId->plan_id : null) }}"
                class="w-full border hover:bg-[#D1052C] hover:text-white border-[#000000] p-3 rounded-lg font-semibold flex justify-center items-center"><svg
                    class="mr-1" width="23" height="23" viewBox="0 0 23 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_468_289)">
                        <path
                            d="M5.09729 13.8991L4.29669 16.8879L1.37052 16.9498C0.496027 15.3278 0 13.472 0 11.4999C0 9.59294 0.463773 7.79463 1.28584 6.21118H1.28647L3.89158 6.68879L5.03278 9.27827C4.79393 9.9746 4.66374 10.7221 4.66374 11.4999C4.66383 12.3441 4.81675 13.1529 5.09729 13.8991Z"
                            fill="#FFD500" />
                        <path
                            d="M22.7991 9.35156C22.9311 10.0472 23 10.7657 23 11.4999C23 12.3232 22.9134 13.1263 22.7485 13.901C22.1887 16.5372 20.7259 18.8391 18.6995 20.468L18.6989 20.4674L15.4176 20.3L14.9532 17.4009C16.2978 16.6124 17.3486 15.3783 17.9022 13.901H11.7528V9.35156H17.9919H22.7991Z"
                            fill="#167EE6" />
                        <path
                            d="M18.6988 20.4674L18.6995 20.4681C16.7287 22.0521 14.2252 22.9999 11.5 22.9999C7.12048 22.9999 3.31286 20.5521 1.37048 16.9498L5.09725 13.8992C6.06841 16.4911 8.56872 18.3361 11.5 18.3361C12.7599 18.3361 13.9403 17.9956 14.9531 17.401L18.6988 20.4674Z"
                            fill="#12B347" />
                        <path
                            d="M18.8405 2.64752L15.115 5.69753C14.0667 5.0423 12.8276 4.66379 11.5 4.66379C8.50245 4.66379 5.95538 6.5935 5.03287 9.27834L1.28652 6.21126H1.28589C3.19983 2.52115 7.05547 0 11.5 0C14.2904 0 16.8488 0.993941 18.8405 2.64752Z"
                            fill="#FF4B26" />
                    </g>
                    <defs>
                        <clipPath id="clip0_468_289">
                            <rect width="23" height="23" fill="white" />
                        </clipPath>
                    </defs>
                </svg>Continue with Google</a>
            <!-- google icon end -->
            <div class="grid grid-cols-4">
                <hr class="h-px my-5 bg-black col-span-1 border-0">
                <p class="col-span-2 flex justify-center items-center font-medium">or continue with email</p>
                <hr class="h-px my-5 bg-black col-span-1 border-0">
            </div>


            <input type="hidden" name="planId"
                @if ($planId !== null) value="{{ $planId->plan_id }}" @endif>

            <!-- Name -->
            <div class="">
                <x-input-label for="fname" : value="First Name"/>
                <x-text-input id="fname" class="block mt-1 w-full shadow" type="text" name="fname"
                    :value="old('fname')" required autocomplete="fname" style="border-top:0;border-right:0; border-left:0;border-bottom:0"
                    placeholder="e.g. Thomas" style="opacity:0.5"/>
                <x-input-error :messages="$errors->get('fname')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="lname" : value="Last Name"/>
                <x-text-input id="lname" class="block mt-2 w-full shadow" type="text" name="lname"
                    :value="old('lname')" required autocomplete="lname" style="border-top:0;border-right:0; border-left:0;border-bottom:0"
                    placeholder="e.g. Tsangaras" style="opacity:0.5"/>
                <x-input-error :messages="$errors->get('lname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" : value="Email"/>
                <x-text-input id="email" class="block mt-2 w-full shadow" type="email" name="email"
                    :value="old('email')" required autocomplete="username"
                    style="border-top:0;border-right:0; border-left:0;border-bottom:0" placeholder="e.g. mymail@mail.com" style="opacity:0.5"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>



            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" : value="Password"/>

                <x-text-input id="password" class="block mt-2 w-full shadow" type="password" name="password"
                    required autocomplete="new-password" style="border-top:0;border-right:0; border-left:0;border-bottom:0"
                    placeholder="min 8 character" style="opacity:0.5"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" : value="Confirm Password"/>

                <x-text-input id="password_confirmation" class="block mt-2 w-full shadow" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    style="border-top:0;border-right:0; border-left:0;border-bottom:0" placeholder="min 8 character" style="opacity:0.5"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <!-- Photo upload -->
            <!-- <div class="">
                <label for="img" class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"></label>
                <input name="img"
                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid  bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 border-gray-700"
                    type="file" id="img" style="border-top:0;border-right:0; border-left:0;border-bottom:0" placeholder="Photo"
                    required />
                <x-input-error :messages="$errors->get('img')" class="mt-2" />
            </div> -->
            <div class="flex items-center my-3">
                <input id="link-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    required>
                <label for="link-checkbox" class="ml-2 text-sm font-normal text-[#666565] dark:text-gray-300">Yes,I
                    understand and agree to the FYH <a href="#"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Terms of Services</a>.</label>
            </div>
            <button
                class="w-full p-3 rounded-lg font-bold text-base flex justify-center items-center bg-[#D1052C] text-white">{{ __('Create Account & Continue') }}</button>
        </form>

        @if($planId)
            <div class=" lg:mt-0">
                <div class="lg:w-[418px] lg:h-[166px]">
                    <div class="border-2 border-gray-300 rounded-xl p-3">
                        <h1 class="font-bold text-xl ml-4">Order Summary</h1>
                        <div class="flex mt-2">
                            <h1 class="pl-4 uppercase font-medium text-sm">
                                @if ($planId !== null)
                                    {{ $planId->name }}
                                @endif - Online Payment...
                            </h1>
                            <h1 class="ml-auto uppercase font-medium text-sm">
                                @if ($planId !== null)
                                    {{ $planId->currency }}
                                    @endif @if ($planId !== null)
                                        {{ $planId->price }}
                                    @endif
                            </h1>
                        </div>
                        <div class="flex mt-2">
                            <h1 class="pl-4 font-medium text-sm">Other fee</h1>
                            <h1 class="ml-auto uppercase font-medium text-sm">
                                @if ($planId !== null)
                                    {{ $planId->currency }}.00
                                @endif
                            </h1>
                        </div>
                        <div class="flex mt-2">
                            <h1 class="pl-4 font-medium text-sm">Vat & Tax</h1>
                            <h1 class="ml-auto uppercase font-medium text-sm">
                                @if ($planId !== null)
                                    {{ $planId->currency }}. 00
                                @endif
                            </h1>
                        </div>
                        <hr class="mt-3 h-px my-1 bg-gray-700 border-0">
                        <div class="flex">
                            <h1 class="font-bold text-base ml-4">Total</h1>
                            <h1 class="ml-auto font-bold text-base">
                                @if ($planId !== null)
                                    {{ $planId->currency }}
                                    @endif @if ($planId !== null)
                                        {{ $planId->price }}
                                    @endif
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    </div>
</x-guest-layout>
