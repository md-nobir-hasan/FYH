@extends('frontend.layout.app')
@push('title')
    cocike
@endpush
@section('content')
<div class=" mt-[88px] w-[1320px] mx-auto" style="font-family:'Poppins'">
<section class="border bg-white shadow-lg rounded-lg">
<div class="lg:mx-[87px] lg:my-10">

{{-- {!! $privacy_policy->privacy !!} --}}
<h1>This is privacy policy page</h1>

</div>
</section>
</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
