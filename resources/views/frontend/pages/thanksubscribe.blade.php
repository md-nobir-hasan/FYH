@extends('frontend.layout.app')
@push('title')
   Thank You
@endpush
@section('content')
     <div class="lg:mx-40 mt-[178px]" style="font-family:'Poppins'">
        <div class="flex items-center justify-center">
            <img src="{{'/storage/'. $titles->thank_image}}" class=""/>

        </div>
        <h1 class="font-black text-center text-5xl text-[#D1052C]"> @if($titles !==null) {{$titles->thank_heading}} @endif</h1>
        <p class="text-2xl text-center font-semibold my-3">
            For subscribing our news letter <br>

        </p>
        <p class=" text-center text-md font-normal">  You will get all of updates at very first.  </p>

        <div class="mt-2 flex justify-center items-center mb-10">
           @auth
           <a href="{{route('user.myStroy')}}" class="bg-[#D1052C] text-white px-6 py-2 rounded">Read Your Story</a>
           @endauth
           @guest
           <a href="{{route('member')}}" class="bg-[#D1052C] text-white px-6 py-2 rounded">Read Your Story</a>
           @endguest
            <a href="{{route('community')}}" class="bg-[#D1052C] ml-3 text-white px-6 py-2 rounded">Read All Stories</a>
        </div>
     </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
