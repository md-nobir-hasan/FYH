@extends('frontend.layout.app')
@push('title')
    cocike
@endpush
@section('content')
<div class="lg:mx-40 mt-[72px]" style="font-family:'Poppins'">
<section class="border shadow-lg rounded-lg">
<div class="lg:mx-20 lg:my-10">

{!! $cookie->cookie !!}

</div>
</section>
</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
