<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 not found</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <section>
        <div class="flex items-center justify-center">
        <img src="/images/404page.png" alt="" class="">
        </div>
        <div>
            <h1 class="text-4xl font-black text-[#D1052C] mt-5 text-center">Oops... Page Not Found!</h1>
            <p class="text-center">Please return to the site homepage . It looks like nothing was found at this locaion. </p>
            <div class="flex justify-center items-center mt-3 mb-20">
            <a href="@auth
                {{route('user.home')}} @else {{route('home')}}
            @endauth" class="bg-[#D1052C] text-white px-5 py-2 rounded-lg cursor-pointer">Back To Home</a>
            </div>
        </div>
    </section>
</body>
</html>
