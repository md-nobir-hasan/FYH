@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')

<div class=" m-auto" style="width:95%; margin:auto">
    <h1 class="text-center mt-10 text-lg font-bold ">This is benefit page</h1>
    <div class="grid grid-cols-4 gap-4 mt-10 content-center">

        @if($Benefits->count() > 0)

        @foreach ($Benefits as $item)
            
      

    <a href="#" class="block w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <img src="{{'/storage/'.$item->image}}" alt="{{$item->title}}" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> {{$item->title}} </h5>
    <p class="font-medium text-sm dark:text-gray-400 text-center">
          {{$item->description}}
    </p>
    </a>
    @endforeach
    @endif
 
  

    </div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
