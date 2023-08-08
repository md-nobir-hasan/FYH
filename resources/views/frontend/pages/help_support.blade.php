@extends('frontend.layout.app')
@push('title')
    Help and support
@endpush
@section('content')
<div class="" style="font-family:'Poppins'">
<section class="mt-[65px]">
<div>

   <a href="{{route('ticket')}}">
    <img src="{{'/storage/'. $tittles->help_image}}" alt="" class="w-[1320px] mx-auto"/>
</a>

</div>
<div class="" style="background:url('/images/reviewbg.png');background-repeat:no-repeat;background-size:100% 397px">
<div class="mt-[50px]  lg:pt-[28px]">
    <h1 class="text-[50px] font-bold text-center"> @if($tittles !==null)  {{$tittles->help_title}} {{auth()->user()->fname}} @endif</h1>
    <p class="text-center text-2xl font-normal uppercase"> @if($tittles !==null)  {{$tittles->help_subtile}}  @endif </p>
    <div class=" mb-[-100px]">

            <!-- benifit card section -->
            <div class="w-[1320px] mx-auto grid grid-cols-3 gap-6 mt-[30px]">

         @if($helps->count() > 0)
         @foreach ($helps as $help)
             
      
       <div class="h-[232px] w-[424px] px-[80px] py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
            <img src="{{'/storage/'. $help->image}}" alt="" class="h-[80px] w-[80px] mx-auto mt-[16px] rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-xl font-semibold mt-[5px] tracking-tight text-gray-900  text-center"> {{$help->title}} </h5>
            <p class="font-medium text-sm text-justify mt-[5px]">
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
