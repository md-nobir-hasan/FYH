@extends('frontend.layout.app')
@push('title')
    Profile
@endpush
@section('content')
<div class="2xl:w-[1320px] w-full mx-auto mt-[100px]" style="font-family:'Poppins'">
    @if($myStory->count() > 0)
<section class="border-2 bg-white rounded grid grid-cols-1 lg:grid-cols-4 p-6 gap-6">
         
           @foreach ($myStory->slice(0,1) as $story)
           <div class="col-span-1">
            <img src="{{'/storage/'. $story->image}}" alt="" class="2xl:w-[308px] 2xl:h-[308px]"/>
        </div>
        <div class="col-span-3">
            <h1 class="text-[36px] font-bold mb-[10px]">“{{$story->title}}”</h1>
            <p class="text-[#666565] text-[16px] font-normal">Posted: {{date('D-M-Y', strtotime($story->created_at))}}</p>
            <p class="text-justify text-[16px] mt-[20px]"> 
                    {{$story->description}}    
            </p>
    <h1 class="text-[20px] font-bold mt-[20px]"> {{$story->name}} </h1>
    <p class="text-[#666565] text-[16px] font-normal capitalize"> {{$story->profession}} </p>
    <p class="text-[#666565] capitalize text-[16px] font-normal">{{$story->city}} , @if($story->country !==null) {{$story->country->country}} @endif</p>
        </div>
           @endforeach
         
         
</section>
<section class="">
    <h1 class="text-[28px] mt-[64px] font-semibold">Related Stories</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-[20px]">
 
@if ($myStory->count() > 0)
@foreach ($myStory->slice(1, 3) as $item)
    

<div class=" bg-white border border-gray-200 rounded-lg shadow ">
    <a href="#">
        <img class="rounded-t-lg" src="{{'/storage/'. $item->image}}" alt="" />
    </a>
    <div class="p-3">
        <a href="#">
            <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">" {{Str::limit($item->title, 20)}} "</h5>
        </a>
        <p class=" text-sm font-normal text-[#212427] text-justify"> {{Str::limit($item->description, 400)}} .</p>
        <a href="{{route('single-story', $item->slug)}}" class="text-[#D1052C] font-black">
            Read more
        </a>
        <h1 class="text-xl font-bold mt-2"> {{$item->name}} <h1>
            <p class="capitalize"> {{$item->profession}} </p>
            <p class="capitalize"> {{$item->city}} , @if($item->country !==null) {{$item->country->country}} @endif</p>
    </div>
</div>
@endforeach
@endif


   </div>
   <div class="mt-2 flex justify-center items-center mb-10">
            <button type="submit" class="bg-[#D1052C] mt-2 text-white px-6 py-2 rounded">Load More Stories</button>
        </div>
</section>
@endif
<section>
<div class="mt-28 mb-[-100px]">
        <div class="">
            <h1 class="font-black text-5xl text-center">We Are Excited For your Story</h1>
            <p class="font-medium text-2xl text-center text-[#D1052C]">Our community runs on voices like yours. It keep us going, and keeps us grounded.<br>Tell us like it is. What's your story?</p>
        </div>
        <div class="text-center mt-3"><a href="{{route('share.story')}}" class=" font-semibold text-white px-7 py-2 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Share Your Story</a></div>
        </div>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
