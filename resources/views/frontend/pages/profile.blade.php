@extends('frontend.layout.app')
@push('title')
    Profile
@endpush
@section('content')
     <div class="lg:mx-40 mt-[102px]" style="font-family:'Poppins'">
        @if($profile !== null)
       <div class="grid grid-cols-4 gap-5 mb-8">
        <div class="col-span-1">
        <img src="{{'/storage/'. $profile->image}}" alt="" class=""/>
        </div>

        <div class="col-span-3">
        <h1 class="text-4xl font-black"> {{$profile->name}},</h1>
        <p class="capitalize" > {{$profile->profession}} </p>
        <p class="capitalize" >{{$profile->city}} , {{$profile->country}} </p>
        <h1 class="text-xl font-bold mt-5 capitalize">“ {{$profile->title  }} ”</h1>
        <p class="mt-2 text-lg text-justify">
            {{$profile->description}}
        </p>
        <div class="mt-5">
        <a href="" class="bg-[#D1052C] text-white px-6 py-2 rounded">Edit Story</a>
    </div>
        </div>
    </div>
     @else
           <h3 class="w-5/12 mx-auto font-bold text-xl  p-2 m-4 bg-red-700 rounded-xl text-white text-center ">
                  No Story Post
        </h3>
     @endif
     </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
