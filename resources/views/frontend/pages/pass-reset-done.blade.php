
<!DOCTYPE html>
<html>
<head>
<title></title>
@vite(['resources/css/app.css'])
</head>
<body>
<div class="mt-20 lg:mx-[400px] mb-[-150px]" style="font-family:'Poppins'">
    <section class="border rounded-lg shadow-lg p-5">
        <div class="flex justify-center items-center ">
            <a href="/"><img src="/images/fyhlogo.png" alt="" class="h-10 w-28"/></a>
        </div>
        <div class="mt-[50px] flex justify-center items-center">
            <img src="/images/Loading.png"/>
        </div>
        <h1 class="text-3xl font-bold text-center">All Done!</h1>
        <p class="text-center text-xl font-medium">Your password has been reset.<br>Click below to log in magically.</p>
        <a href="{{route('login')}}" class="flex justify-center items-center">
                        <div class="my-5 text-white  rounded px-28 py-3 font-semibold"
                            style="background-color:#D1052C">
                            
                        <button class="mr-1 flex justify-center font-lg">Continue<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg></button>
                       
                            
                        </div>
                    </a>
    </section>
</div>
</body>
</html>