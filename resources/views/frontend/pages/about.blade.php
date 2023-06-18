@extends('frontend.layout.app')
@push('title')
    About
@endpush
@section('content')
<style>

iframe{
         width: 85% !important;
         margin: auto;
         border-radius: 10px;
         padding: 10px;
         background: #ECF9FF;
         box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

</style>






<div  style="width: 90% ;margin: auto;font-family:'Poppins'">
    <h1 class="text-center text-5xl font-black mt-10 ">
        @if($about!==null)  {{$about->title}}  @endif    
    </h1>
    <p class="text-center text-xl font-medium capitalize my-2"> 
        @if($about!==null)  {{$about->title_description}}  @endif      
    </p>
    <h1 class="text-center text-5xl font-black mt-10 w-8/12 mx-auto ">   @if($about!==null)  {!!$about->heading !!}  @endif  </h1>

    <p class="text-center text-xl font-normal my-5 w-8/12 mx-auto">
        @if($about!==null)  {{$about->heading_description}}  @endif
    </p>



    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mx-2 md:mx-10 lg:mx-20">
  
        @if($about->images!==null)
        @foreach (json_decode($about->images)  as $item)
             <img src="{{'/storage/'.$item}}" alt="" class="rounded-lg p-1"  style="width: 100%; height: 180px;">
          
        @endforeach
        @endif
    </div>

    <p class=" lg:mx-52 mt-4 text-justify text-sm font-normal">
        @if($about!==null)  {{$about->images_description}}  @endif     
    </p>

    {{-- <video height="240" controls class="lg:mx-48 mt-5 mx-20 md:w-[600px] lg:w-[960px]">
  <source src="movie.mp4" type="video/mp4">
</video> --}}

        <div class=" mt-5 md:w-[600px] lg:w-[960px] mx-auto" >
            @if($about!==null)  {!!$about->youtube !!}  @endif   
        </div>


<div class="mt-10 lg:mx-48 mx-20 px-10 py-5 " style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <!-- @if($about!==null)  {!!$about->youtube_description !!}  @endif    -->
    <h1 class="font-bold text-lg">“We’re constantly exploring, inventing, and optimizing personal transformation to ultimately unite our species, save our planet, and usher in a new golden age for humanity.”</h1>
    <p>- Thomas Tsangaras, Founder of FYH</p>
  </div>


  <div class="mt-10 lg:mx-36 mx-10 grid lg:grid-cols-3 grid-cols-1">
    <!-- {{'/storage/'. $about->first_image}} -->
    @if($about!==null)   <img src="/images/story2.png" alt="" class=""> @endif    
    <div class="lg:mt-4 lg:ml-5 col-span-2">
    <h1 class=" text-4xl font-black">At FYH, learning is a lifelong adventure</h1>
        @if($about!==null)  {!!$about->first_image_story!!}  @endif   
    </div>
  </div>
  <div class="mt-5 lg:mx-36 mx-10 grid lg:grid-cols-3 grid-cols-1">
  <div class="lg:mt-7 lg:mr-5 col-span-2">
    <!-- {{'/storage/'. $about->second_image}} -->
    <h1 class=" text-4xl font-black">At FYH, learning is a lifelong adventure</h1>
    @if($about!==null)  {!!$about->second_image_story!!}  @endif  
    </div>
    @if($about!==null)    <img src="/images/story3.png" alt="" class=""> @endif  
    
  </div>

  <!-- Success section start -->
  <div class="mt-10">
            <h1 class="font-bold text-4xl text-center">What Our Customer Says</h1>
            <p class="text-lg text-center font-normal">Here’s all of the successful stories of our cusomers</p>

            <!-- success card  -->
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-10  lg:mx-20 mt-10">

           @if($stories->count() > 0)
           @foreach ($stories as $item)
               
         
            <div class="lg:mb-1 mb-5">
                <a href="#" class="block lg:w-80 lg:h-64  px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex">
                <img src="{{'/storage/'. $item->image}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                <div class="ml-2">
                <h1 class="text-2xl font-bold"> {{$item->name}} </h1>
                <p class="font-medium text-lg"> {{$item->profession}} </p>
                </div>
                </div>
                <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                <p class="font-medium text-sm dark:text-gray-400">
                     {{Str::limit($item->description, 200)}}    
                </p>
                </a>
            </div>
            @endforeach
           @endif
           
            </div>
            <!-- success card end -->
        </div>
        <!-- Success section end -->


        <div class="mt-28 mb-[-100px]">
        <div class="">
            <h1 class="font-bold text-4xl text-center"> @if($shareStory !==null) {{$shareStory->share_title}}  @endif</h1>
            <p class="font-normal text-xl text-center text-[#D1052C]">  @if($shareStory !==null) {{$shareStory->share_subtitle}}  @endif </p>
        </div>
        <div class="text-center mt-3"><a href="{{route('member')}}"><button class=" font-semibold text-white px-4 py-2 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Share Your Story</button> </a></div>
        </div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
