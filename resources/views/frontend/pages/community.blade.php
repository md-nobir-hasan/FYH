@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')

    <div class=" mt-10 mb-[-200px]" style="font-family:'Poppins'">


        @guest
            <h1 class="text-5xl font-black text-center">
                @if ($storyHead !== null)
                    {{ $storyHead->story_title }}
                @endif
            </h1>
            <p class="text-lg text-center">
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

                <div class="lg:mx-36 grid lg:grid-cols-5 gap-5">
                    <div class="lg:w-64">
                        <p class="font-medium">Sort Stories</p>

                        <select name="stories"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="text-lg" value="latest">Most Recent</option>
                            <option class="text-lg" value="">Most Relevant</option>

                        </select>
                    </div>
                    <div class="lg:ml-24 lg:w-64">
                        <p>By Country</p>
                        <select id="countries" name="country_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="text-lg" selected value="">All Country</option>
                            @foreach ($country as $item)
                                <option value="{{ $item->id }}">{{ $item->country }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="lg:w-64 lg:ml-44">
                        <p>By Time</p>

                        <select name="time"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option class="text-lg mb-1" value="">Any Time</option>
                            <option class="text-lg mb-1" value="1">Past 24 Hours</option>
                            <option class="text-lg mb-1" value="7">Past Week</option>
                            <option class="text-lg mb-1" value="30">Past Month</option>
                            <option class="text-lg mb-1" value="90">Past 0-3 months</option>
                            <option class="text-lg mb-1" value="180">Past 0-6 months</option>
                            <option class="text-lg mb-1" value="365">Past Year</option>


                        </select>
                    </div>
                    <div class="flex justify-center items-center lg:mt-5 lg:ml-72">
                        <button type="submit" class="border px-4 py-2 rounded shadow hover:shadow-xl">Apply</button>
                    </div>
                    <div class="flex justify-center items-center lg:mt-5 lg:ml-28">
                        <input type="reset" class="border px-4 py-2 rounded shadow hover:shadow-xl" value="Clear">
                    </div>

                </div>
            </form>
        @endauth
        <div class="lg:mx-36 grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">

            @if ($stories->count() > 0)
                @foreach ($stories as $item)
                    @php  $countryName = App\Models\Country::where('id', $item->country_id)->first(); @endphp

                    <!-- <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ '/storage/' . $item->image }}" alt="{{ $item->name }}" />
                        </a>
                        <div class="p-3">
                            <a href="{{ route('single-story', $item->slug) }}">
                                <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">
                                    "{{ Str::limit($item->title, 18) }}"</h5>

                            </a>
                            <p class=" text-sm font-normal text-[#212427] text-justify">
                                {{ Str::limit($item->description, 400) }} </p>
                            <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-black">
                                Read more

                            </a>
                            <h1 class="text-xl font-bold mt-2"> {{ $item->name }} <h1>
                                    <p class="capitalize">{{ $item->profession }} </p>
                                    <p class="capitalize">{{ $item->city }},
                                        @if ($countryName !== null)
                                            {{ $countryName->country }}
                                        @endif
                                    </p>
                        </div>
                    </div> -->
                    
                @endforeach
            @endif

        </div>
        <!-- temporary card section -->
