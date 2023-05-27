@extends('frontend.layout.app')
@push('title')
    Home
@endpush
<style>

     .editor h1{
          font-size: 36px;
          font-weight: 700px;
     }
     .editor h2{
          font-size: 30px;
          font-weight: 600px;
     }
     .editor h3{
          font-size: 24px;
          font-weight: 500px;
     }
     .editor h4{
          font-size: 18px;
          font-weight: 500px;
     }
     .editor h5{
          font-size: 14px;
          font-weight: 500px;
     }
</style>


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
                    <a href="{{route('login')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Hi, Nayeem how are you</h1>
                        </div>
                    </a>
                    <a href="{{route('member')}}">Go Member Page</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- navbar section -->
    <div class="mx-40" style="font-family: 'Montserrat';">

    <!-- hero section -->
        <div class="mt-16 grid grid-cols-2">
            <div class="editor">
                  @if($home !== null) {!! $home->details!!} @endif
            {{-- <h3 class="text-5xl font-bold">Do you want to move <br> in Switzerland ?</h3>
            <p class="font-semibold">At Fyh service you Can Find All Necessary information to take the Decision That can Change Your life</p>
            <h3 class="text-5xl font-bold mt-5">Already Relocated ?</h3>
            <p class="font-semibold">At FYH service You Can Find All Necessary Information to Integrate Into Switzerland</p> --}}
            <div class="flex">
                <a href="{{route('member')}}">
            <div class="mt-10 text-white w-72 rounded flex justify-center items-center h-16 font-semibold" style="background-color:#D1052C"><button class="mr-1 font-lg">Join FYH now</button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>
        </div>
    </a>
    <a href="{{route('about')}}">
            <p class="mt-10 flex justify-center items-center ml-12 font-semibold underline decoration-3" style="color:
                #D1052C">Learn More</p>
                </a>

            </div>
            </div>
            <!-- make changing section -->
            <div>
                @if($home !== null) <img src="{{'/storage/'.$home->image}}" alt="" class="mt-[-20px] lg:w-[450px]"> @endif
            </div>
            <!-- make changing section end -->
        </div>
        <!-- Benifit section start -->

        <div class="mt-40">
            <div>
                <h1 class="text-4xl font-bold text-center"> @if($allTitle !==null) {{$allTitle->benefit_title}} @endif </h1>
                <p class=" text-center text-lg font-normal"> @if($allTitle !==null) {{$allTitle->benefit_subtitle}} @endif</p>
            </div>
            <!-- benifit card section -->
            <div class="grid grid-cols-3 gap-8 mt-10">

                @if($benefits->count() > 0)

                @foreach ($benefits as $item)
                    
              

            <a href="#" class="block w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{'/storage/'.$item->image}}" alt="{{$item->title}}" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> {{$item->title}} </h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">
                  {{$item->description}}
            </p>
            </a>
            @endforeach
            @endif
         
          

            </div>
            <!-- benifit card section end-->
        </div>
        <!-- Benifit section end -->

        <!-- Success section start -->
        <div class="mt-10">
            <h1 class="font-bold text-4xl text-center"> @if($allTitle !==null) {{$allTitle->story_title}} @endif</h1>
            <p class="text-lg text-center font-normal"> @if($allTitle !==null) {{$allTitle->story_subtitle}} @endif</p>

            <!-- success card  -->
            <div class="grid grid-cols-3 gap-8 mt-10">

                @if($stories->count() > 0)
                @foreach ($stories->slice(1,3) as $item)
                    
               
            <a href="{{route('single-story',$item->slug)}}" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="{{'/storage/'.$item->image}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold"> {{$item->name}} </h1>
            <p class="font-medium text-lg"> {{$item->profession}} </p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm dark:text-gray-400"> 
                        {{Str::limit($item->description, 250)}}    
            </p>
            </a>
            @endforeach
            @endif
      
          
            </div>
            <!-- success card end -->
        </div>
        <!-- Success section end -->

        <!-- services section start -->
                <div class="mt-20">
                    <h1 class="text-4xl font-bold text-center"> @if($allTitle !==null) {{$allTitle->service_title}} @endif</h1>
                    <p class="text-lg font-normal text-center"> @if($allTitle !==null) {{$allTitle->service_subtitle}} @endif</p>
                    
                    <!-- services here -->
                    <div class="mt-10 grid grid-cols-4 mx-auto">
                    
                        @if($services->count() > 0)
                        @foreach ($services as $item)
 
                            <div>
                                <img src="{{'/storage/'.$item->image}}" alt="" class="h-56 w-56  rounded-full p-16 mr-16" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                <h1 class="text-center text-2xl font-bold mt-5 mr-5"> {{$item->title ?? null}} </h1>
                                <p class="font-normal text-justify w-56">
                                                {{Str::limit($item->description,200)}}    
                                </p>
                               </div>
                                     
                   
                        @endforeach
                        @endif
                  
                    </div>
                    <!-- services end -->
                </div>
        <!-- services section end -->
    </div>
    <!-- Testimonial section start -->
    <div class="lg:mx-36 mt-10">
            <h1 class="text-center text-4xl font-bold">Testomonials</h1>
            <p class="text-center font-normal text-lg">What Our satisfied customer says about our platform</p>
            <!-- content testimonial -->

            <div class="my-5">
                <div class="grid grid-cols-3">

               @foreach ($stories->slice(0,1) as $item)
               <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-24">
                <a href="#">
                    <img class="rounded-t-lg p-5" src="{{'/storage/'.$item->image}}" alt="" />
                     </a>
                <div>
                <a href="#">
                <h5 class=" text-2xl font-bold text-center"> {{$item->name}} </h5>
                 </a>
                 <p class=" font-semibold text-center"> {{$item->profession}} </p>
                </div>
        </div>
               @endforeach
        <!-- right side content -->
        <div class="ml-10 col-span-2">
            <img src="{{asset('/images/love.png')}}" />
            <img class="mt-3" src="{{asset('/images/ratings.png')}}" />

            @foreach ($stories->slice(0,1) as $item)
            <p class="font-normal text-lg text-justify">
                {{$item->description}}
            </p>
            @endforeach
           
            <div class="flex gap-4 truncate scroll mt-10">
                     @foreach ($stories->slice(4,8) as $item)
                     <img src="{{'/storage/'.$item->image}}" alt="" class="h-12 w-12 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                    
                     @endforeach
            </div>
        </div>
        <!-- right side content end -->

                </div>
            </div>
            <!-- content testimonial end -->
    </div>

    <!-- Testimonial section end -->
@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
