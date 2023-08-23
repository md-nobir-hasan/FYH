@extends('frontend.layout.app')
@push('title')
    Profile
@endpush
@section('content')
<div class="2xl:w-[1320px] 2xl:mx-auto lg:mx-10 mx-5 mt-[67px] lg:mb-[-130px]" style="font-family:'Poppins'">
<section class="border shadow-lg bg-white rounded-lg p-[20px] lg:p-14">
 
      {!! $terms->term !!}
</section>
</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
