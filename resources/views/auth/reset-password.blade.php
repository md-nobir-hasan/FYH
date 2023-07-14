<x-guest-layout>
    <div class="mt-[80px] pt-[12vh]">
    <div class="shadow-xl mx-40 pb-[20vh]">
    <form method="POST" action="{{ route('password.store') }}" class="border mx-auto px-20 bg-white rounded-2xl w-[584px] h-[470px]">
        @csrf

        <div class="flex justify-center items-center mt-3">
            <img src="/images/fyhlogo.png" alt="" class="h-10 w-28"/>
        </div>
        <h1 class="text-2xl font-semibold text-center">Set New Password</h1>
        <p class="text-lg font-medium text-center">Must be at least 8 characters</p>
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="lg:mx-8 mt-3">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-3 lg:mx-8">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="min 8 character"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-3 lg:mx-8">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="min 8 character"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mb-3 lg:mx-8 mt-4">
            <x-primary-button class="bg-rose-600 w-full py-3 flex justify-center items-center">
                {{ __('set Password') }}
            </x-primary-button>
        </div>
        <a href="/login">
            <div class="flex justify-center items-center mb-6">
                <div class="mr-2"><svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.00007 4.56818H14" stroke="#060606"/>
<path d="M3.97913 1L0.999977 4.56821L3.97913 7.92653" stroke="#060606"/>
</svg></div>
<p>Back to login</p>
            </div>
        </a>
    </form>
    </div>
    </div>
</x-guest-layout>
