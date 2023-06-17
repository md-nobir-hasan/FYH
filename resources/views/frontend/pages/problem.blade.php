@extends('frontend.layout.app')
@push('title')
 
@endpush
@section('content')

<div class="lg:mx-72" style="font-family:'Poppins'">
    <section class="mt-[57px]">
        <h1 class="text-2xl font-bold">Submit Your Problem Here</h1>
        <div class="my-5">
    <input type="text" id="default-input" class="bg-gray-50 border-dotted border-[#848484] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subject (e.g. Can’t share story)">
</div>

<textarea id="message" rows="4" class="block mb-4 p-2.5 h-[336px] w-full text-sm text-[#848484] bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write the details in here..."></textarea>

<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 font-medium text-gray-900 dark:text-gray-300">I agree to save my case in FYH server</label>
</div>

<div class="mt-7 mb-[-100px]">
<a href=""  class="lg:w-48 m-1 mt-16 p-3 px-10 rounded font-semibold  bg-[#D1052C] text-white">Submit Case</a>
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
