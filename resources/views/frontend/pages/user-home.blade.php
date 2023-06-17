@extends('frontend.layout.app')
@push('title')
   User Home
@endpush
@section('content')
       <div class="lg:mx-40 mt-[86px]" style="font-family:'Poppins'">
            <div>
                <h1 class="text-5xl font-black ">Hi <span class="uppercase">{{$user->fname}}</span>,</h1>
                <p class="text-2xl font-normal">What’s popular now</p>
            </div>
            <!-- card section -->
            <section class="mt-5 grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-5">
                @if ($popularStory->count() > 0)
                @foreach ($popularStory as $story)
                    
               
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow">

                    <img src="{{'/storage/' . $story->image}}" alt="" class="">
                    <div class="absolute mt-[-120px] ml-[55px]">
                        @php   $title = str_split($story->title, 10)      @endphp
                        @foreach ($title as $key=>$item)
                             @if($key==2) @break @endif
                        <h1 class=" text-white text-3xl font-black @if($key==1)ml-[20px] @endif "> {{$item}} </h1>
                        @endforeach
       
            
                    </div>
                    <div class="p-5">
                        <div class="flex">
                            <img src="{{$story->img}}" alt="" class="mt-[-40px]">
                            <div class="ml-3">
                                <h1 class="text-lg mt-[-20px]"> {{$story->name}} </h1>
                                <p class="text-sm text-[#848484]"> {{$story->profession}} </p>
                            </div>
                        </div>
                        <p class="mt-2">
                                 {{Str::limit($story->description, 250)}}
                        </p>
                    </div>
            
                </div>
                @endforeach
                @endif
       
           
            </section>
            <!-- successfull section start -->
            <section class="mt-[140px]">
                <h1 class="text-4xl font-black text-center text-[#D1052C]"> {{$storyCount}} </h1>
                <p class="text-center text-2xl"> @if($shareImage !==null) {{$shareImage->image_title}}  @endif </p>
                @php   $subtitle = str_split($shareImage->image_subtitle, 45)         @endphp
                <p class="text-center text-sm"> 
                    @if($shareImage !==null) 
                             @foreach ($subtitle as $item)
                                   {{$item}} <br>
                             @endforeach
                    @endif
                </p>
                <div class="flex items-center justify-center mt-5">
                    <img src="{{ '/storage/' .$shareImage->lgImage}}" alt="" class="lg:h-[791px] lg:w-[845px]">
                </div>
                <a href="{{route('community')}}" class=" flex justify-center items-center"><button class="lg:w-48 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Read The Stories</button></a>
        </section>
            <!-- successfull section end -->
            <!-- review section start -->
            <section class="mt-20">
            <h1 class="text-5xl font-black text-center">@if($shareImage !==null) {{$shareImage->customer_title}}  @endif</h1>
            <p class="text-center text-xl uppercase">@if($shareImage !==null) {{$shareImage->customer_subtitle}}  @endif</p>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-7">

        
            @foreach ($stories as $sto)
                
           

            <a href="" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="{{'/storage/' . $sto->image}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold"> {{$sto->name}} </h1>
            <p class="font-medium text-lg"> {{$sto->profession}} </p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm text-justify"> 
                {{Str::limit($sto->description, 200)}}
            </p>
            </a>
            @endforeach
       
 
            </div>
            </section>

            <!-- review section end -->
            <!-- Time section start -->
<section class="mt-20 lg:mx-10 mb-[-150px] border shadow-xl">
    <form action="{{route('feedback')}}" method="post">
        @csrf
         <h1 class="text-center text-4xl mt-5 font-black">That's your time</h1>
        <p class="text-center text-sm font-[600] mt-4">What do you think of th services of FYH?</p>
        <div class="lg:mx-48 mt-5 grid grid-cols-2 lg:grid-cols-5 gap-10">
            <label for="ab">
            <div onclick=function1() id="btn1" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
               
                    <img src="/images/Terrible.png" alt="" class="p-5"/>
                    <input type="radio" name="reaction" value="teriable" id="ab" class="hidden">
               
               
            </div>
        </label>

        <label for="bc">
            <div onclick=function2() id="btn2" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Bad.png" alt="" class="p-5"/>
                <input type="radio" name="reaction" value="bad" id="bc" class="hidden">
            </div>
        </label>
        <label for="cd">
            <div onclick=function3() id="btn3" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Okay.png" alt="" class="p-5"/>
                <input type="radio" name="reaction" value="oky" id="cd" class="hidden">
            </div>
        </label>

        <label for="de">
            <div onclick=function4() id="btn4" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/Good.png" alt="" class="p-5"/>
                <input type="radio" name="reaction" value="good" id="de" class="hidden">
            </div>
        </label>

        <label for="ef">
            <div onclick=function5() id="btn5" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                <img src="/images/amazing.png" alt="" class="p-5"/>
                <input type="radio" name="reaction" value="amazing" id="ef" class="hidden">
            </div>
        </label>
        </div>
        <h1 class="text-center font-semibold mt-4 text-lg">What are the main reasons for your rating?</h1>

        <div class="lg:mx-48 mt-2">
        <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm shadow-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Left Your Feedback here..."></textarea>
        </div>
        <div class="mt-2 flex justify-center items-center mb-10">
            <button type="submit" class="bg-[#D1052C] text-white px-6 py-2 rounded">Submit</button>
        </div>
    </form>
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
