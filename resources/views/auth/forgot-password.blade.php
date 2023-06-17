<div class="">
<x-guest-layout>
    
    <div class="p-10 sm:max-w-md bg-white mx-auto">
    <a href="{{route('home')}}"> <img src="{{$setting->logo}}" alt="" class="h-8 w-24 mx-auto mb-8 mt-[-20px]"> </a>
    <h1 class="text-2xl font-bold text-center">
        Forgot Password?
    </h1>
    <p class="text-sm text-center font-medium">No worries,we'll send you reset instructions</p>
    <hr class="bg-black border mb-5">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-3">
            <x-input-label for="email" :value="__('Enter Your Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="mymail@mail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
        <button class="w-full  p-3 rounded-lg font-semibold flex justify-center items-center bg-[#D1052C] text-white text-sm">{{ __('RESET PASSWORD') }}</button>
        </div>
    </form>
   <div class="text-center mt-3 font-medium text-sm">
   <a href="/login"><i class="fa-solid fa-arrow-left"></i>Back to log in</a>
   </div>
    </div>
</x-guest-layout>
</div>

