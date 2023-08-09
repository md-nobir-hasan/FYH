@extends('frontend.layout.app')
@push('title')
    Benefet Details
@endpush
@section('content')
    <div class="mt-[100px]" style="font-family:'Poppins'">
        <h1 class="text-[50px] font-bold text-center">Living Standard</h1>
        <div class="mt-[20px] w-[1100px] border rounded mx-auto bg-white"
            style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <p class="px-[40px] pt-[30px] pb-[134px] text-[16px] font-normal">
               {!! $mdata->first_para !!} <br>
               {!! $mdata->rest_para !!}
            </p>
            <div class="flex justify-center items-center" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                <img src="/storage/{{$mdata->image}}" alt="" class="absolute" />
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    <!-- flowbite cdn end -->
@endpush
