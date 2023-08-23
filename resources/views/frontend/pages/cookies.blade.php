@extends('frontend.layout.app')
@push('title')
    cocike
@endpush
@section('content')
<div class=" mt-[88px] 2xl:w-[1320px] w-full mx-auto " style="font-family:'Poppins'">
<section class="border 2xl:mx-0 lg:mx-10 mx-5 bg-white shadow-lg rounded-lg">
<div class="lg:mx-[87px] mx-5 my-5 lg:my-10">

{!! $cookie->cookie !!}
{{-- {!! $privacy_policy->privacy !!} --}}

</div>
</section>
</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
