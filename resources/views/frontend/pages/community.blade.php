@extends('frontend.layout.app')
@push('title')
    Community
@endpush
@section('content')
    <div class=" mt-10 mb-[-200px]" style="font-family:'Poppins'">
        
        <h1 class="text-5xl font-black text-center"> @if($storyHead!==null) {{$storyHead->story_title}} @endif </h1>
        <p class="text-lg text-center">  @if($storyHead!==null) {{$storyHead->story_subtitle}} @endif </p>
        <div class="lg:mx-36 grid lg:grid-cols-5 gap-5">
            <div class="lg:w-64">
                <p class="font-medium">Sort Stories</p>
                
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option class="text-lg" selected>Most Recent</option>
                    <option class="text-lg" value="Most Relevant">Most Relevant</option>
                </select>
            </div>
            <div class="lg:ml-24 lg:w-64">
                <p>By Country</p>

                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option class="text-lg" selected>All Country</option>
                <option class="text-lg mb-1" value="AF">Afganistan</option>
                <option class="text-lg mb-1" value="Albenia">Albenia</option>
                <option class="text-lg mb-1" value="Algeria">Algeria</option>
                <option class="text-lg mb-1" value="American Samoa">American Samoa</option>
                <option class="text-lg mb-1" value="Andorra">Andorra</option>
                <option class="text-lg mb-1" value="Angola">Angola</option>
                <option class="text-lg mb-1" value="Angulla">Anguilla</option>
                <option class="text-lg mb-1" value="Antartica">Antartica</option>
                <option class="text-lg mb-1" value="Argentina">Argentina</option>
                <option class="text-lg mb-1" value="Australia">Australia</option>
                <option class="text-lg mb-1" value="Austria">Austria</option>
                <option class="text-lg mb-1" value="Bahams">Bahams</option>
                <option class="text-lg mb-1" value="Bangladesh">Bangladesh</option>
                </select>

            </div>
            <div class="lg:w-64 lg:ml-44">
                <p>By Time</p>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option class="text-lg" selected>By Time</option>
                <option class="text-lg mb-1" value="AF">Any Time</option>
                <option class="text-lg mb-1" value="Albenia">Past 24 Hours</option>
                <option class="text-lg mb-1" value="Algeria">Past Week</option>
                <option class="text-lg mb-1" value="American Samoa">Past Month</option>
                <option class="text-lg mb-1" value="Andorra">Past 0-3 months</option>
                <option class="text-lg mb-1" value="Angola">Past 0-6 months</option>
                <option class="text-lg mb-1" value="Angulla">Past Year</option>

                </select>
            </div>
            <div class="flex justify-center items-center lg:mt-5 lg:ml-72">
                <button class="border px-4 py-2 rounded shadow hover:shadow-xl">Apply</button>
            </div>
            <div class="flex justify-center items-center lg:mt-5 lg:ml-28">
                <button class="border px-4 py-2 rounded shadow hover:shadow-xl">Clear</button>
            </div>
            
        </div>

        <!-- <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5 mx-36 mt-5">

            @if($stories->count() > 0)

            @foreach ($stories as $item) -->
                
           
            <!-- card -->
            <!-- <div class="">
                <div class=" bg-white border border-gray-200 rounded-lg shadow mb-5">
                    <a href="#">
                        <img src="{{'/storage/'.$item->image }}" alt="{{$item->name}}" class="" width="100%" style="height: 200px;" >
                    </a>
                    <div class="">
                        <a href="#">
                            <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{Str::limit($item->name, 20)}} </h5>
                            <p class="font-medium"> {{$item->profession}} </p>
                            <p class="font-medium"> {{Str::limit($item->address, 15)}} </p>
                        </a>
                        <h1 class="font-extrabold mt-2 text-lg">“{{Str::limit($item->title, 18)}}”</h1>
                        <p class="mb-3 font-normal text-sm"> {{Str::limit($item->description, 150)}} </p>

                    </div>
                  
                </div>
                <a href="{{route('single-story', $item->slug)}}" class="lg:w-48  mt-10 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</a>

            </div> -->
            <!-- card end -->
            <!-- @endforeach
            @endif
        </div> -->
        <div class="lg:mx-36 grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">
            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/story2.png" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. </p>
                    <a href="" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> David Milan <h1>
                            <p class="capitalize">English Teacher</p>
                            <p class="capitalize">Berlin,Germany</p>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/story1.png" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. </p>
                    <a href="" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> David Milan <h1>
                            <p class="capitalize">English Teacher</p>
                            <p class="capitalize">Berlin,Germany</p>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/story3.png" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. </p>
                    <a href="" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> David Milan <h1>
                            <p class="capitalize">English Teacher</p>
                            <p class="capitalize">Berlin,Germany</p>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/story4.png" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. </p>
                    <a href="" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> David Milan <h1>
                            <p class="capitalize">English Teacher</p>
                            <p class="capitalize">Berlin,Germany</p>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/story5.png" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. </p>
                    <a href="" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> David Milan <h1>
                            <p class="capitalize">English Teacher</p>
                            <p class="capitalize">Berlin,Germany</p>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/story6.png" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
                    </a>
                    <p class=" text-sm font-normal text-[#212427] text-justify"> I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. </p>
                    <a href="" class="text-[#D1052C] font-black">
                        Read more
                    </a>
                    <h1 class="text-xl font-bold mt-2"> David Milan <h1>
                            <p class="capitalize">English Teacher</p>
                            <p class="capitalize">Berlin,Germany</p>
                </div>
            </div>

            
          

        </div>
                        
        <!-- last buttons -->
        <div class="flex justify-center items-center">
            <button class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ ALL STORIES</button>
            <button class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">NEWS</button>
        </div>
        <!-- last buttons end -->
        <div class="flex justify-center items-center">
        <button class="lg:w-48 m-1 mt-16 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Load More Stories</button>
        </div>
        <div>
        <section class="mt-28 mb-[-100px]">
            <h1 class="font-bold text-5xl text-[#212427] text-center">
                   We Are Excited For Your Story
            </h1>
            
            <p class="text-xl text-center text-[#D1052C] uppercase">
            Our community runs on voices like yours. It keep us going, and keeps us grounded.<Br>Tell us like it is. What's your story?
            </p>
            <a href="/" class=" flex justify-center items-center"><button
                    class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                    Story</button></a>
        </section>
        </div>

    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
