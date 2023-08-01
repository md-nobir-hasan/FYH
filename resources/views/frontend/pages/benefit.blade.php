@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5 mx-4">


                @if ($Benefits->count() > 0)
                    @foreach ($Benefits as $item)
                        <a href="{{route('benefit.details',[$item->id])}}"
                            class="h-[232px] lg:w-[424px] w-full px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 overflow-hidden">
                            <img src="{{ "/storage/".$item->image }}" alt="" class="h-[80px] w-[80px] mx-auto rounded-full p-2"
                                style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <h5
                                class="mb-2 text-[20px] font-semibold tracking-tight text-[#212427] dark:text-white text-center">
                                {{ $item->title }} </h5>
                            <p class="font-normal text-[14px] text-[#212427] text-center">
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
