@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')
<div class="mx-36" style="font-family:'Poppins'">
    <h1 class="text-center text-5xl font-black mt-16">Benifits Of Living In Switzerland</h1>
    <p class="text-center text-2xl font-normal">Why is Switzerland so attractive for living and working?</p>

    <!-- benifit section -->
        <div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">


            @if($Benefits->count() > 0)
              @foreach ($Benefits->slice(0, 6) as $item)
                  
<a href="{{route('single.benefit', $item->slug)}}" class=" px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <img src="{{'/storage/'.$item->image}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
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
        </div>

    <!-- benifit section end -->

    <!-- design 2 card -->
    
    <div class="grid grid-cols-1 lg:grid-cols-2 mx-5 lg:mx-36 gap-5 mt-20">

        
        @if($Benefits->count() > 0)
        @foreach ($Benefits->slice(6, 10) as $item)
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img src="{{'/storage/'.$item->image}}" alt="" class="h-16 ml-2 w-16 mx-auto rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
        <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-extrabold tracking-tight  dark:text-white "> {{$item->title}}</h5>
            <p class="mb-3 text-justify font-normal text-sm">
                {{$item->description}}
            </p>
        </div>
    </a>
     
    @endforeach
    @endif
        

    <!-- design 2 card end -->

</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
