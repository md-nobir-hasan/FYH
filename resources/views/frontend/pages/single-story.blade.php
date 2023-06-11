@extends('frontend.layout.app')
@push('title')
{{$story->name}}
@endpush
@section('content')

@extends('frontend.layout.app')
@push('title')
    Profile
@endpush
@section('content')
<div class="lg:mx-40 mt-20" style="font-family:'Poppins'">
<section class="border-2 rounded grid grid-cols-1 lg:grid-cols-4 p-4 gap-10">
    <div class="col-span-1">
        <img src="/images/example1.png" alt="" class="w-full"/>
    </div>
    <div class="col-span-3">
        <h1 class="text-4xl font-black mb-2">“I have learnt so much, my memory got better,<br> my morning routine got more structure”</h1>
        <p class="text-[#666565]">Posted: Sun April 23,2023</p>
        <p class="text-justify text-lg mt-3">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.<br><br>

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.</p>
<h1 class="text-xl font-bold my-2">David Milan</h1>
<p class="text-[#666565]">English Teacher</p>
<p class="text-[#666565]">Berlin,Germany</p>
    </div>
</section>
<section class="">
    <h1 class="text-2xl my-5 font-bold">Related Stories</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">
                        
<div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="/images/story2.png" alt="" />
    </a>
    <div class="p-3">
        <a href="#">
            <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">"I have learnt so much, my memory got better, my morning routine got more structure"</h5>
        </a>
        <p class=" text-sm font-normal text-[#212427] text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
        <a href="#" class="text-[#D1052C] font-black">
            Read more
        </a>
        <h1 class="text-xl font-bold mt-2">David Milan<h1>
            <p>English Teacher</p>
            <p>Berlin,Germany</p>
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
        <p class=" text-sm font-normal text-[#212427] text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
        <a href="#" class="text-[#D1052C] font-black">
            Read more
        </a>
        <h1 class="text-xl font-bold mt-2">David Milan<h1>
            <p>English Teacher</p>
            <p>Berlin,Germany</p>
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
        <p class=" text-sm font-normal text-[#212427] text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.</p>
        <a href="#" class="text-[#D1052C] font-black">
            Read more
        </a>
        <h1 class="text-xl font-bold mt-2">David Milan<h1>
            <p>English Teacher</p>
            <p>Berlin,Germany</p>
    </div>
</div>
   </div>
   <div class="mt-2 flex justify-center items-center mb-10">
            <button type="submit" class="bg-[#D1052C] mt-2 text-white px-6 py-2 rounded">Load More Stories</button>
        </div>
</section>
<section>
<div class="mt-28 mb-[-100px]">
        <div class="">
            <h1 class="font-black text-5xl text-center">We Are Excited For your Story</h1>
            <p class="font-medium text-2xl text-center text-[#D1052C]">Our community runs on voices like yours. It keep us going, and keeps us grounded.<br>Tell us like it is. What's your story?</p>
        </div>
        <div class="text-center mt-3"><button class=" font-semibold text-white px-7 py-2 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="/membership">Share Your Story</a></button></div>
        </div>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush


@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
