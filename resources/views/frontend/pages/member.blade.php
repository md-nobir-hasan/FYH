@extends('frontend.layout.app')
@push('title')
    Membership
@endpush
@section('content')

  
   

    
@if(Session::has('error'))

    @endif
        <div class=" h-[815px] bg-[#F5F5F5] mx-40 rounded-xl mt-[107px] grid grid-cols-2">
            <div class="col-span-1">
                <img class="ml-[63px] mt-[23px] mb-[58px]" src="/images/Logo.png" alt="" />
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
                            leaving the country</span>
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
                <h3 class="text-center font-bold text-2xl m-2 bg-slate-100 uppercase text-red-600"> <span class="bg-blue-200 rounded-md">{{ Session::get('error') }}</span></h3>
                @foreach ($memberShips as $member)
                    <!-- card 1 -->
                    <div class="w-[472px] h-[280px] border-2 border-black rounded-lg mb-[32px] mt-5">
                        <div class="mt-[20px] ml-[14px]">
                            <!-- card 1 -->
                            <div class="flex justify-between mr-[16px]">
                                <div class="flex text-align items-center ">
                                    <input type="radio" class="accent-gray-300 w-[22px] h-[22px]">
                                    <p class="text-[25px] ml-2">{{ $member->name }}</p>
                                </div>
                                <h1 class="font-bold text-[25px]">{{ $member->price }}
                                    {{ $member->currency }}/ {{$member->interval_count}} {{ $member->billing_period }}</h1>

                            </div>
                            <div>
                                {!! $member->des !!}
                             
                            </div>
                        </div>
                        
                    </div>
                    <a  href="{{ route('checkout', $member->plan_id) }}"
                        class="text-center w-[472px] h-[48px] bg-[#D1052C] rounded-[10px] text-white text-[16px] font-bold px-5 py-3 m-2">
                           GET STARTED</a>
                @endforeach
           
            </div>
        </div>
    
@endsection
@push('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
@endpush