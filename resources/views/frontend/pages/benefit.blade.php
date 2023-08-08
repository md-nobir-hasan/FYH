@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')
<style>
    a:nth-child(2)>img{
       
    }
</style>
    <div class="mt-[104px] 2xl:w-[1320px] mx-auto" style="font-family:'Poppins'">
        <h1 class="text-center text-[50px] font-bold">
            @if ($benefitHeader !== null)
                {{ $benefitHeader->benefit_title }}
            @endif
        </h1>
        <p class="text-center text-2xl font-normal">
            @if ($benefitHeader !== null)
                {{ $benefitHeader->benefit_subtitle }}
            @endif
        </p>

        <!-- benifit section -->
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5 gap-6 2xl:mx-0 mx-5 bg-white">


                @if ($Benefits->count() > 0)
                    @foreach ($Benefits as $item)
                        <a href="{{route('benefit.details',[$item->id])}}"
                            class="h-[232px] 2xl:w-[424px] bg-white border border-gray-200 rounded-lg hover:bg-gray-100 overflow-hidden" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <img src="{{ "/storage/".$item->image }}" alt="" class="h-[80px] w-[80px] mx-auto rounded-full  mt-4"
                                style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <h5
                                class="mt-[10px] text-[20px] font-semibold tracking-tight text-[#212427] dark:text-white text-center">
                                {{ $item->title }} </h5>
                            <p class="font-normal mt-[10px] mx-[39.5px] text-[14px] text-[#212427] text-center">
                                {{-- {!! $item->description !!} <br> --}}
                                {!! $item->first_para !!}
                            </p>
                        </a>
                    @endforeach
                @endif


            </div>
            <!-- benifit card section end-->
        </div>
    </div>

    <!-- benifit section end -->



    </div>


@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
