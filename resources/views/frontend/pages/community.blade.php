@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')

<div class="text-center mt-10" style="font-family:'Poppins'">
    <p class="text-lg">Stories of People Who Have Successfully Moved to Switzerland</p>
    <h1 class="text-4xl font-bold text-center">Our Success Stories</h1>

    <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-5 mx-36 mt-5">
        <!-- card -->
    <div>
    <div class=" bg-white border border-gray-200 rounded-lg shadow ">
        <a href="#">
        <img src="{{asset('/images/success1.png')}}" alt="" class="">
        </a>
        <div class="">
            <a href="#">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">David Milan</h5>
                <p class="font-medium">English Teacher</p>
                <p class="font-medium">Berlin,Germany</p>
            </a>
            <h1 class="font-extrabold mt-2 text-lg">“Your Story is Our Story and Here is mine”</h1>
            <p class="mb-3 font-normal text-sm">I was struggling to find a job that aligned with my skills and experience, and I was starting......</p>
            
        </div>
</div>
<button class="lg:w-48  mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</button>
    </div>
<!-- card end -->
        <!-- card -->
    <div>
    <div class=" bg-white border border-gray-200 rounded-lg shadow ">
        <a href="#">
        <img src="{{asset('/images/success2.png')}}" alt="" class="">
        </a>
        <div class="">
            <a href="#">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">David Milan</h5>
                <p class="font-medium">English Teacher</p>
                <p class="font-medium">Berlin,Germany</p>
            </a>
            <h1 class="font-extrabold mt-2 text-lg">“Your Story is Our Story and Here is mine”</h1>
            <p class="mb-3 font-normal text-sm">I was struggling to find a job that aligned with my skills and experience, and I was starting......</p>
            
        </div>
</div>
<button class="lg:w-48  mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</button>
    </div>
<!-- card end -->
        <!-- card -->
    <div>
    <div class=" bg-white border border-gray-200 rounded-lg shadow ">
        <a href="#">
        <img src="{{asset('/images/success3.png')}}" alt="" class="">
        </a>
        <div class="">
            <a href="#">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">David Milan</h5>
                <p class="font-medium">English Teacher</p>
                <p class="font-medium">Berlin,Germany</p>
            </a>
            <h1 class="font-extrabold mt-2 text-lg">“Your Story is Our Story and Here is mine”</h1>
            <p class="mb-3 font-normal text-sm">I was struggling to find a job that aligned with my skills and experience, and I was starting......</p>
            
        </div>
</div>
<button class="lg:w-48  mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</button>
    </div>
<!-- card end -->
        <!-- card -->
    <div>
    <div class=" bg-white border border-gray-200 rounded-lg shadow ">
        <a href="#">
        <img src="{{asset('/images/success4.png')}}" alt="" class="">
        </a>
        <div class="">
            <a href="#">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">David Milan</h5>
                <p class="font-medium">English Teacher</p>
                <p class="font-medium">Berlin,Germany</p>
            </a>
            <h1 class="font-extrabold mt-2 text-lg">“Your Story is Our Story and Here is mine”</h1>
            <p class="mb-3 font-normal text-sm">I was struggling to find a job that aligned with my skills and experience, and I was starting......</p>
            
        </div>
</div>
<button class="lg:w-48  mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</button>
    </div>
<!-- card end -->
        <!-- card -->
    <div>
    <div class=" bg-white border border-gray-200 rounded-lg shadow ">
        <a href="#">
        <img src="{{asset('/images/success5.png')}}" alt="" class="">
        </a>
        <div class="">
            <a href="#">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">David Milan</h5>
                <p class="font-medium">English Teacher</p>
                <p class="font-medium">Berlin,Germany</p>
            </a>
            <h1 class="font-extrabold mt-2 text-lg">“Your Story is Our Story and Here is mine”</h1>
            <p class="mb-3 font-normal text-sm">I was struggling to find a job that aligned with my skills and experience, and I was starting......</p>
            
        </div>
</div>
<button class="lg:w-48  mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</button>
    </div>
<!-- card end -->

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
