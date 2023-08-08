<!DOCTYPE html>
<html>
<head>
<title>OTP</title>
</head>
<style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
@vite(['resources/css/app.css','resources/js/app.js'])
<body style="background:url(/images/loginimg.png);background-size:100% ;background-repeat:no-repeat;background-color:#FAF7F7;">
<section style="font-family:'Poppins'">
 <div class="w-[584px] h-[400px] lg:mt-[102px] bg-white rounded-xl mx-auto">
    <div class="pt-[28px]">
    <a href="/"><img src="/images/fyhlogo.png" src="" class="w-[111px] h-[37px] mx-auto"/></a>
    </div>
    <h5 class="mt-[37px] text-[28px] font-semibold text-center">Password Reset</h5>
    <p class="text-center font-normal text-base">We sent a code to {{$email}}</p>
    <hr class="w-[413px] mx-auto mt-[10px] border-[#D9D9D9]">


    <form action="{{route('otp.match')}}" method="POST">
        @csrf
    <div class="flex mt-5 justify-center items-center">
        <input type="number" name="digit1" id="first_name" oninput="limitDigits(this, 1)" class="mr-5 bg-gray-50 border border-[#212427] text-black font-bold text-3xl focus:ring-black focus:border-2 block w-[45px] h-[45px]"  required>
        <input type="number" name="digit2" id="first_name" oninput="limitDigits(this, 1)" class="mr-5 bg-gray-50 border border-[#212427] text-black font-bold text-3xl focus:ring-black focus:border-2 block w-[45px] h-[45px]"  required>
        <input type="number" name="digit3" id="first_name" oninput="limitDigits(this, 1)" class="mr-5 bg-gray-50 border border-[#212427] text-black font-bold text-3xl focus:ring-black focus:border-2 block w-[45px] h-[45px]"  required>
        <input type="number" name="digit4" id="first_name" oninput="limitDigits(this, 1)" class="mr-5 bg-gray-50 border border-[#212427] text-black font-bold text-3xl focus:ring-black focus:border-2 block w-[45px] h-[45px]"  required>
        <input type="number" name="digit5" id="first_name" oninput="limitDigits(this, 1)" class="mr-5 bg-gray-50 border border-[#212427] text-black font-bold text-3xl focus:ring-black focus:border-2 block w-[45px] h-[45px]"  required>
        <input type="number" name="digit6" id="first_name" oninput="limitDigits(this, 1)" class="mr-5 bg-gray-50 border border-[#212427] text-black font-bold text-3xl focus:ring-black focus:border-2 block w-[45px] h-[45px]"  required>
    </div>
    <p class="text-[red] text-center mt-1">{{isset($msg) ? $msg : ''}}</p>
    <div class="flex justify-center items-center"><button type="submit" class="font-bold text-base bg-[#D1052C] w-[326px] h-[45px] text-white {{isset($msg) ? 'mt-5' : 'mt-1'}} rounded-lg">Continue</button></div>
    </form>
    {{-- <p class="text-sm font-normal mt-[10px] text-center"> --}}

        <form action="{{route('password.store')}}" method="POST" class="text-sm font-normal mt-[10px] text-center">
            @csrf
            <span>Don’t receive an email?</span>
            <input type="hidden" name="email" value="{{$email}}">
            <button>Click to resend</button>
        </form>
        {{-- <a href="#"><span class="font-medium text-[#D1052C] ml-2"></span></a> --}}
    {{-- </p> --}}

    <a href="/login"><div class="mt-[14px] flex justify-center items-center">
    <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.00007 4.56818H14" stroke="#212427"/>
<path d="M3.979 1L0.999855 4.56821L3.979 7.92653" stroke="#212427"/>
</svg>

    <p class="text-sm font-medium">Back to log in</p>
    </div></a>
 </div>
</section>
<script>

function limitDigits(input,maxLength){
    if(input.value.length > maxLength){
        input.value = input.value.slice(0, maxLength)
    }
    console.log(input.value)
}
</script>
</body>
</html>
