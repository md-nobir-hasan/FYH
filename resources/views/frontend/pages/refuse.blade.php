@extends('frontend.layout.app')
@push('title')
 
@endpush
@section('content')

<div class="mt-36" style="font-family:'Poppins'">
  <div class="">
    <h1 class="text-2xl font-bold text-center">Welcome To Read Stories</h1>
    <p class="text-center text-lg font-medium">Only 5 best stories will be published for free.<br>
If you want to read all stories, Please subscribe.</p>
<div class="mt-1 flex justify-center">
<a href="{{route('member')}}"  class="px-16 py-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Subscribe</a>
        </div>
        <p class="text-center text-lg font-medium">All Ready Subscribed?  Please Login to your FYH Account.</p>
        <div class=" flex justify-center mt-1">
<a href="{{route('login')}}"  class="px-20 py-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Login</a>
        </div>
  </div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
