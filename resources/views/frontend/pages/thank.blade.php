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
        <p class="text-2xl text-center font-semibold"> @if($titles !==null) {{$titles->thank_title}} @endif </p>
        <p class=" text-center text-sm"> @if($titles !==null) {{$titles->thank_subtitle}} @endif</p>
        <div class="mt-2 flex justify-center items-center mb-10">
            <a href="{{route('user.myStroy')}}" class="bg-[#D1052C] text-white px-6 py-2 rounded">Read Your Story</a>
            <a href="{{route('community')}}" class="bg-[#D1052C] ml-3 text-white px-6 py-2 rounded">Read All Stories</a>
        </div>
     </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
