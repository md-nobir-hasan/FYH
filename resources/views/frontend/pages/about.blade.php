@extends('frontend.layout.app')
@push('title')
    About
@endpush
@section('content')

<div style="font-family:'Poppins'">
    <h1 class="text-center text-4xl font-black mt-10">About Us</h1>
    <p class="text-center text-xl font-normal">As a relocating services we are committed to building jobs make happy and success.</p>
    <h1 class="text-center text-5xl font-black mt-10">FYH  Provides The Services <br/>That Help To Relocate And <br/> Integrate</h1>
    <p class="text-center text-xl font-normal">Being Human is more than just what our broken education system makes it out to be. <br/>We teach the world the art of truly living extraordinary, fulfilling, happy lives.</p>

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mx-2 md:mx-10 lg:mx-20">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
        <img src="{{asset('/images/imageic.png')}}" alt="" class="w-full">
    </div>

    <p class="lg:mx-48 mx-20 mt-4 text-justify text-sm font-normal">I was struggling to find a job that aligned  with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.<br/>
    That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. </p>

    <video height="240" controls class="lg:mx-48 mt-5 mx-20 md:w-[600px] lg:w-[960px]">
  <source src="movie.mp4" type="video/mp4">
</video>

<div class="mt-10 lg:mx-48 mx-20 px-10 py-5 " style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h1 class="font-bold text-xl">“We’re constantly exploring, inventing, and optimizing personal transformation to ultimately unite our species, save our planet, and usher in a new golden age for humanity.”</h1>
            <p class="mt-3 text-xl font-normal">- Thomas Tsangaras, Founder of FYH</p>
  </div>


  <div class="mt-5 lg:mx-36 mx-10 grid lg:grid-cols-3 grid-cols-1">
    <img src="{{asset('/images/rectangle.png')}}" alt="" class="">
    <div class="lg:mt-7 lg:ml-5 col-span-2">
        <h1 class=" text-3xl font-black">At FYH, Learning is a Lifelong Adventure</h1>
        <p class="text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.</p>
    </div>
  </div>
  <div class="mt-5 lg:mx-36 mx-10 grid lg:grid-cols-3 grid-cols-1">
  <div class="lg:mt-7 lg:mr-5 col-span-2">
        <h1 class=" text-3xl font-black">At FYH, Learning is a Lifelong Adventure</h1>
        <p class="text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.</p>
    </div>
    <img src="{{asset('/images/rectangle.png')}}" alt="" class="">
    
  </div>

  <!-- Success section start -->
  <div class="mt-10">
            <h1 class="font-bold text-4xl text-center">What Our Customer Says</h1>
            <p class="text-lg text-center font-normal">Here’s all of the successful stories of our cusomers</p>

            <!-- success card  -->
            <div class="grid lg:grid-cols-3 grid-cols-1 lg:mx-36 mx-10 mt-10">

            <div class="lg:mb-1 mb-5">
                <a href="#" class="block w-80  px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex">
                <img src="{{asset('/images/Ellipse 36.png')}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                <div class="ml-2">
                <h1 class="text-2xl font-bold">Thomas T.</h1>
                <p class="font-medium text-lg">marketing Manager</p>
                </div>
                </div>
                <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                <p class="font-medium text-sm dark:text-gray-400">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five ...</p>
                </a>
            </div>
            <div class="lg:mb-1 mb-5">
                <a href="#" class="block w-80  px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex">
                <img src="{{asset('/images/Ellipse 36.png')}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                <div class="ml-2">
                <h1 class="text-2xl font-bold">Thomas T.</h1>
                <p class="font-medium text-lg">marketing Manager</p>
                </div>
                </div>
                <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                <p class="font-medium text-sm dark:text-gray-400">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five ...</p>
                </a>
            </div>
            <div>
                <a href="#" class="block w-80  px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex">
                <img src="{{asset('/images/Ellipse 36.png')}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                <div class="ml-2">
                <h1 class="text-2xl font-bold">Thomas T.</h1>
                <p class="font-medium text-lg">marketing Manager</p>
                </div>
                </div>
                <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                <p class="font-medium text-sm dark:text-gray-400">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five ...</p>
                </a>
            </div>
            </div>
            <!-- success card end -->
        </div>
        <!-- Success section end -->


        <div class="mt-10">
            <h1 class="font-bold text-4xl text-center">We Are Excited For your Story</h1>
            <p class="font-normal text-xl text-center text-[#D1052C]">Our community runs on voices like yours. It keep us going, and keeps us grounded.<br>Tell us like it is. What's your story?</p>
        </div>
        <div class="text-center mt-3"><button class=" font-semibold text-white pl-5 pr-5 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="/membership">Share Your Story</a></button></div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
