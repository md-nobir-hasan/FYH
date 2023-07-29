@extends('frontend.layout.app')
@push('title')
    Profile
@endpush
@section('content')
<div class="w-[1320px] mx-auto mt-[67px] mb-[-130px]" style="font-family:'Poppins'">
<section class="border shadow-lg bg-white rounded-lg p-14">
 
      {!! $terms->term !!}
</section>
</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