<section>
    <div style="background:url('/images/benifitbg.png');background-size:100% 60%;background-position:0 100%;background-repeat:no-repeat">
    <div class="grid grid-cols-3 gap-4 lg:mx-36" >
        
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="h-2/5 w-full" src="/images/story4.png" alt="" />
            </a>
            <div class="p-5 h-3/5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-justify text-[#212427] dark:text-gray-400">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
                <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-bold text-base">Read More</a>
                <h3 class="font-semibold text-xl text-[#212427]">David Milan</h3>
                <p class="text-[#212427] text-sm font-normal">English Teacher</p>
                <p class="text-[#212427] text-sm font-normal">Berlyn,Germany</p>
            </div>
        </div>
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="h-2/5 w-full" src="/images/story3.png" alt="" />
            </a>
            <div class="p-5 h-3/5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-justify text-[#212427] dark:text-gray-400">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
                <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-bold text-base">Read More</a>
                <h3 class="font-semibold text-xl text-[#212427]">David Milan</h3>
                <p class="text-[#212427] text-sm font-normal">English Teacher</p>
                <p class="text-[#212427] text-sm font-normal">Berlyn,Germany</p>
            </div>
        </div>
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="h-2/5 w-full" src="/images/story2.png" alt="" />
            </a>
            <div class="p-5 h-3/5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-justify text-[#212427] dark:text-gray-400">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
                <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-bold text-base">Read More</a>
                <h3 class="font-semibold text-xl text-[#212427]">David Milan</h3>
                <p class="text-[#212427] text-sm font-normal">English Teacher</p>
                <p class="text-[#212427] text-sm font-normal">Berlyn,Germany</p>
            </div>
        </div>
        
            </div>
    </div>
    <div class="mt-4" style="background:url('/images/benifitbg.png');background-size:100% 60%;background-position:0 100%;background-repeat:no-repeat">
    <div class="grid grid-cols-3 gap-4 lg:mx-36" >
        
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="h-2/5 w-full" src="/images/story4.png" alt="" />
            </a>
            <div class="p-5 h-3/5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-justify text-[#212427] dark:text-gray-400">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
                <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-bold text-base">Read More</a>
                <h3 class="font-semibold text-xl text-[#212427]">David Milan</h3>
                <p class="text-[#212427] text-sm font-normal">English Teacher</p>
                <p class="text-[#212427] text-sm font-normal">Berlyn,Germany</p>
            </div>
        </div>
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="h-2/5 w-full" src="/images/story3.png" alt="" />
            </a>
            <div class="p-5 h-3/5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-justify text-[#212427] dark:text-gray-400">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
                <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-bold text-base">Read More</a>
                <h3 class="font-semibold text-xl text-[#212427]">David Milan</h3>
                <p class="text-[#212427] text-sm font-normal">English Teacher</p>
                <p class="text-[#212427] text-sm font-normal">Berlyn,Germany</p>
            </div>
        </div>
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="h-2/5 w-full" src="/images/story2.png" alt="" />
            </a>
            <div class="p-5 h-3/5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                </a>
                <p class="mb-3 text-sm text-justify font-normal text-[#212427] dark:text-gray-400">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
                <a href="{{ route('single-story', $item->slug) }}" class="text-[#D1052C] font-bold text-base">Read More</a>
                <h3 class="font-semibold text-xl text-[#212427]">David Milan</h3>
                <p class="text-[#212427] text-sm font-normal">English Teacher</p>
                <p class="text-[#212427] text-sm font-normal">Berlyn,Germany</p>
            </div>
        </div>
        
            </div>
    </div>
</section>
<!-- temporary card section end -->
        @guest
            <!-- last buttons -->
            <div class="flex justify-center items-center">
                <a href="{{ route('refuse') }}"> <button
                        class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ ALL
                        STORIES</button></a>
                <button class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">NEWS</button>
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


                <section class="mt-28 mb-[-100px] shadow-xl pb-10" style="background:url('/images/lastbg.png');background-position:cover;background-repeat:no-repeat;background-size:100%">
                    <div class=" py-14" style="background:url('/images/Line2.png');background-position:cover;background-repeat:no-repeat;background-size:100%">
                    <h1 class="font-bold text-5xl text-[#212427] text-center">
                        @if ($storyHead !== null)
                        {{ $storyHead->share_title }}
                    @endif
                    </h1>

                    <div>
                        <p class="text-xl text-center text-[#D1052C] uppercase w-8/12 mx-auto">
                            @if ($storyHead !== null)
                                {{ $storyHead->share_subtitle }}
                            @endif
                        </p>
                    </div>
                    <a href="{{ route('share.story') }}" class=" flex justify-center items-center"><button
                            class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">
                          Share Your Stories
                        </button></a>
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
