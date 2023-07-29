@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')

    <div class=" mt-[104px] mb-[-200px]" style="font-family:'Poppins'">


        @guest
            <h1 class="text-[50px] font-bold text-center">
                @if ($storyHead !== null)
                    {{ $storyHead->story_title }}
                @endif
            </h1>
            <p class="text-2xl font-normal text-center">
                @if ($storyHead !== null)
                    {{ $storyHead->story_subtitle }}
                @endif
            </p>

        @endguest

        @auth

            <h1 class="text-5xl font-black text-center">
                @if ($storyHead !== null)
                    {{ $storyHead->community_sub_title }}
                @endif
            </h1>
            <p class="text-lg text-center mb-5">
                @if ($storyHead !== null)
                    {{ $storyHead->community_sub_subtitle }}
                @endif
            </p>



            <form action="{{ route('community.search') }}" method="post">
                @csrf

                <div class="w-[1320px] mx-auto flex">
                    <div class="">
                        <p class="font-medium">Sort Stories</p>

                        <select name="stories"
                            class="bg-gray-50 border w-[326px] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="text-lg" value="latest">Most Recent</option>
                            <option class="text-lg" value="">Most Relevant</option>

                        </select>
                    </div>
                    <div class="ml-[75px]">
                        <p>By Country</p>
                        <select id="countries" name="country_id"
                            class="bg-gray-50 border w-[326px] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="text-lg" selected value="">All Country</option>
                            @foreach ($country as $story)
                                <option value="{{ $story->id }}">{{ $story->country }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class=" ml-[75px]">
                        <p>By Time</p>

                        <select name="time"
                            class="bg-gray-50 border w-[326px] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option class="text-lg mb-1" value="">Any Time</option>
                            <option class="text-lg mb-1" value="1">Past 24 Hours</option>
                            <option class="text-lg mb-1" value="7">Past Week</option>
                            <option class="text-lg mb-1" value="30">Past Month</option>
                            <option class="text-lg mb-1" value="90">Past 0-3 months</option>
                            <option class="text-lg mb-1" value="180">Past 0-6 months</option>
                            <option class="text-lg mb-1" value="365">Past Year</option>


                        </select>
                    </div>
                    <div class="flex justify-center items-center ml-[17px] mt-6">
                        <button type="submit" class="border px-4 py-2 rounded shadow hover:shadow-xl">Apply</button>
                    </div>
                    <div class="flex justify-center items-center ml-[17px] mt-6">
                        <input type="reset" class="border px-4 py-2 rounded shadow hover:shadow-xl" value="Clear">
                    </div>

                </div>
            </form>
        @endauth

        <!-- temporary card section -->
        <section>
            @if ($stories->count() > 0)
                @foreach ($stories as $story)
                @php  $countryName = App\Models\Country::where('id', $story->country_id)->first(); @endphp
                @if ($loop->index ==0 || $loop->index%3 ==0)
                    <div
                    style="background:url('/images/benifitbg.png');background-size:100% 516px;background-position:0 100%;background-repeat:no-repeat">
                    <div class="grid grid-cols-3 gap-6 w-[1320px] mx-auto mt-6">
                @endif
                            <div
                                class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    {{-- /images/story4.png --}}
                                    <img class="h-[424px] w-full" src="{{ asset( $story->image) }}"
                                        alt="{{ $story->name }}" />
                                </a>
                                <div class=" h-[516px]">
                                    <a href="#">
                                        <h5 class="pt-[20px] px-[22px] text-xl font-bold tracking-tight text-gray-900 dark:text-white">"{{$story->title }}"</h5>
                                    </a>
                                    <p class="mt-5 mx-[22px] text-sm font-normal text-justify text-[#212427] dark:text-gray-400">{{ Str::limit($story->description, 595) }}</p>
                                    <a href="{{ route('single-story', $story->id) }}"
                                        class="text-[#D1052C] font-bold text-base mx-[22px]">Read More</a>
                                    <h3 class="font-semibold text-xl mx-[22px] mt-5 text-[#212427]">{{ $story->name }}</h3>
                                    <p class="text-[#212427] mx-[22px] text-sm font-normal">{{$story->profession}}</p>
                                    <p class="text-[#212427] text-sm mx-[22px] font-normal">
                                        {{ $story->city }},{{ $countryName->country }}</p>
                                </div>
                            </div>

            @if ($loop->last || $loop->index%3 ==2)
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
                        class="lg:w-48 m-1 mt-5 p-3 rounded-lg text-base font-bold bg-[#D1052C] text-white">Read All Stories</button></a>
                <button class="lg:w-48 m-1 text-base font-bold mt-5 p-3 rounded-lg bg-[#D1052C] text-white">Read Our Stories</button>
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
        <div>
            @auth
            <section class=" mb-[-100px]"  style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
            <div class="py-28 "style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;">
            <div class="pb-28 shadow-lg">
            <h1 class="font-bold text-[50px] text-[#212427] text-center">
            @if ($storyHead !== null)
                                    {{ $storyHead->share_title }}
                                @endif
            </h1>

            <p class="text-xl text-center text-[#D1052C] uppercase w-[986px] mx-auto">
            @if ($storyHead !== null)
                                        {{ $storyHead->share_subtitle }}
                                    @endif
            </p>
                <a href="{{route('share.story')}}" class=" flex justify-center items-center"><button
                class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                Story</button></a>
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
