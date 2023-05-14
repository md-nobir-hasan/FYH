@extends('frontend.layout.app')
@push('title')
    Congratulation
@endpush
@section('content')

<body style="font-family: 'Montserrat'; background-image: url('/Ellipse\ 35.png');background-repeat: no-repeat;
 background-position: center; background-position: top;">
    <div>
        <div class="mt-5 flex justify-center items-center">
        <img src="{{asset('/images/badge.png')}}" alt="" class=" w-[503px]">
        </div>
        <div class="text-center text-5xl text-[#D1052C] font-bold mt-[-20px]">Congratulations</div>
        <h1 class="text-center text-3xl font-semibold">on subscribing to FYH!</h1>
        <h1 class="text-center text-xl font-semibold mt-7">Now You Have Access To:</h1>
        <div class="font-normal mt-5">
            <p class="ml-[520px]"><i class="fa fa-check"></i>High standard of living Geographical location</p>
            <p class="ml-[520px]"><i class="fa fa-check"></i>Beautiful nature and opportunity to relax without <br> leaving the country</p>
            <p class="lg:ml-[520px] md:ml-[200px]"><i class="fa fa-check"></i>Medicine of the highest level</p>
            <p class="ml-[520px]"><i class="fa fa-check"></i>Education based on high standards</p>
        </div>
        <h1 class="text-center text-3xl font-bold mt-3">What is more relevent for you</h1>
        <div class="flex justify-center items-center">
            <button type="button" class="text-white w-48 bg-[#D1052C] font-medium rounded-lg text-base px-1 py-2.5 mr-2 mb-2">I plan to move <br> Switzerland</button>
            <button type="button" class="text-white w-48 bg-[#D1052C] font-medium rounded-lg text-base px-1 py-2.5 mr-2 mb-2">I’ve already relocated Switzerland</button>
        </div>
    </div>
</body>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
