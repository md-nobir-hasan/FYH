@extends('frontend.layout.app')
@push('title')
    Problem 
@endpush
@section('content')





<div class="2xl:w-[953px] 2xl:mx-auto xl:mx-56 lg:mx-48 md:mx-20 mx-5" style="font-family:'Poppins'">
    <form action="{{route('problemStore')}}" method="post">
        @csrf
    <section class="mt-[68px]">
        <h1 class="text-xl font-semibold">Submit Your Problem Here</h1>
        <div class="mt-6">
    <input type="text" name="subject" max="200" required id="default-input" class="bg-gray-50 border-dotted border-[#848484] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Subject (e.g. Can’t share story)">
</div>

<textarea id="message" name="description" required rows="4" class="block mt-6 p-2.5 h-[398px] w-full text-sm text-[#848484] bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write the details in here..."></textarea>

<div class="flex items-center mt-6">
    <input id="default-checkbox" type="checkbox" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
    <label for="default-checkbox" class="ml-2 font-medium text-gray-900 ">I agree to save my case in FYH server</label>
</div>

<div class="mt-6 mb-[-100px]">
<button type="submit"  class="lg:w-48 m-1 text-base font-bold p-3 px-10 rounded bg-[#D1052C] text-white">Submit Case</button>
        </div>
</div>
</section>
</form>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
