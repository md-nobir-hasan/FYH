@extends('frontend.layout.app')
@push('title')
    Move to Switzerland
@endpush
@section('content')

<div class="mt-[100px] " style="font-family:'Poppins'">
<h1 class="text-center text-[50px] font-bold mt-16"> @if($titles!==null) {{$titles->move_title}}  @endif</h1>
    <p class="text-center text-[24px] capitalize font-normal">  @if($titles!==null) {{$titles->move_subtile}}  @endif </p>
<!-- Integration design 2 -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 xl:w-[1320px] mx-5 xl:mx-auto mt-5">


@if($moveTo->count() > 0)
@foreach ($moveTo as $item)

<a  class="xl:h-[232px] xl:w-[424px] bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 overflow-hidden">
    <img src="{{'/storage/'.$item->image}}" alt="" class="h-[80px] w-[80px] mx-auto rounded-full mt-[16px]" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <h5 class="mt-[10px] text-[20px] font-semibold tracking-tight text-[#212427]  text-center"> {{$item->title}} </h5>
    <p class="font-normal text-[14px] xs:mb-5 mt-[10px] lg:mx-[40px] text-[#212427] text-center">
    {!! $item->first_para !!}
    </p>
    </a>
              @endforeach
            @endif


</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
