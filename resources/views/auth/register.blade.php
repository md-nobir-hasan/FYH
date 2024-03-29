<x-guest-layout>
<style>
   input::placeholder {
  opacity: 0.5;
}
</style>
    <div class="bg-white xl:w-[1320px] 2xl:h-[900px] mt-[107px] pt-[23px] mb-[158px] rounded-xl lg:mx-auto">
    <a href="{{ route('home') }}" class=" @if($planId) lg:mt-1  @endif">
        <img src="{{ $setting->logo }}" alt="" class=" h-[37px] w-[111px] md:ml-10 ml-2 lg:ml-[88px]">
    </a>
    @if($planId)
    <a href="/membership" class="">
        <button style="box-shadow: 1px 2px 2px 0px rgba(0, 0, 0, 0.20);" class="hover:bg-[#FCEEF1] hover:text-[#D1052C] rounded mb-4 text-[16px] font-bold text-[#848484] mt-4 w-[95px] py-2 border md:ml-10 ml-2 lg:ml-[88px]">
Back</button>
    </a>
    @endif
    <div class=" lg:flex lg:flex-row flex flex-col-reverse lg:mx-0 md:mx-10 mx-2"
        style="font-family: 'Poppins';">
        <form class=" lg:mr-[24px] lg:w-[702px] lg:mt-0 mt-5 lg:h-[700px] lg:ml-[88px]  border-gray-300 border-2 lg:col-span-2 p-10 rounded-xl" method="POST" action="{{ route('register') }}"

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
                class="w-full border border-[#000000] p-3 rounded-lg font-semibold flex justify-center items-center"><svg
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
            <div class="grid grid-cols-4 mt-[10px]">
                <hr class="h-px mt-5 bg-black col-span-1 border-0">
                <p class="col-span-2 flex justify-center items-center font-medium">or continue with email</p>
                <hr class="h-px mt-5 bg-black col-span-1 border-0">
            </div>


            <input type="hidden" name="planId"
                @if ($planId !== null) value="{{ $planId->plan_id }}" @endif>

            <!-- Name -->
            <div class="mt-[20px]">
                <x-input-label for="fname" : value="First Name"/>
                <x-text-input placeholder="e.g. Thomas" id="fname" class="block mt-1 w-full shadow placeholder-opacity-50" type="text" name="fname"
                    :value="old('fname')" required autocomplete="fname" style="border-top:0;border-right:0; border-left:0;border-bottom:0;"
                    />
                <x-input-error :messages="$errors->get('fname')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="lname" : value="Last Name"/>
                <x-text-input id="lname" class="block mt-2 w-full shadow" type="text" name="lname"
                    :value="old('lname')" required autocomplete="lname" style="border-top:0;border-right:0; border-left:0;border-bottom:0"
                    placeholder="e.g. Tsangaras"/>
                <x-input-error :messages="$errors->get('lname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" : value="Email"/>
                <x-text-input id="email" class="block mt-2 w-full shadow" type="email" name="email"
                    :value="old('email')" required autocomplete="username"
                    style="border-top:0;border-right:0; border-left:0;border-bottom:0;" placeholder="e.g. mymail@mail.com"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>



            <!-- Password -->
            <div class="mt-4">
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

            <!-- Confirm Password -->
            <div class="mt-4">
            <label class="relative" for="confirmPassword">
                <x-input-label for="password_confirmation" : value="Confirm Password"/>

                <x-text-input id="password_confirmation" class="block mt-2 w-full shadow" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    style="border-top:0;border-right:0; border-left:0;border-bottom:0" placeholder="min 8 character"/>
                    <svg onclick=confirmPasswordShow() xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-0 top-1/2 transform -translate-y-1/2 mt-3 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
</label>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <!-- Photo upload -->
            <!-- <div class="">
                <label for="img" class="mb-2 inline-block text-neutral-700 "></label>
                <input name="img"
                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid  bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none "
                    type="file" id="img" style="border-top:0;border-right:0; border-left:0;border-bottom:0" placeholder="Photo"
                    required />
                <x-input-error :messages="$errors->get('img')" class="mt-2" />
            </div> -->
            <div class="flex items-center my-3">
                <input id="link-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 "
                    required>
                <label for="link-checkbox" class="ml-2 text-sm font-normal text-[#666565] ">Yes,I
                    understand and agree to the FYH <a href="#"
                        class="text-blue-600  hover:underline">Terms of Services</a>.</label>
            </div>
            <button
                class="w-full p-3 rounded-lg font-bold text-base flex justify-center items-center hover:bg-[#F6CDD5] hover:text-[#D1052C] bg-[#D1052C] text-white">{{ __('Create Account & Continue') }}</button>
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
        const confirmPasswordShow=()=>{
            const pass=document.getElementById('password_confirmation')
            if(pass.type=== 'password'){
                pass.type='text'
            }
            else{
                pass.type='password'
            }
        }
    </script>
</x-guest-layout>
