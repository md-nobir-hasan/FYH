@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')
    <div class="text-center mt-10" style="font-family:'Poppins'">
        <p class="text-lg">Stories of People Who Have Successfully Moved to Switzerland</p>
        <h1 class="text-4xl font-bold text-center">Our Success Stories</h1>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5 mx-36 mt-5">

            @if($stories->count() > 0)

            @foreach ($stories as $item)
                
           
            <!-- card -->
            <div class="">
                <div class=" bg-white border border-gray-200 rounded-lg shadow mb-5">
                    <a href="#">
                        <img src="{{'/storage/'.$item->image }}" alt="{{$item->name}}" class="" width="100%" style="height: 200px;" >
                    </a>
                    <div class="">
                        <a href="#">
                            <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{$item->name}} </h5>
                            <p class="font-medium"> {{$item->profession}} </p>
                            <p class="font-medium"> {{Str::limit($item->address, 15)}} </p>
                        </a>
                        <h1 class="font-extrabold mt-2 text-lg">“{{Str::limit($item->title, 18)}}”</h1>
                        <p class="mb-3 font-normal text-sm"> {{Str::limit($item->description, 150)}} </p>

                    </div>
                  
                </div>
                <a href="{{route('single-story', $item->slug)}}" class="lg:w-48  mt-10 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</a>

            </div>
            <!-- card end -->
            @endforeach
            @endif
        </div>
                        
        <!-- last buttons -->
        <div class="flex justify-center items-center">
            <button class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ ALL STORIES</button>
            <button class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">NEWS</button>
        </div>
        <!-- last buttons end -->

    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
