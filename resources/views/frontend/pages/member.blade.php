@extends('frontend.layout.app')
@push('title')
    Membership
@endpush
@section('content')
    <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="">
                <div class="">
                    <h1>Member page</h1>
                </div>
            </div>
        </div>
    </div> -->
    <body class="bg-[#F5F5F5]" style="font-family: 'Montserrat';">
    <div
      class=" h-[815px] bg-[#F5F5F5] mx-40 rounded-xl mt-[107px] grid grid-cols-2"
    >
      <div class="col-span-1">
        <img
          class="ml-[63px] mt-[23px] mb-[58px]"
          src="/images/Logo.png"
          alt=""
        />
        <div class="ml-[83px] mb-[40px]">
          <h1 class="text-xl font-bold">Welcome to FYH membership page</h1>
          <h1 class="font-extrabold text-4xl text-[#0BC040]">
            Select your Best plan
          </h1>
          <h1 class="text-xl font-bold">
            What You Get when You become a Member of <br />
            the FYH:
          </h1>
        </div>
        <div class="ml-[110px]">
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> High standard of living
            Geographical location
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> Beautiful nature and opportunity
            to relax without <br /><span class="ml-5">
              leaving the country</span
            >
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> Medicine of the highest level
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> Education based on high standards
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> Political neutrality
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> Types of visas and residence
            permits
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> How to find a job before you move
            to Switzerland
          </p>
          <p class="mb-[17px]">
            <i class="fa-solid fa-check"></i> If You are moving with a family
          </p>
        </div>
      </div>
      <!-- right side -->
      <div class="col-span 1 mt-[90px] mr-[60px]">
        <!-- card 1 -->
        <div class="w-[472px] h-[280px] border-2 border-black rounded-lg mb-[32px]">
          <div class="mt-[20px] ml-[14px]">
            <!-- card 1 -->
          <div class="flex justify-between mr-[16px]">
              <div class="flex text-align items-center ">
                <input type="radio" class="accent-gray-300 w-[22px] h-[22px]" >
              <p class="text-[25px] ml-2">Starter</p>
              </div>
              <h1 class="font-bold text-[25px]">29 CHF/mo.</h1>

          </div>
          <p class="w-[236px] ml-[30px]">It’s the starter package for new comer. You can pay monthly and cancel anytime...</p>
          <p class="w-[400px] border-t-2 border-black mx-[30px] my-2"></p>
         <div class="text-[14px] ml-[40px]">
          
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Access to A limited selection of Services  
          </p>
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Access to A limited selection of Services  
          </p>
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Access to Community Discussion Forum
          </p>
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Customer Support via Email
          </p>
         </div>
          </div>
        </div>
        <!-- card-2 -->
        <div class="w-[472px] h-[280px] border-2 border-black rounded-lg mb-[32px]">
          <div class="mt-[20px] ml-[14px]">
            <!-- card 1 -->
          <div class="flex justify-between mr-[16px]">
              <div class="flex text-align items-center ">
                <input type="radio" class="accent-gray-300 w-[22px] h-[22px]" >
              <p class="text-[25px] ml-2">Pro</p>
              </div>
              <div>
                <h1 class="font-bold text-[25px]">17 CHF/mo.</h1>
                
              </div>


          </div>
          <div class="flex justify-between">
            <p class="w-[236px] ml-[30px]">It’s the starter package for new comer. You can pay monthly and cancel anytime...</p>
          <h1 class="font-bold text-[20px] line-through text-[#848484] mr-[16px]">199 CHF/yr.</h1>
          </div>
          <p class="w-[400px] border-t-2 border-black mx-[30px] my-2"></p>
         <div class="text-[14px] ml-[40px]">
          
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i>Access to A limited selection of Services
          </p>
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Access to A limited selection of Services
          </p>
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Access to Community Discussion Forum
          </p>
          <p class="mb-[6px]">
            <i class="fa-solid fa-check"></i> Customer Support via Email
          </p>
         </div>
          </div>
        </div>
        <button class="text-center w-[472px] h-[48px] bg-[#D1052C] rounded-[10px] text-white text-[16px] font-bold">GET STARTED</button>
      </div>
    </div>
  </body>
@endsection
@push('js')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
@endpush
