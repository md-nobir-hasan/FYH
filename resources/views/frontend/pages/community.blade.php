@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')
<style>
    
    .cbg{
        background-image:url('/images/benifitbg.png');background-size:100% 516px;background-position:0 100%;background-repeat:no-repeat
    }
    
    @media (min-width: 999px) and (max-width: 1021px){
        .cbg{
            background-size:100% 568px
        }
    }
    @media (min-width: 993px) and (max-width: 998px){
        .cbg{
            background-size:100% 568px
        }
    }
    @media (min-width: 939px) and (max-width: 992px){
        .cbg{
            background-size:100% 590px
        }
    }
    @media (min-width: 914px) and (max-width: 938px){
        .cbg{
            background-size:100% 610px
        }
    }
    @media (min-width: 899px) and (max-width: 913px){
        .cbg{
            background-size:100% 612px
        }
    }
    @media (min-width: 879px) and (max-width: 898px){
        .cbg{
            background-size:100% 630px
        }
    }
    @media (min-width: 862px) and (max-width: 878px){
        .cbg{
            background-size:100% 663px
        }
    }
    @media (min-width: 840px) and (max-width: 861px){
        .cbg{
            background-size:100% 683px
        }
    }
    @media (min-width: 820px) and (max-width: 839px){
        .cbg{
            background-size:100% 715px
        }
    }
    @media (min-width: 790px) and (max-width: 819px){
        .cbg{
            background-size:100% 735px
        }
    }
    @media (min-width: 768px) and (max-width: 789px){
        .cbg{
            background-size:100% 755px
        }
    }
    @media (min-width: 0px) and (max-width: 767px){
        .cbg{
            background-image:none
        }
    }
   
