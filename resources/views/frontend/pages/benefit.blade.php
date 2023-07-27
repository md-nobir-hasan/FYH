@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')
<div class="mt-[104px] w-[1320px] mx-auto" style="font-family:'Poppins'">
    <h1 class="text-center text-[50px] font-bold"> 
         @if($benefitHeader !==null)     {{$benefitHeader->benefit_title}}         @endif
    </h1>
    <p class="text-center text-2xl font-normal">  @if($benefitHeader !==null)     {{$benefitHeader->benefit_subtitle}}         @endif </p>

    <!-- benifit section -->
        <div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5">


            @if($Benefits->count() > 0)
              @foreach ($Benefits->slice(0, 6) as $item)
                  
<a  class="h-[232px] w-[424px] bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 overflow-hidden">
    <img src="{{'/storage/'.$item->image}}" alt="" class="h-[80px] w-[80px] mt-4 mx-auto rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <h5 class="mt-[10px] text-[20px] font-semibold tracking-tight text-[#212427] dark:text-white text-center"> {{$item->title}} </h5>
    <p class="font-normal mt-[10px] mx-[39.5px] text-sm text-[#212427] text-center">
         {{Str::limit($item->description,250)}}
    </p>
    </a>
              @endforeach
            @endif


</div>
<!-- benifit card section end-->
</div>
        </div>

    <!-- benifit section end -->

   

</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
