<!DOCTYPE html>
<html lang="en">
<head>
  <title>Membership</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
@vite(['resources/css/app.css','resources/js/app.js'])

<body>
@if(Session::has('error'))

    @endif
        <div class=" pt-[107px] pb-[10vh]" style="background:url(/images/loginimg.png);background-size:100% ;background-repeat:no-repeat;background-color:#FAF7F7;">

            <div class=" pb-10 mb-10 bg-white border w-[1320px] mx-auto rounded-2xl h-[815px]" style="font-family:'Poppins';">
            <a href="{{ route('home') }}">
        <img src="{{ $setting->logo }}" alt="" class="lg:ml-[62px] mt-[22px] h-[38px] w-[112px]">
    </a>
            
            <div class="grid grid-cols-4 mt-[232px]">
            <div class="col-span-2">
                <div class="ml-[72px]">

                    <!-- <h1 class="text-[50px] font-bold text-[#D1052C] w-[604px]">  @if($opportunity !==null)   {{$opportunity->title}}   @endif</h1> -->
                    <h1 class="text-[50px] font-bold text-[#D1052C]">Select your Pricing plan</h1>

                </div>
                <div class='w-[604px]'>
                    <p class="text-[20px] ml-[72px] text-[#212427] font-normal text-justify">With this membership, you can share your story and access other people's stories on why they want to relocate to Switzerland and how they managed to do so successfully.</p>
                </div>
                <!-- <div class="ml-[110px] -mt-5">

                    {{-- <div class="font-normal mt-5 w-4/12 mx-auto" style="text-align: center"> --}}
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }}  {{ $opportunity->opOne }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }}  {{ $opportunity->opTwo }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opThree }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opFour }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opFive }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opSix }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opSeven }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opEight }} @endif</p>
                        <p class="text-left font-normal text-xl mb-1"> @if($opportunity !==null) {{ $opportunity->icon }} {{ $opportunity->opNine }} @endif</p>

                    {{-- </div> --}}

                </div> -->
            </div>
            <!-- right side -->
            <div class="col-span-2 -mt-[29px] ml-[50px] mr-[72px]">
                <h3 class="text-center font-bold text-2xl m-2 bg-slate-100 uppercase text-red-600"> <span class="bg-blue-200 rounded-md">{{ Session::get('error') }}</span></h3>

                <form action="{{ route('web.billing') }}" method="post">
                    @csrf
                    @foreach ($memberShips as $key=>$member)

                    <!-- card 1 -->
                    <div class=" border-2 border-[#212427] rounded-lg mt-5">
                        <div class="mt-[27px] ml-[14px] mb-[20px]">
                            <!-- card 1 -->
                            <div class="flex justify-between mr-[16px]">
                                <div class="flex text-align items-center ">

                                    <input type="radio" id="{{$key}}" name="plan" value="{{$member->plan_id}}" class="accent-gray-300 w-[22px] h-[22px]">
                                    <p class="text-[24px] font-semibold text-[#212427] ml-2"> <label for="{{$key}}">{{ $member->name }}</label> </p>

                                </div>
                                <h1 class="font-semibold text-[24px] text-[#212427]">{{ $member->price }}
                                    {{ $member->currency }}/ {{$member->interval_count}} {{ $member->billing_period }}</h1>

                            </div>

                            <div class="">
                                <!-- {!! $member->des !!} -->
                                <p class="text-sm ml-5">You can pay monthly and cancel the subscription.</p>
                            </div>
                        </div>

                    </div>


                @endforeach
                <div class="mt-[20px]">
                <button type="submit"
                class="text-center w-full bg-[#D1052C] rounded-[10px] text-white text-[16px] font-bold px-5 py-3 ">
                   GET STARTED</button>
                </div>
                </form>

            </div>
            </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>


</body>
</html>