</style>

    <div class=" mt-[104px] mb-[-200px]" style="font-family:'Poppins'">


        @guest
            <h1 class="text-[50px] mx-5 font-bold text-center">
                @if ($storyHead !== null)
                    {{ $storyHead->story_title }}
                @endif
            </h1>
            <p class="text-[24px] mx-5 font-normal text-center capitalize	">
                @if ($storyHead !== null)
                    {{ $storyHead->story_subtitle }}
                @endif
            </p>

        @endguest

        @auth

            <h1 class="text-[50px] font-semibold text-center">
                @if ($storyHead !== null)
                    {{ $storyHead->community_sub_title }}
                @endif
            </h1>
            <p class="text-[24px] font-normal text-center mb-[10px] mt-[10px]">
                @if ($storyHead !== null)
                    {{ $storyHead->community_sub_subtitle }}
                @endif
            </p>



            <form action="{{ route('community.search') }}" method="post" class="">
                @csrf

                <div class=" 2xl:w-[1320px] xl:mx-auto mx-10 lg:flex block">
                    <div class=" 2xl:ml-0">
                        <p class="font-medium text-[14px]">Sort Stories</p>

                        <select name="stories"
                            class="bg-gray-50 border xl:w-[326px] lg:w-[220px] w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5">
                            <option class="text-lg" value="latest"
                                @isset($data) @selected($data['stories'] == 'latest')  @endisset>Most
                                Recent</option>
                            <option class="text-lg" value=""
                                @isset($data) @selected($data['stories'] == '')  @endisset>Most Relevant
                            </option>

                        </select>
                    </div>

                    <div class="lg:ml-[75px]">
                        <p>By Country</p>
                        <select id="countries" name="country_id"
                            class="bg-gray-50 border xl:w-[326px] lg:w-[220px] w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5">
                            <option class="text-lg" value="">All Country</option>
                            @foreach ($country as $story)
                                <option value="{{ $story->id }}"
                                    @isset($data) @selected($data['country_id'] ==  $story->id)  @endisset>
                                    {{ $story->country }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class=" lg:ml-[75px]">
                        <p>By Time</p>

                        <select name="time"
                            class="bg-gray-50 border w-full xl:w-[326px] lg:w-[220px]  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 ">

                            <option class="text-lg mb-1" value=""
                                @isset($data) @selected($data['time'] == '') @endisset>Any Time</option>
                            <option class="text-lg mb-1" value="1"
                                @isset($data) @selected($data['time'] == 1)  @endisset>Past 24 Hours
                            </option>
                            <option class="text-lg mb-1" value="7"
                                @isset($data) @selected($data['time'] == 7)  @endisset>Past Week</option>
                            <option class="text-lg mb-1" value="30"
                                @isset($data) @selected($data['time'] == 30)  @endisset>Past Month
                            </option>
                            <option class="text-lg mb-1" value="90"
                                @isset($data) @selected($data['time'] == 90)  @endisset>Past 0-3 months
                            </option>
                            <option class="text-lg mb-1" value="180"
                                @isset($data) @selected($data['time'] == 180)  @endisset>Past 0-6 months
                            </option>
                            <option class="text-lg mb-1" value="365"
                                @isset($data) @selected($data['time'] == 365)  @endisset>Past Year
                            </option>


                        </select>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="flex justify-center items-center ml-[20px] mt-6">
                            <button type="submit"
                                class="border bg-white px-4 py-2 rounded shadow hover:shadow-xl">Apply</button>
                        </div>
                        <div class="flex justify-center items-center ml-[20px] mt-6">
                            <input type="reset" class="border bg-white px-4 py-2 rounded shadow hover:shadow-xl"
                                value="Clear">
                        </div>
                    </div>

                </div>
            </form>
        @endauth

        <!-- temporary card section -->
        <section>
            @if ($stories->count() > 0)
                @foreach ($stories as $story)
                    @php  $countryName = App\Models\Country::where('id', $story->country_id)->first(); @endphp
                    @if ($loop->index == 0 || $loop->index % 3 == 0)
                        <div class="cbg"
                            style="">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 xl:w-[1320px] mx-5  xl:mx-auto mt-6">
                    @endif
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow">
                        {{-- <a href="#"> --}}
                            {{-- /images/story4.png --}}
                            <img class="lg:h-[424px] w-full" src="{{ Storage::url($story->image) }}"
                                alt="{{ $story->name }}" />
                        {{-- </a> --}}
                        <div class=" lg:h-[516px]">
                            {{-- <a href="#"> --}}
                                <h5 class="pt-[20px] px-[22px] text-[20px] font-bold tracking-tight text-gray-900 ">
                                    "{!! $story->title !!}"</h5>
                            {{-- </a> --}}
                            <p class="mt-5 mx-[22px] text-[14px] font-normal text-justify text-[#212427]">
                                {!! Str::limit($story->description, 595) !!}</p>
                            <a href="{{ route('single-story', $story->id) }}"
                                class="text-[#D1052C] font-bold text-base mx-[22px]">Read More</a>
                            <h3 class="font-semibold text-[20px] mx-[22px] mt-5 text-[#212427]">{{ $story->name }}</h3>
                            <p class="text-[#212427] mx-[22px] text-sm font-normal">{{ $story->profession }}</p>
                            <p class="text-[#212427] text-sm mx-[22px] font-normal lg:mb-[0] mb-[20px]">
                                {{ $story->city }}, {{ $countryName->country }}
                            </p>
                        </div>
                    </div>

                    @if ($loop->last || $loop->index % 3 == 2)
    </div>
    </div>
    @endif
    @endforeach
    @endif

    </section>
    <!-- temporary card section end -->

    @guest
        <!-- last buttons -->
        <div class="flex justify-center items-center">
            <a href="{{ route('refuse') }}"> <button
                    class="lg:w-48 m-1 mt-5 p-3 rounded-lg text-base font-bold bg-[#D1052C] text-white">Read All
                    Stories</button></a>
            <button class="lg:w-48 m-1 text-base font-bold mt-5 p-3 rounded-lg bg-[#D1052C] text-white">Read Our
                News</button>
        </div>
    @endguest

    <!-- last buttons end -->
    <div class="flex justify-center items-center">

        @auth
            <a href="{{ route('refuse') }}"> <Button
                    class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Load More
                    Stories</button></a>
        @endauth
    </div>
    <div class="bg-white">
        @auth
            <section class=" mb-[-100px]"
                style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
                <div class="py-28 "style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;">
                    <div class="pb-28 shadow-lg">
                        <h1 class="font-bold text-[50px] text-[#212427] text-center">
                            @if ($storyHead !== null)
                                {{ $storyHead->share_title }}
                            @endif
                        </h1>

                        <p class="text-[24px] font-normal text-center text-[#D1052C] capitalize lg:w-[986px] mx-auto">
                            @if ($storyHead !== null)
                                {{ $storyHead->share_subtitle }}
                            @endif
                        </p>
                        <div class=" flex justify-center items-center">
                            <a href="{{ route('share.story') }}">
                                <button class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                                    Story
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        @endauth
    </div>

    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
