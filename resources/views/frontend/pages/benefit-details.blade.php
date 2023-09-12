@extends('frontend.layout.app')
@push('title')
    Benefet Details
@endpush
@section('content')
    <div class="mt-[100px]" style="font-family:'Poppins'">
        <h1 class="text-[50px] font-bold text-center">{{ $mdata->title }}</h1>
        <div class="mt-[20px] xl:w-[1100px] md:mx-10 mx-0 border rounded-xl xl:mx-auto bg-white shadow-md"
            >
            <p class="md:px-[40px] px-5 pt-[30px] pb-[134px] text-[16px] font-normal leading-normal">
               {!! $mdata->first_para !!} <br>
               {!! $mdata->rest_para !!}
            </p>
            <div class="flex justify-center items-center">
                <img src="/storage/{{$mdata->image}}" alt="" class="absolute shadow-md rounded-[20px] border w-[318px] h-[222px]  bg-white py-[20px]"/>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    <!-- flowbite cdn end -->
@endpush
