@extends('frontend.layout.app')
@push('title')
    Help and support
@endpush
@section('content')
<style>
    .hbg{
        background:url('/images/reviewbg.png');background-repeat:no-repeat;background-size:100% 402px
    }
    @media (min-width: 0px) and (max-width: 1023px){
        .hbg{
            background:none
        }
    }
    div:nth-child(1)>img{
       padding:19px;
    }
    div:nth-child(2)>img{
       padding:19px 21px 19px 21px;
    }
    div:nth-child(3)>img{
       padding:19px;
    }
    div:nth-child(4)>img{
       padding:17px 20px;
    }
    div:nth-child(5)>img{
       padding:19px;
    }
    div:nth-child(6)>img{
       padding:19px;
    }
</style>
<div class="" style="font-family:'Poppins'">
<section class="md:mt-[65px]">
<div class="lg:mx-10 2xl:mx-0">

   <a href="{{route('ticket')}}" >
    <img src="{{'/storage/'. $tittles->help_image}}" alt="" class="2xl:w-[1320px] w-full lg:h-[299px] md:h-[220px] mx-auto"/>
</a>

</div>
<div class="hbg" style="">
<div class="mt-[50px]  lg:pt-[28px]">
    <h1 class="lg:text-[50px] text-[36px] leading-[40px] font-bold text-center lg:leading-normal"> @if($tittles !==null)  {{$tittles->help_title}} {{auth()->user()->fname}} @endif</h1>
    <p class="text-center lg:text-[24px] text-[18px] leading-normal font-normal "> @if($tittles !==null)  {{$tittles->help_subtile}}  @endif </p>
    <div class=" mb-[-100px]">

            <!-- benifit card section -->
            <div class="2xl:w-[1320px] 2xl:mx-auto lg:mx-10 mx-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-[30px]">

         @if($helps->count() > 0)
         @foreach ($helps as $help)
             
      
       <div class="h-[232px] overflow-hidden w-full 2xl:w-[424px] px-[80px] py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
            <img src="{{'/storage/'. $help->image}}" alt="" class="h-[80px] w-[80px] mx-auto mt-[16px] rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class=" text-xl font-semibold mt-[5px] tracking-tight text-gray-900  text-center"> {{$help->title}} </h5>
            <p class="font-medium text-sm xl:mx-[-25px] lg:mx-[-35px] mx-[-40px] text-justify  mt-[5px]">
                   {{$help->description}}
            </p>
        </div>
            @endforeach
          @endif
    
  
            </div>
</div>
            <!-- benifit card section end-->
        </div>
</div>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
