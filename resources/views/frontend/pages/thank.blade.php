@extends('frontend.layout.app')
@push('title')
   Thank You
@endpush
@section('content')
     <div class="lg:mx-40 mt-[178px]" style="font-family:'Poppins'">
        <div class="flex items-center justify-center">
            <img src="{{'/storage/'. $titles->thank_image}}" class=""/>
            
        </div>
        >
     </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
