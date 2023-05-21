@extends('frontend.layout.app')
@push('title')
    About
@endpush
@section('content')

<div>
    <h1 class="text-center mt-10 uppercase text-bold"> {{$content->title}} </h1>
               <img src="{{'/storage/'.$content->image}}" alt="{{$content->slug}}" class="shadow-xl bg-gray-200 p-2 m-3" style="width: 35%; margin:auto;">


               <div class="m-3 bg-sky-200 " style="width:80%; margin:auto">
                     {!! $content->description !!}
               </div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
