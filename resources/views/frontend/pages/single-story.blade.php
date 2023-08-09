@extends('frontend.layout.app')
@push('title')
    {{ $story->name }}
@endpush
@section('content')
    <div class=" mt-[100px] mx-auto" style="font-family:'Poppins'">
        <section
            class="border-2 rounded grid grid-cols-1 lg:grid-cols-4 px-5 w-[1320px] bg-white gap-[48px] mx-auto ">
            <div class="col-span-1">
                <img src="{{ Storage::url($story->image) }}" alt="" class="w-[308px] h-[308px] mt-[20px]" />
            </div>
            <div class="col-span-3 ">
                <h1 class="text-[36px] mt-[10px] font-bold">“ {{ $story->title }} ”</h1>

                <div class="flex">
                <p class="text-[#666565] mt-[10px] text-[16px] font-normal">Posted:
                    {{ date('D-M-Y', strtotime($story->created_at)) }} </p>
                    <svg id="svg" onclick=function1() class="mt-[10px] ml-[10px]" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_2891_12010" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
<rect width="20" height="20" fill="#D9D9D9"/>
</mask>
<g mask="url(#mask0_2891_12010)">
<path d="M10.3333 17.9164L9.125 16.8597C7.72222 15.6268 6.5625 14.5633 5.64583 13.6691C4.72917 12.7749 4 11.9722 3.45833 11.2609C2.91667 10.5497 2.53819 9.89596 2.32292 9.29985C2.10764 8.70373 2 8.09407 2 7.47086C2 6.19734 2.4375 5.13382 3.3125 4.28029C4.1875 3.42676 5.27778 3 6.58333 3C7.30556 3 7.99306 3.14903 8.64583 3.44709C9.29861 3.74514 9.86111 4.16513 10.3333 4.70706C10.8056 4.16513 11.3681 3.74514 12.0208 3.44709C12.6736 3.14903 13.3611 3 14.0833 3C15.3889 3 16.4792 3.42676 17.3542 4.28029C18.2292 5.13382 18.6667 6.19734 18.6667 7.47086C18.6667 8.09407 18.559 8.70373 18.3438 9.29985C18.1285 9.89596 17.75 10.5497 17.2083 11.2609C16.6667 11.9722 15.9375 12.7749 15.0208 13.6691C14.1042 14.5633 12.9444 15.6268 11.5417 16.8597L10.3333 17.9164ZM10.3333 15.7216C11.6667 14.5565 12.7639 13.5573 13.625 12.7241C14.4861 11.8909 15.1667 11.1661 15.6667 10.5497C16.1667 9.93322 16.5139 9.38452 16.7083 8.90357C16.9028 8.42261 17 7.94504 17 7.47086C17 6.65798 16.7222 5.98057 16.1667 5.43865C15.6111 4.89673 14.9167 4.62577 14.0833 4.62577C13.4306 4.62577 12.8264 4.80528 12.2708 5.1643C11.7153 5.52333 11.3333 5.98057 11.125 6.53604H9.54167C9.33333 5.98057 8.95139 5.52333 8.39583 5.1643C7.84028 4.80528 7.23611 4.62577 6.58333 4.62577C5.75 4.62577 5.05556 4.89673 4.5 5.43865C3.94444 5.98057 3.66667 6.65798 3.66667 7.47086C3.66667 7.94504 3.76389 8.42261 3.95833 8.90357C4.15278 9.38452 4.5 9.93322 5 10.5497C5.5 11.1661 6.18056 11.8909 7.04167 12.7241C7.90278 13.5573 9 14.5565 10.3333 15.7216Z" fill="#848484"/>
</g>
</svg>

                </div>

                <p class="text-justify font-normal text-[16px] mt-[20px]">
                    {{ $story->description }}
                </p>
                <h1 class="text-xl font-bold mt-[20px]"> {{ $story->name }} </h1>
                <p class="text-[#666565] font-normal text-[16px] capitalize "> {{ $story->profession }} </p>
                <p class="text-[#666565] capitalize font-normal text-[16px] pb-[20px] ">{{ $story->city }}, @if ($story->country !== null)
                        {{ $story->country->country }}
                    @endif
                </p>

            </div>
        </section>




        <section id="releted">
            <h1 class="text-2xl mt-[50px] w-[1320px] mx-auto -mb-5 font-bold">Related Stories</h1>



        @foreach ($stories->chunk(3) as $stres)
            <!-- temporary single story page start -->
            <div class=""
                style="background:url('/images/benifitbg.png');background-size:100% 525px;background-repeat:no-repeat;background-position:0 100%">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10 w-[1320px] mx-auto">
                @foreach ( $stres as $story )

                    <div
                        class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow">
                        <a href="{{ route('single-story', $story->id) }}">
                            <img class="h-[424px] w-full" src="/storage/{{$story->image}}" alt="" />
                        </a>
                        <div class="px-[22px] mt-[20px] h-[500px]">
                            <a href="{{ route('single-story', $story->id) }}">
                                <h5 class=" text-[20px] font-bold tracking-tight text-[#212427]">"{!! $story->title !!}"</h5>
                            </a>
                            <p class=" text-[14px] mt-[20px] font-normal text-[#212427] text-justify"> {!! Str::limit($story->description, 595) !!}</p>
                            <a href="{{ route('single-story', $story->id) }}" class="text-[#D1052C] font-bold text-[16px]">
                                Read more
                            </a>
                            <h1 class="text-xl font-semibold mt-[20px]">{{$story->name}}<h1>
                                    <p class="capitalize text-[16px] font-normal">{{$story->profession}}</p>

                                    <p class="capitalize text-[16px] font-normal">{{$story->city}}, {{$story->country->country}}</p>

                            </div>
                        </div>
                    @endforeach

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

<script>
    const function1=()=>{
        const svg = document.getElementById('svg')
        if(svg.style.backgroundColor === ''){
            svg.style.backgroundColor = '#D1052C'
        }else {
            svg.style.backgroundColor = ''
        }
    }
</script>
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endpush
