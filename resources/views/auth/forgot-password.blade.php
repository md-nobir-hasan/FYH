<div class="">
<x-guest-layout>
    
    <div class="mt-[102px] "  style="height:100vh">
    <div class="shadow-xl  pb-[100%]">
    <div class="xl:px-[129px] px-3 xl:w-[584px] xl:h-[408px] pb-[28px] pt-[28px] bg-white mx-auto rounded-3xl">
    <a href="{{route('home')}}"> <img src="{{$setting->logo}}" alt="" class="h-8 w-24 mx-auto  mt-[-20px] pt-"> </a>
    <h1 class="text-[28px] font-semibold text-center mt-[37px]">
        Forgot Password?
    </h1>
    <p class="text-[16px] font-normal text-center">No worries,we'll send you reset instructions</p>
    <hr class="bg-black border mt-[10px]  mb-5">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }} " class=" mt-[30px]">
        @csrf

        <!-- Email Address -->
        <div class="mt-3">
            <x-input-label for="email" :value="__('Enter Your Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="mymail@mail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-5">
        <button class="w-full  p-3 rounded-lg flex justify-center hover:bg-[#FCEEF1] hover:text-[#D1052C] items-center bg-[#D1052C] text-white text-[16px] font-bold">{{ __('RESET PASSWORD') }}</button>
        </div>
    </form>
   <div class="text-center  mt-[10px] mb-[39px] font-medium text-sm">
   <a href="/login"><i class="fa-solid fa-arrow-left"></i>Back to log in</a>
   </div>
    </div>
    </div>
    </div>
</x-guest-layout>
</div>

