@extends('frontend.layout.app')
@push('title')
    Move to Switzerland
@endpush
@section('content')

<div class="" style="font-family:'Poppins'">
<h1 class="text-center text-5xl font-black mt-16"> @if($titles!==null) {{$titles->move_title}}  @endif</h1>
    <p class="text-center text-2xl font-normal">  @if($titles!==null) {{$titles->move_subtile}}  @endif </p>
<!-- Integration design 2 -->

<div class="grid grid-cols-1 lg:grid-cols-2 mx-5 lg:mx-36 gap-5 mt-10">

@if($moveTo->count() > 0)
@foreach ($moveTo as $item)
    

<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
<img src="{{'/storage/'.$item->image}}" alt="" class="h-16 ml-2 w-16 mx-auto rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
<div class="flex flex-col justify-between p-4 leading-normal">
<h5 class="mb-2 text-2xl font-extrabold tracking-tight  dark:text-white "> {{$item->title}} </h5>
    <p class="mb-3 text-justify font-normal text-sm"> {{Str::limit($item->description, 220)}} </p>
</div>
</a>
@endforeach
@endif



<!-- Integration design 2 end -->
        </div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
