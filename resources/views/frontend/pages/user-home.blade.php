@extends('frontend.layout.app')
@push('title')
   User Home
@endpush
@section('content')
       <div class="lg:mx-40 mt-[86px]" style="font-family:'Poppins'">
            <div>
                <h1 class="text-5xl font-black">Hi Thomas,</h1>
                <p class="text-2xl font-normal">What’s popular now</p>
            </div>
            <!-- card section -->
            <section class="mt-5 grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-5">
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">

                    <img src="/images/featured1.png" alt="" class="">
                    <div class="absolute mt-[-120px] ml-[55px]">
                    <h1 class=" text-white text-3xl font-black">My Best Decision</h1>
                    <h1 class=" text-white ml-[20px] text-3xl font-black"> of Relocating </h1>
                    </div>
                    <div class="p-5">
                        <div class="flex">
                            <img src="/images/user1.png" alt="" class="mt-[-40px]">
                            <div class="ml-3">
                                <h1 class="text-lg mt-[-20px]">Thomas T.</h1>
                                <p class="text-sm text-[#848484]">Marketing Manager</p>
                            </div>
                        </div>
                        <p class="mt-2">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking </p>
                    </div>
            
                </div>
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">

                    <img src="/images/featured2.png" alt="" class="">
                    <div class="absolute mt-[-120px] ml-[35px]">
                    <h1 class=" text-white text-3xl font-black">Master Of Happiness</h1>
                    <h1 class=" text-white ml-[80px] text-3xl font-black"> in Here </h1>
                    </div>
                    <div class="p-5">
                        <div class="flex">
                            <img src="/images/user2.png" alt="" class="mt-[-40px]">
                            <div class="ml-3">
                                <h1 class="text-lg mt-[-20px]">Courtnei H.</h1>
                                <p class="text-sm text-[#848484]">The Walt Disney Company</p>
                            </div>
                        </div>
                        <p class="mt-2">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking </p>
                    </div>
            
                </div>
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">

                    <img src="/images/featured3.png" alt="" class="w-full">
                    <div class="absolute mt-[-120px] ml-[55px]">
                    <h1 class=" text-white text-3xl font-black">My Best Decision</h1>
                    <h1 class=" text-white ml-[30px] text-3xl font-black"> of Relocating </h1>
                    </div>
                    <div class="p-5">
                        <div class="flex">
                            <img src="/images/user3.png" alt="" class="mt-[-40px]">
                            <div class="ml-3">
                                <h1 class="text-lg mt-[-20px]">Thomas T.</h1>
                                <p class="text-sm text-[#848484]">Engineer at Apple</p>
                            </div>
                        </div>
                        <p class="mt-2">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking </p>
                    </div>
            
                </div>
            </section>
            <!-- successfull section start -->
            <section class="mt-[140px]">
                <h1 class="text-4xl font-black text-center text-[#D1052C]">15,365</h1>
                <p class="text-center text-2xl">Successful stories of the candidates </p>
                <p class="text-center text-sm">I was struggling to find a job that aligned with my <br> skills and experience, and I was starting Before this <br> program I was struggling to remember things, such as <br> PIN numbers, important dates.</p>
                <div class="flex items-center justify-center mt-5">
                    <img src="/images/successStory.png" alt="" class="lg:h-[791px] lg:w-[845px]">
                </div>
                <a href="/" class=" flex justify-center items-center"><button class="lg:w-48 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Read The Stories</button></a>
        </section>
            <!-- successfull section end -->
            <!-- review section start -->
            <section class="mt-20">
            <h1 class="text-5xl font-black text-center">What Our Member Say</h1>
            <p class="text-center text-xl uppercase">Here’s all of the successful stories of our customers</p>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-7">

            <a href="" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="/images/Ellipse 36.png" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold">Thomas T.</h1>
            <p class="font-medium text-lg">Marketing Manager</p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm text-justify"> 
            Lorem Ipsum is simply dummy text of the printin and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since a the 1500s, when an unknown printer took a gallxe of type and scrambled it to make a ...
            </p>
            </a>
            <a href="" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="/images/angelia.png" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold">Angelia F.</h1>
            <p class="font-medium text-lg">Marketing Manager</p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm text-justify"> 
            Lorem Ipsum is simply dummy text of the printin and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since a the 1500s, when an unknown printer took a gallxe of type and scrambled it to make a ...
            </p>
            </a>
            <a href="" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="/images/emma.png" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold">Emma D.</h1>
            <p class="font-medium text-lg">Engineer</p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm text-justify"> 
            Lorem Ipsum is simply dummy text of the printin and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since a the 1500s, when an unknown printer took a gallxe of type and scrambled it to make a ...
            </p>
            </a>
 
            </div>
            </section>

            <!-- review section end -->
            <!-- Time section start -->
