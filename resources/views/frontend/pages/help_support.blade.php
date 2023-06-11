@extends('frontend.layout.app')
@push('title')
    Help and support
@endpush
@section('content')
<div class="lg:mx-40" style="font-family:'Poppins'">
<section class="mt-[52px]">
<div>
    <img src="/images/helpBanner.png" alt="" class=""/>
</div>
<div class="mt-[100px]">
    <h1 class="text-5xl font-black text-center">How can we help you, Thomas?</h1>
    <p class="text-center text-xl font-medium uppercase">Choose a category to find the help you need</p>
    <div class="mt-10 mb-[-100px]">

            <!-- benifit card section -->
            <div class="grid grid-cols-3 gap-8 mt-10">

       <a href="#" class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="/images/Getting Started.png" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Getting Started</h5>
            <p class="font-medium text-sm text-justify">
            Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s.
            </p>
            </a>
       <a href="#" class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="/images/billing.png" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Billing</h5>
            <p class="font-medium text-sm text-justify">
            Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s.
            </p>
            </a>
       <a href="#" class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="/images/legal.png" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Legal</h5>
            <p class="font-medium text-sm text-justify">
            Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s.
            </p>
            </a>
       <a href="#" class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="/images/trust.png" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Trust & Safety</h5>
            <p class="font-medium text-sm text-justify">
            Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s.
            </p>
            </a>
       <a href="#" class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="/images/community.png" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Community</h5>
            <p class="font-medium text-sm text-justify">
            Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s.
            </p>
            </a>
       <a href="#" class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="/images/events.png" alt="" class="h-16 w-16 mx-auto p-2 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Events</h5>
            <p class="font-medium text-sm text-justify">
            Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s.
            </p>
            </a>
  
            </div>
            <!-- benifit card section end-->
        </div>
</div>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
