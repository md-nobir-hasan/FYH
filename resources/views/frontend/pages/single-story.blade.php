@extends('frontend.layout.app')
@push('title')
{{$story->name}}
@endpush
@section('content')

<div>
    <h1 class="text-center mt-10 p-6 bg-blue-700 w-5/12 mx-auto text-white font-bold rounded-xl text-3xl">This {{$story->name}} Story page</h1>
</div>          
         <div class="m-3 p-2 ">
               <h2 class="m-1 p-2 text-center capitalize text-2xl font-semibold "> {{$story->name}} </h2>
               <h4 class="m-1 p-2 text-center capitalize  text-xl font-semibold"> {{$story->title}} </h4>
               <center>
                <img src="{{'/storage/' .$story->image}}" alt="{{$story->name}}" class="shadow-lg bg-slate-200 p-3 rounded-md" style="width:40%; margin:auto">
               </center>

               <div class=" p-2 w-5/12 m-auto">
                   {{$story->description}}
               </div>
         </div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
