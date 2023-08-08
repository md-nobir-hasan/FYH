@extends('frontend.layout.app')
@push('title')
    {{ $story->name }}
@endpush
@section('content')
    <div class=" mt-[100px] mx-auto" style="font-family:'Poppins'">
        <section
            class="border-2 rounded grid grid-cols-1 lg:grid-cols-4 p-5 w-[1320px] bg-white gap-[48px] mx-auto h-[744px]">
            <div class="col-span-1">
                <img src="{{ Storage::url($story->image) }}" alt="" class="w-[308px] h-[308px] " />
            </div>
            <div class="col-span-3 ">
                <h1 class="text-4xl mt-[10px] font-bold">“ {{ $story->title }} ”</h1>

                <p class="text-[#666565] mt-[10px] text-base font-normal">Posted:
                    {{ date('D-M-Y', strtotime($story->created_at)) }} </p>
                <p class="text-justify font-normal text-base mt-[20px]">
                    {{ $story->description }}
                </p>
                <h1 class="text-xl font-bold mt-[20px]"> {{ $story->name }} </h1>
                <p class="text-[#666565] font-normal text-base capitalize "> {{ $story->profession }} </p>
                <p class="text-[#666565] capitalize font-normal text-base ">{{ $story->city }}, @if ($story->country !== null)
                        {{ $story->country->country }}
                    @endif
                </p>

            </div>
        </section>




        <section id="releted">
            <h1 class="text-2xl mt-[50px] w-[1320px] mx-auto -mb-5 font-bold">Related Stories</h1>



        @foreach ($stories->chunk(3) as $story)



            <!-- temporary single story page start -->
            <div class=""
                style="background:url('/images/benifitbg.png');background-size:100% 525px;background-repeat:no-repeat;background-position:0 100%">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10 w-[1320px] mx-auto">

                    <div
                        class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="h-[424px] w-full" src="/images/story2.png" alt="" />
                        </a>
                        <div class="px-[22px] mt-[10px]">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-[#212427]">"I have learnt so much, my
                                    memory got better, my morning routine got more structure"</h5>
                            </a>
                            <p class=" text-sm font-normal text-[#212427] text-justify mt-5">I was struggling to find a job
                                that aligned with my skills and experience, and I was starting Before this program I was
                                struggling to remember things, such as PIN numbers, important dates, things to do at home,
                                things to buy at store and I was having a hard time to concentrate and follow through with
                                my learning.</p>
                            <a href="" class="text-[#D1052C] font-bold text-[16px]">
                                Read more
                            </a>
                            <h1 class="text-xl font-semibold mt-[20px]">David Milan<h1>
                                    <p class="capitalize text-base font-normal">English Teacher</p>

                                    <p class="capitalize text-base font-normal">Berlin,Germany</p>

                        </div>
                    </div>
                    <div
                        class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="lg:h-[424px] w-full" src="/images/story2.png" alt="" />
                        </a>
                        <div class="px-[22px] mt-[10px] lg:h-[516px]">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-[#212427]">"I have learnt so much, my
                                    memory got better, my morning routine got more structure"</h5>
                            </a>
                            <p class=" text-sm font-normal text-[#212427] text-justify mt-5">I was struggling to find a job
                                that aligned with my skills and experience, and I was starting Before this program I was
                                struggling to remember things, such as PIN numbers, important dates, things to do at home,
                                things to buy at store and I was having a hard time to concentrate and follow through with
                                my learning.</p>
                            <a href="" class="text-[#D1052C] font-bold text-[16px]">
                                Read more
                            </a>
                            <h1 class="text-xl font-semibold mt-[20px]">David Milan<h1>
                                    <p class="capitalize text-base font-normal">English Teacher</p>

                                    <p class="capitalize text-base font-normal">Berlin,Germany</p>

                        </div>
                    </div>
                    <div
                        class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="lg:h-[424px] w-full" src="/images/story2.png" alt="" />
                        </a>
                        <div class="px-[22px] mt-[10px] lg:h-[516px]">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-[#212427]">"I have learnt so much, my
                                    memory got better, my morning routine got more structure"</h5>
                            </a>
                            <p class=" text-sm font-normal text-[#212427] text-justify mt-5">I was struggling to find a job
                                that aligned with my skills and experience, and I was starting Before this program I was
                                struggling to remember things, such as PIN numbers, important dates, things to do at home,
                                things to buy at store and I was having a hard time to concentrate and follow through with
                                my learning.</p>
                            <a href="" class="text-[#D1052C] font-bold text-[16px]">
                                Read more
                            </a>
                            <h1 class="text-xl font-semibold mt-[20px]">David Milan<h1>
                                    <p class="capitalize text-base font-normal">English Teacher</p>

                                    <p class="capitalize text-base font-normal">Berlin,Germany</p>

                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <a href="" class="flex justify-center items-center"> <Button
                    class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Load More
                    Stories</button></a>
            <!-- temporary single story page end -->
            <!-- <div class="mt-2 flex justify-center items-center mb-10">
        @auth
            <button  class="bg-[#D1052C] font-bold text-xl mt-2 text-white px-6 py-2 rounded loadmoredata">Load More Stories</button>
        @endauth

            </div> -->

        </section>
        <section class=" mb-[-100px]"
            style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
            <div
                class="pb-10 pt-56 mt-[69px]"style="background:url(/images/lastbg.png);background-size:100% 100%;background-repeat:no-repeat;background-position:0 30px">
                <div class="pb-14 shadow-lg">
                    <h1 class="font-bold text-5xl text-[#212427] text-center">
                        @if ($share !== null)
                            {{ $share->share_title }}
                        @endif
                    </h1>

                    <p class="text-xl text-center text-[#D1052C] uppercase">
                        @if ($share !== null)
                            {!! $share->share_subtitle !!}
                        @endif
                    </p>
                    <a href="{{ route('share.story') }}" class=" flex justify-center items-center"><button
                            class="lg:w-48 mt-[20px] p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                            Story</button></a>

                </div>

            </div>
        </section>
        <!-- <section style="background:url(/images/Line2.png);background-size:100%;background-repeat:no-repeat">>
    <div class="mt-[100px] mb-[-100px] shadow-xl pb-32 lg:-mx-40" style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;background-position:cover">
            <div class="">
                <h1 class="font-bold text-5xl text-center">
                       @if ($share !== null)
    {{ $share->share_title }}
    @endif
                </h1>
                <p class="font-normal uppercase lg:mx-32 text-2xl text-center text-[#D1052C]"> @if ($share !== null)
    {!! $share->share_subtitle !!}
    @endif </p>
            </div>
            <div class="text-center mt-3"> <a href="{{ route('share.story') }}"> <button class=" font-bold text-xl text-white px-7 py-2 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Share Your Story</button> </a></div>
            </div>
    </section> -->

    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endpush
