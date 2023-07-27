@extends('frontend.layout.app')
@push('title')
    About
@endpush
@section('content')
<style>

iframe{
         width: 1320px !important;
         height: 741px !important;
         margin: auto;
         border-radius: 10px;
         padding: 10px;
         background: #ECF9FF;
         box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

</style>






<div class="mt-[100px]"  style="font-family:'Poppins'">
    <h1 class="text-center text-[50px] font-bold">
        @if($about!==null)  {{$about->title}}  @endif    
    </h1>
    <p class="text-center text-2xl font-normal capitalize"> 
        @if($about!==null)  {{$about->title_description}}  @endif      
    </p>
<div class="" style="background:url('/images/benifitbg.png');background-size:100% 518px;background-repeat:no-repeat">
    <div class="w-[1320px] mx-auto">
    <h1 class="text-center text-[68px] font-bold mt-[40px]">   @if($about!==null)  {!!$about->heading !!}  @endif  </h1>

<p class="text-center text-2xl mx-20 font-normal mt-5">
    @if($about!==null)  {{$about->heading_description}}  @endif
</p>



<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 grid-cols-1 mt-5">

    @if($about->images!==null)
    @foreach (json_decode($about->images)  as $item)
         <img src="{{'/storage/'.$item}}" alt="" class="rounded-lg w-[312px] h-[212px]">
      
    @endforeach
    @endif
</div>
    </div>
    </div>

    <p class=" mt-6 w-[1144px] mx-auto text-justify text-base font-normal">
        @if($about!==null)  {{$about->images_description}}  @endif     
    </p>

    {{-- <iframe height="240" controls class="lg:mx-48 mt-5 mx-20 md:w-[600px] lg:w-[960px]">
  <source src="movie.mp4" type="video/mp4">
    </iframe> --}}

        <div class="mt-[50px]" >
            @if($about!==null)  {!!$about->youtube !!}  @endif   
        </div>


<div class="mt-[50px] w-[1144px] mx-auto px-[70px] py-[16px] " style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <!-- @if($about!==null)  {!!$about->youtube_description !!}  @endif    -->
    <h1 class="font-bold text-2xl">“We’re constantly exploring, inventing, and optimizing personal transformation to ultimately unite our species, save our planet, and usher in a new golden age for humanity.”</h1>
    <p class="text-lg font-normal">- Thomas Tsangaras, Founder of FYH</p>
  </div>


  <div class="mt-[50px] flex w-[1320px] mx-auto">
    <!-- {{'/storage/'. $about->first_image}} -->
    <div class="">
    @if($about!==null)   <img src="/images/story2.png" alt="" class="w-[561px] h-[316px]">
    <h1 class="-mt-40 ml-10 absolute text-[50px] font-black text-white">My Best Decision<br><span class="ml-5">of Relocating</span> </h1> @endif 
    </div>   
    <div class="w-[735px] ml-[24px]">
    <h1 class=" text-4xl font-bold">At FYH, learning is a lifelong adventure</h1>
        <p class="text-base text-justify font-normal">@if($about!==null)  {!!$about->first_image_story!!}  @endif</p>   
    </div>
  </div>
  <div class="flex mx-auto mt-6 w-[1320px]">
  <div class="w-[735px] mr-[24px]">
    <!-- {{'/storage/'. $about->second_image}} -->
    <h1 class=" text-4xl font-bold">At FYH, learning is a lifelong adventure</h1>
    <p class="text-justify text-base font-normal">@if($about!==null)  {!!$about->second_image_story!!}  @endif  </p>
    </div>
    <div>
    @if($about!==null)    <img src="/images/story3.png" alt="" class="w-[561px] h-[316px]"> 
    <h1 class="absolute text-[50px] font-black -mt-40 ml-20 text-white"><span class="ml-20">Master Of</span> <br>Happiness in Here</h1>@endif 
    </div> 
    
  </div>

  <!-- Success section start -->
  <div class="mt-[100px] pb-28" style="background:url(/images/benifitbg.png);background-size:100% 387px;background-repeat:no-repeat; background-position:0 125px">
            <h1 class="font-bold text-[50px] text-[#212427] text-center">
            What Our Member Say
            </h1>
            <p class="text-2xl font-normal text-center text-[#212427]">
            Here’s all of the successful stories of our customers
            </p>

            <!-- success card  -->
            <div class="w-[1320px] mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">

            @if($stories->count() > 0)
           @foreach ($stories as $item)
                        <a href="{{ route('single-story', $item->slug) }}"
                            class="w-[424px] h-[304px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden">
                            <div class="flex">
                                <img src="{{ '/storage/' . $item->image }}" alt="" class="h-16 w-16 rounded-full"
                                    style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                <div class="ml-2">
                                    <h1 class="text-[28px] font-semibold"> {{$item->name}} </h1>
                                    <p class="font-normal text-xl"> {{$item->profession}} </p>
                                </div>
                            </div>
                            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                            <p class="font-normal text-base dark:text-gray-400">
                            {{Str::limit($item->description, 200)}} 
                            </p>
                        </a>
                    @endforeach
                @endif
                

            </div>
            <!-- success card end -->
                <svg class="mx-auto mt-5" width="65" height="15" viewBox="0 0 65 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="7.5" cy="7.5" r="7.5" fill="#D1052C"/>
<circle cx="32.5" cy="7.5" r="7.5" fill="#D9D9D9"/>
<circle cx="57.5" cy="7.5" r="7.5" fill="#D9D9D9"/>
</svg>
        </div>
  <!-- another -->
  
        <!-- Success section end -->
        <section class=" mb-[-100px]"  style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
            <div class="py-28 "style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;">
            <div class="pb-28 shadow-lg">
            <h1 class="font-bold text-[50px] text-[#212427] text-center">
            @if($shareStory !==null) {{$shareStory->share_title}}  @endif
            </h1>
           
            <p class="text-xl text-center text-[#D1052C] uppercase w-[986px] mx-auto">
            @if($shareStory !==null) {{$shareStory->share_subtitle}}  @endif
            </p>
                <a href="{{route('share.story')}}" class=" flex justify-center items-center"><button
                class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                Story</button></a>
    </div>
    </div>
    </section>
<!-- another -->

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
