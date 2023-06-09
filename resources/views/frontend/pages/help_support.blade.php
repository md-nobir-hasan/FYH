@extends('frontend.layout.app')
@push('title')
    Help and support
@endpush
@section('content')
<div class="lg:mx-40" style="font-family:'Poppins'">
<section class="mt-[52px]">
<div>

   <a href="{{route('ticket')}}">
    <img src="{{'/storage/'. $tittles->help_image}}" alt="" class=""/>
</a>

</div>
<div class="lg:-mx-40" style="background:url('/images/reviewbg.png');background-repeat:no-repeat;background-size:">
<div class="mt-[100px] lg:mx-24 lg:pt-8">
    <h1 class="text-5xl font-bold text-center"> @if($tittles !==null)  {{$tittles->help_title}} {{auth()->user()->fname}} @endif</h1>
    <p class="text-center text-2xl font-normal uppercase"> @if($tittles !==null)  {{$tittles->help_subtile}}  @endif </p>
    <div class="mt-10 mb-[-100px]">

            <!-- benifit card section -->
            <div class="lg:mx-24 grid grid-cols-3 gap-6 mt-10">

         @if($helps->count() > 0)
         @foreach ($helps as $help)
             
      
       <div class="h-56 w-full px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{'/storage/'. $help->image}}" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> {{$help->title}} </h5>
            <p class="font-medium text-sm text-justify">
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
