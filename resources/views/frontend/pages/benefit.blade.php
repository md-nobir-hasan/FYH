@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')
<div class="mx-36" style="font-family:'Poppins'">
    <h1 class="text-center text-5xl font-black mt-16"> 
         @if($benefitHeader !==null)     {{$benefitHeader->benefit_title}}         @endif
    </h1>
    <p class="text-center text-2xl font-normal">  @if($benefitHeader !==null)     {{$benefitHeader->benefit_subtitle}}         @endif </p>

    <!-- benifit section -->
        <div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">


            @if($Benefits->count() > 0)
              @foreach ($Benefits->slice(0, 6) as $item)
                  
<a  class=" px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <img src="{{'/storage/'.$item->image}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> {{$item->title}} </h5>
    <p class="font-medium text-sm dark:text-gray-400 text-center">
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
