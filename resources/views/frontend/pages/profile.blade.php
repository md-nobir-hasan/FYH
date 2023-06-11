@extends('frontend.layout.app')
@push('title')
    Profile
@endpush
@section('content')
     <div class="lg:mx-40 mt-[102px]" style="font-family:'Poppins'">
        <div class="grid grid-cols-4 gap-5">
            <div class="col-span-1">
            <img src="/images/example1.png" alt="" class=""/>
            </div>

            <div class="col-span-3">
            <h1 class="text-4xl font-black">Thomas Tsangaras,</h1>
            <p>Recruiter</p>
            <p>Zurich, Switzerland</p>
            <h1 class="text-xl font-bold mt-5">“I have learnt so much, my memory got better,<br> my morning routine got more structure”</h1>
            <p class="mt-2 text-lg text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.<br><br>I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.</p>
            <div class="mt-5">
            <button type="submit" class="bg-[#D1052C] text-white px-6 py-2 rounded">Edit Story</button>
        </div>
            </div>
        </div>
     </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
