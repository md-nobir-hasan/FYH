@extends('frontend.layout.app')
@push('title')
    Membership
@endpush
@section('content')
        <div class=" h-[815px] border mx-40 rounded-xl mt-[107px]  shadow-xl">

            <div class="text-center text-2xl font-bold mt-3 text-[red]">
                <h1>Your Payment Session Expired, Please Pay!</h1>
            </div>

            <div class="mt-[90px] text-center">
                <h3 class="text-center font-bold text-2xl m-2 bg-slate-100 uppercase text-red-600"> <span class="bg-blue-200 rounded-md">{{ Session::get('error') }}</span></h3>
                <form action="{{route('paypal.checkout')}}" method="post">
                    @csrf
                   <div class="flex justify-center">
                        @foreach ($memberShips as $key=>$member)
                            <!-- card 1 -->
                            <div class="border-2 border-black rounded-lg mb-[32px] mt-5 mr-1">
                                <div class="mt-[20px] ml-[14px]">
                                    <!-- card 1 -->
                                    <div class="flex justify-between mr-[16px]">
                                        <div class="flex text-align items-center ">
                                            <input type="radio" id="{{$key}}" @checked($member->id == $ct_id) name="plan" value="{{$member->plan_id}}" class="accent-gray-300 w-[22px] h-[22px]">
                                            <p class="text-[25px] ml-2"> <label for="{{$key}}">{{ $member->name }}</label> </p>
                                        </div>
                                        <h1 class="font-bold text-[25px]">{{ $member->price }}
                                            {{ $member->currency }}/ {{$member->interval_count}} {{ $member->billing_period }}</h1>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="total" value="{{$member->price}}">
                            <input type="hidden" name="plan_id" value="{{$member->id}}">
                        @endforeach
                   </div>
                <button type="submit"
                class="text-center w-[472px] h-[48px] bg-[#D1052C] rounded-[10px] text-white text-[16px] font-bold px-5 py-3 m-2">
                   Pay</button>
                </form>
            </div>
        </div>
@endsection
@push('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
@endpush
