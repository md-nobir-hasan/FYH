@extends('frontend.layout.app')
@push('title')
    Congratulation
@endpush
@section('content')

<body style="font-family: 'Poppins'; background-image: url('/Ellipse\ 35.png');background-repeat: no-repeat;
 background-position: center; background-position: top;">
    <div>
        <div class="mt-5 flex justify-center items-center">
           @if($Congrat !== null)   <img src="{{'/storage/'.$Congrat->image}}" alt="" class=" w-[503px]"> @endif
        </div>
        <div class="text-center text-5xl text-[#D1052C] font-bold mt-[-20px] capitalize">  @if($Congrat !==null)  {{$Congrat->heading}}   @endif</div>
        <h1 class="text-center text-2xl mt-2 font-bold"> @if($Congrat){{$Congrat->title}} @endif </h1>
        <h1 class="text-center text-xl font-medium mt-4"> @if($Congrat){{$Congrat->subtitle}} @endif</h1>
        <div class=" mt-5 lg:ml-[470px] ml-10">
            <p class=" font-medium text-lg mb-3"> @if($Congrat !==null) {{ $Congrat->icon }}  <span class="">{{ $Congrat->opOne }}</span> @endif</p>
            <p class=" font-medium text-lg mb-3 "> @if($Congrat !==null) {{ $Congrat->icon }} <span class=""> {{ $Congrat->opTwo }}</span> @endif</p>
            <p class=" font-medium text-lg mb-3 "> @if($Congrat !==null) {{ $Congrat->icon }} <span class="">{{ $Congrat->opThree }}</span> @endif</p>
            <p class=" font-medium text-lg mb-3 "> @if($Congrat !==null) {{ $Congrat->icon }} <span class="">{{ $Congrat->opFour }}</span> @endif</p>
         
        </div>
        <h1 class="text-center text-xl font-medium mt-6"> @if($Congrat !==null) {{$Congrat->option_title}} @endif</h1>
        <div class="flex justify-center items-center">
            <button type="button" class="text-white w-48 bg-[#D1052C] font-medium rounded-lg text-base px-1 py-2.5 mr-2 mb-2"> @if($Congrat !==null) {{$Congrat->button_one}} @endif </button>
            <button type="button" class="text-white w-48 bg-[#D1052C] font-medium rounded-lg text-base px-1 py-2.5 mr-2 mb-2">@if($Congrat !==null) {{$Congrat->button_two}} @endif</button>
        </div>
    </div>
</body>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
