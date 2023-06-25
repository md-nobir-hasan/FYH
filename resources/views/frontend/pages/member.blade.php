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
        <div class=" pt-[107px]" style="background:url(/images/successbg.png);background-size:100%;background-repeat:no-repeat; background-position:0 50%;background-color:#FAF7F7">
            
            <div class=" h-[815px] bg-white border lg:mx-40 rounded-xl " style="font-family:'Poppins';">
            <a href="{{ route('home') }}">
        <img src="{{ $setting->logo }}" alt="" class="lg:ml-20 my-5 h-8 w-24">
    </a>
            <button class="px-6 py-3 text-base shadow-lg lg:ml-20 my-4 rounded-lg">Back</button>

            <div class="grid grid-cols-2 gap-5">
            <div class="col-span-1">
                <div class="ml-[83px] mb-[40px]">

                    <h1 class="text-[28px] font-medium">  @if($opportunity !==null)   {{$opportunity->title}}   @endif</h1>

                    <h1 class="font-bold text-5xl text-[#0BC040]">
                       @if($opportunity !==null)   {{$opportunity->heading}}   @endif

                    </h1>
                    <h1 class="text-[28px] font-medium">
                        @if($opportunity !==null)   {{$opportunity->subtitle}}   @endif
                    </h1>
                </div>
                <div class="ml-[110px] -mt-5">
                
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
              
                </div>
            </div>
            <!-- right side -->
            <div class="col-span-1 mr-[60px]">
                <h3 class="text-center font-bold text-2xl m-2 bg-slate-100 uppercase text-red-600"> <span class="bg-blue-200 rounded-md">{{ Session::get('error') }}</span></h3>
              
                <form action="{{ route('web.billing') }}" method="post">
                    @csrf
                    @foreach ($memberShips as $key=>$member)
                 
                    <!-- card 1 -->
                    <div class="w-[472px] h-[280px] border-2 border-black rounded-lg mb-[32px] mt-5">
                        <div class="mt-[20px] ml-[14px]">
                            <!-- card 1 -->
                            <div class="flex justify-between mr-[16px]">
                                <div class="flex text-align items-center ">

                                    <input type="radio" id="{{$key}}" name="plan" value="{{$member->plan_id}}" class="accent-gray-300 w-[22px] h-[22px]">
                                    <p class="text-[25px] font-bold ml-2"> <label for="{{$key}}">{{ $member->name }}</label> </p>

                                </div>
                                <h1 class="font-bold text-[25px]">{{ $member->price }}
                                    {{ $member->currency }}/ {{$member->interval_count}} {{ $member->billing_period }}</h1>

                            </div>
                            
                            <div class="">
                                {!! $member->des !!}
                             
                            </div>
                        </div>
                        
                    </div>
              
                   
                @endforeach
                <button type="submit"
                class="text-center w-[472px] h-[48px] bg-[#D1052C] rounded-[10px] text-white text-[16px] font-bold px-5 py-3 m-2">
                   GET STARTED</button>
                </form>
           
            </div>
            </div>
            </div>
        </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>


</body>
</html>

