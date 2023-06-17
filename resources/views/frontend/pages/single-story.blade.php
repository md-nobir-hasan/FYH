@extends('frontend.layout.app')
@push('title')
{{$story->name}}
@endpush
@section('content')




<div class="lg:mx-40 mt-20" style="font-family:'Poppins'">
<section class="border-2 rounded grid grid-cols-1 lg:grid-cols-4 p-4 gap-10">
    <div class="col-span-1">
        <img src="{{'/storage/'. $story->image}}" alt="" class="w-full "/>
    </div>
    <div class="col-span-3">
        <h1 class="text-4xl font-black mb-2">“ {{$story->title}} ”</h1>
      
        <p class="text-[#666565]">Posted: {{date('D-M-Y', strtotime($story->created_at))}} </p>
        <p class="text-justify text-lg mt-3">
                      {{$story->description}}
               </p>
<h1 class="text-xl font-bold my-2"> {{$story->name}} </h1>
<p class="text-[#666565] capitalize "> {{$story->profession}} </p>
<p class="text-[#666565] capitalize ">{{$story->city}}, {{$story->country->country}}</p>

    </div>
</section>




<section id="releted">
    <h1 class="text-2xl my-5 font-bold">Related Stories</h1>

<div  class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-10">
    
    

   
    @foreach ($stories as $story)
     
 
    <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg w-full" src="{{'/storage/'. $story->image}}" alt="{{$story->name}}" />
        </a>
        <div class="p-3">
            <a href="#">
                <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">" {{Str::limit($story->title, 25)}} "</h5>
            </a>
            <p class=" text-sm font-normal text-[#212427] text-justify"> {{Str::limit($story->description, 100)}} .</p>
            <a href="{{route('single-story', $story->slug)}}" class="text-[#D1052C] font-black">
                Read more
            </a>
            <h1 class="text-xl font-bold mt-2"> {{$story->name}} <h1>
                <p class="capitalize"> {{$story->profession}} </p>

                <p class="capitalize">{{$story->city}}, {{$story->country->country}}</p>

        </div>
    </div>
    @endforeach
    
     

   </div>
   <div class="mt-2 flex justify-center items-center mb-10">
            <button  class="bg-[#D1052C] mt-2 text-white px-6 py-2 rounded loadmoredata">Load More Stories</button>
        </div>
     
</section>
<section>
<div class="mt-28 mb-[-100px]">
        <div class="">
            <h1 class="font-black text-5xl text-center">
                   @if($share !==null)   {{$share->share_title}}    @endif 
            </h1>
            <p class="font-medium text-2xl text-center text-[#D1052C]"> @if($share !==null) {{$share->share_subtitle}} @endif </p>
        </div>
        <div class="text-center mt-3"> <a href="{{route('share.story')}}"> <button class=" font-semibold text-white px-7 py-2 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Share Your Story</button> </a></div>
        </div>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
 
@endpush




