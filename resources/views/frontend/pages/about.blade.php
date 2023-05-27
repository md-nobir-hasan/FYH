@extends('frontend.layout.app')
@push('title')
    About
@endpush
@section('content')
<style>

iframe{
         width: 80% !important;
         margin: auto;
         border-radius: 1%;
}

</style>






<div style="font-family:'Poppins'" class=" px-10 py-5 mx-auto">
    <h1 class="text-center text-5xl font-black mt-10">
        @if($about!==null)  {{$about->title}}  @endif    
    </h1>
    <p class="text-center text-xl font-normal"> 
        @if($about!==null)  {{$about->title_description}}  @endif      
    </p>
    <h1 class="text-center text-5xl font-black mt-10">   @if($about!==null)  {{$about->heading}}  @endif  </h1>
    <p class="text-center text-xl font-normal my-5">
        @if($about!==null)  {{$about->heading_description}}  @endif
    </p>



    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mx-2 md:mx-10 lg:mx-20">
  
        @if($about->images!==null)
        @foreach (json_decode($about->images)  as $item)
             <img src="{{'/storage/'.$item}}" alt="" class="rounded-lg"  style="width: 100%; height: 180px;">
          
        @endforeach
        @endif
    </div>

    <p class="lg:mx-48 mx-20 mt-4 text-justify text-sm font-normal">
        @if($about!==null)  {{$about->images_description}}  @endif     
    </p>

    {{-- <video height="240" controls class="lg:mx-48 mt-5 mx-20 md:w-[600px] lg:w-[960px]">
  <source src="movie.mp4" type="video/mp4">
</video> --}}

        <div class=" mt-5 md:w-[600px] lg:w-[960px] mx-auto" >
            @if($about!==null)  {!!$about->youtube !!}  @endif   
        </div>


<div class="mt-10 lg:mx-48 mx-20 px-10 py-5 " style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    @if($about!==null)  {!!$about->youtube_description !!}  @endif   
  </div>


  <div class="mt-5 lg:mx-36 mx-10 grid lg:grid-cols-3 grid-cols-1">
    @if($about!==null)   <img src="{{'/storage/'. $about->first_image}}" alt="" class=""> @endif    
    <div class="lg:mt-7 lg:ml-5 col-span-2">
        @if($about!==null)  {!!$about->first_image_story!!}  @endif   
    </div>
  </div>
  <div class="mt-5 lg:mx-36 mx-10 grid lg:grid-cols-3 grid-cols-1">
  <div class="lg:mt-7 lg:mr-5 col-span-2">
    @if($about!==null)  {!!$about->second_image_story!!}  @endif  
    </div>
    @if($about!==null)    <img src="{{'/storage/'. $about->second_image}}" alt="" class=""> @endif  
    
  </div>

  <!-- Success section start -->
  <div class="mt-10">
            <h1 class="font-bold text-4xl text-center">What Our Customer Says</h1>
            <p class="text-lg text-center font-normal">Here’s all of the successful stories of our cusomers</p>

            <!-- success card  -->
            <div class="grid lg:grid-cols-3 grid-cols-1 lg:mx-36 mx-10 mt-10">

           @if($stories->count() > 0)
           @foreach ($stories as $item)
               
         
            <div class="lg:mb-1 mb-5">
                <a href="#" class="block w-80  px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex">
                <img src="{{'/storage/'. $item->image}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                <div class="ml-2">
                <h1 class="text-2xl font-bold"> {{$item->name}} </h1>
                <p class="font-medium text-lg"> {{$item->profession}} </p>
                </div>
                </div>
                <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                <p class="font-medium text-sm dark:text-gray-400">
                     {{$item->description}}    
                </p>
                </a>
            </div>
            @endforeach
           @endif
           
            </div>
            <!-- success card end -->
        </div>
        <!-- Success section end -->


        <div class="mt-10">
            <h1 class="font-bold text-4xl text-center">We Are Excited For your Story</h1>
            <p class="font-normal text-xl text-center text-[#D1052C]">Our community runs on voices like yours. It keep us going, and keeps us grounded.<br>Tell us like it is. What's your story?</p>
        </div>
        <div class="text-center mt-3"><button class=" font-semibold text-white pl-5 pr-5 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="/membership">Share Your Story</a></button></div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
