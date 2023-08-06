@extends('frontend.layout.app')
@push('title')
    Intregration In Switzerland
@endpush
@section('content')

<div class="mt-[100px]" style="font-family:'Poppins'">
<h1 class="text-center text-[50px] font-bold mt-16">@if($titles!==null) {{$titles->intr_title}}  @endif</h1>
    <p class="text-center text-2xl font-normal"> @if($titles!==null) {{$titles->intr_subtile}}  @endif </p>
<!-- Integration design 2 -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto w-[1320px] mt-5">

    

@if($integration->count() > 0)
    @foreach ($integration as $item)

<a  class="h-[232px] w-[424px] px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 overflow-hidden">
    <img src="{{'/storage/'. $item->image}}" alt="" class="h-[80px] w-[80px] mx-auto rounded-full">
    <h5 class="mb-2 text-[20px] font-semibold tracking-tight text-[#212427] dark:text-white text-center"> {{$item->title}} </h5>
    <p class="font-normal text-sm text-[#212427] text-center">
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
