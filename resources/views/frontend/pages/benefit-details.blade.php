@extends('frontend.layout.app')
@push('title')
    Benefet Details
@endpush
@section('content')

<div class="mt-[100px]" style="font-family:'Poppins'">
    <h1 class="text-[50px] font-bold text-center">Living Standard</h1>
    <div class="mt-[20px] w-[1100px] border rounded mx-auto bg-white" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <p class="px-[40px] pt-[30px] pb-[134px] text-[16px] font-normal">
W    
In Switzerland, the standard of living is much more than a statistic. It's a tangible reality that you can see, touch, and experience in every facet of daily life. From world-renowned education and healthcare systems to robust public transport and innovative infrastructure, Switzerland excels in providing a quality of life that's second to none.

But there's so much more that makes Switzerland unique. It's where cutting-edge innovation blends seamlessly with centuries-old traditions. Where bustling, cosmopolitan cities lie just a short drive away from serene, picturesque villages. Where you can savor world-class chocolates and cheeses one moment, and take in the grandeur of pristine, snow-capped mountains the next.

Whether you're attracted by its dynamic economy, its harmonious blend of cultures, or simply the promise of a clean, safe, and peaceful environment for you and your family, Switzerland invites you to experience a lifestyle that truly stands apart.
</p>
<div class="flex justify-center items-center" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
    <img src="/images/benifitDetails.png" alt="" class="absolute"/>
</div>
    </div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
{{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
<!-- flowbite cdn end -->
@endpush