<section class="mt-20 lg:mx-10 mb-[-150px] border shadow-xl">
         <h1 class="text-center text-4xl mt-5 font-black">That's your time</h1>
        <p class="text-center text-sm font-[600] mt-4">What do you think of th services of FYH?</p>
        <div class="lg:mx-48 mt-5 grid grid-cols-2 lg:grid-cols-5 gap-10">
            <div onclick=function1() id="btn1" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Terrible.png" alt="" class="p-5"/>
            </div>
            <div onclick=function2() id="btn2" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Bad.png" alt="" class="p-5"/>
            </div>
            <div onclick=function3() id="btn3" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Okay.png" alt="" class="p-5"/>
            </div>
            <div onclick=function4() id="btn4" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Good.png" alt="" class="p-5"/>
            </div>
            <div onclick=function5() id="btn5" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/amazing.png" alt="" class="p-5"/>
            </div>
            
        </div>
        <h1 class="text-center font-semibold mt-4 text-lg">What are the main reasons for your rating?</h1>

        <div class="lg:mx-48 mt-2">
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm shadow-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Left Your Feedback here..."></textarea>
        </div>
        <div class="mt-2 flex justify-center items-center mb-10">
            <button type="submit" class="bg-[#D1052C] text-white px-6 py-2 rounded">Submit</button>
        </div>

</section>
            <!-- Time section end -->
       </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
    <script>
        let btn1= document.getElementById("btn1")
        let btn2= document.getElementById("btn2")
        let btn3= document.getElementById("btn3")
        let btn4= document.getElementById("btn4")
        let btn5= document.getElementById("btn5")

        const function1=()=>{
            
            if(btn1.style.backgroundColor === '' || btn2.style.backgroundColor || btn3.style.backgroundColor || btn4.style.backgroundColor || btn5.style.backgroundColor){
                btn1.style.backgroundColor = '#D1052C';
                btn2.style.backgroundColor = ''
                btn3.style.backgroundColor=''
                btn4.style.backgroundColor=''
                btn5.style.backgroundColor=''
            }
            else{
                btn1.style.backgroundColor='';
 
            }
            
        }
        const function2=()=>{
            
            if(btn2.style.backgroundColor === '' || btn1.style.backgroundColor || btn3.style.backgroundColor || btn4.style.backgroundColor || btn4.style.backgroundColor){
                btn2.style.backgroundColor = '#D1052C';
                btn1.style.backgroundColor = '';
                btn3.style.backgroundColor='';
                btn4.style.backgroundColor=''
                btn5.style.backgroundColor=''
            }else{
                btn2.style.backgroundColor=''
            }
        }
        const function3=()=>{
            if(btn3.style.backgroundColor === '' || btn1.style.backgroundColor || btn2.style.backgroundColor || btn4.style.backgroundColor || btn5.style.backgroundColor){
                btn3.style.backgroundColor = '#D1052C';
                btn1.style.background = ''
                btn2.style.backgroundColor=''
                btn4.style.backgroundColor=''
                btn5.style.backgroundColor=''
            }else{
                btn3.style.backgroundColor='';
            }
        }
        const function4=()=>{
            
            if(btn4.style.backgroundColor === '' || btn1.style.backgroundColor || btn2.style.backgroundColor || btn3.style.backgroundColor || btn5.style.backgroundColor){
                btn4.style.backgroundColor = '#D1052C';
                btn1.style.backgroundColor =''
                btn2.style.backgroundColor =''
                btn3.style.backgroundColor =''
                btn5.style.backgroundColor =''
            }else{
                btn4.style.backgroundColor='';
            }
        }
        const function5=()=>{

            if(btn5.style.backgroundColor === '' || btn1.style.backgroundColor || btn2.style.backgroundColor || btn3.style.backgroundColor || btn4.style.backgroundColor){
                btn5.style.backgroundColor = '#D1052C';
                btn1.style.backgroundColor='';
                btn2.style.backgroundColor='';
                btn3.style.backgroundColor='';
                btn4.style.backgroundColor='';
            }else{
                btn5.style.backgroundColor='';
                
            }
        }
    </script>
@endpush
