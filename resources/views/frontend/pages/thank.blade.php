@extends('frontend.layout.app')
@push('title')
   Thank You
@endpush
@section('content')
     <div class="lg:mx-40 mt-[178px]" style="font-family:'Poppins'">
        <div class="flex items-center justify-center">
            <img src="images/thanks.png" class=""/>
            
        </div>
        <h1 class="font-black text-center text-5xl text-[#D1052C]">Thank you</h1>
        <p class="text-2xl text-center font-semibold">For sharing your story!</p>
        <p class=" text-center text-sm">Work hard and Follow Your Heart!</p>
        <div class="mt-2 flex justify-center items-center mb-10">
            <button type="submit" class="bg-[#D1052C] text-white px-6 py-2 rounded">Read Your Story</button>
            <button type="submit" class="bg-[#D1052C] ml-3 text-white px-6 py-2 rounded">Read All Stories</button>
        </div>
     </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
