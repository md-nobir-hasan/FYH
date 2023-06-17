@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')
    <div class=" mt-10 mb-[-200px]" style="font-family:'Poppins'">
        
        <h1 class="text-5xl font-black text-center"> @if($storyHead!==null) {{$storyHead->story_title}} @endif </h1>
        <p class="text-lg text-center">  @if($storyHead!==null) {{$storyHead->story_subtitle}} @endif </p>
        <form action="{{route('community.search')}}" method="post">
            @csrf
        <div class="lg:mx-36 grid lg:grid-cols-5 gap-5">
            <div class="lg:w-64">
                <p class="font-medium">Sort Stories</p>
                
                    <select name="stories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option class="text-lg" value="latest" >Most Recent</option>
                    <option class="text-lg" value="">Most Relevant</option>
                </select>
            </div>
            <div class="lg:ml-24 lg:w-64">
                <p>By Country</p>

                <select id="countries" name="country_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option class="text-lg" selected value="" >All Country</option>
                 @foreach ($country as $item)
                     <option value="{{$item->id}}">{{$item->country}}</option>
                 @endforeach
                </select>

            </div>
            <div class="lg:w-64 lg:ml-44">
                <p>By Time</p>
                <select  name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            
                <option class="text-lg mb-1" value="" >Any Time</option>
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
       
        <div class="lg:mx-36 grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">


            @if($stories->count() > 0)

            @foreach ($stories as $item) 
          @php  $countryName = App\Models\Country::where('id', $item->country_id)->first(); @endphp

            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{'/storage/'.$item->image }}" alt="{{$item->name}}" />
                </a>
                <div class="p-3">
                    <a href="{{route('single-story', $item->slug)}}">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"{{Str::limit($item->title, 18)}}"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> {{Str::limit($item->description, 400)}} </p>
                    <a href="{{route('single-story', $item->slug)}}" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> {{$item->name}} <h1>
                            <p class="capitalize">{{$item->profession}} </p>
                            <p class="capitalize">{{$item->city}},
                               @if($countryName !== null)   {{$countryName->country}}  @endif
                                 </p>
                </div>
            </div>

              @endforeach
            @endif
        

            
          

        </div>
                        
        <!-- last buttons -->
        <div class="flex justify-center items-center">
            <a href="{{route('refuse')}}" class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ ALL STORIES</a>
            <button class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">NEWS</button>
        </div>
        <!-- last buttons end -->
        <div class="flex justify-center items-center">
        <a href="{{route('refuse')}}"  class="lg:w-48 m-1 mt-16 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Load More Stories</a>
        </div>
        <div>
        <section class="mt-28 mb-[-100px]">
            <h1 class="font-bold text-5xl text-[#212427] text-center">
                   
            </h1>
            
            <p class="text-xl text-center text-[#D1052C] uppercase">
                @if($storyHead!==null) {{$storyHead->share_subtitle}} @endif
            </p>
            <a href="{{route('share.story')}}" class=" flex justify-center items-center"><button
                    class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">  
                    @if($storyHead!==null) {{$storyHead->share_title}} @endif
                </button></a>
        </section>
        </div>

    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
