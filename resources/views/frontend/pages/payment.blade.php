@extends('frontend.layout.app')
@push('title')
    Payment
@endpush
@section('content')

<div class="bg-[#F5F5F5] grid lg:grid-cols-3 grid-cols-1 mt-10 lg:mx-36" style="font-family: 'Montserrat'">
    <div class="col-span-2 p-10">
        <div class="border-2 border-gray-500 rounded-xl p-5">
            <h1 class="font-bold text-xl ml-4">Your Account</h1>
            <p class="ml-4">Thomas Tsangaras</p>
            <p class="ml-4">thomastsangaras@mail.com</p>
        </div>
        <div class="border-2 border-gray-500 mt-5 rounded-xl p-5">
        <div class="flex">
            <h1 class="font-bold text-xl ml-4">Billing Details</h1>
            <button class="ml-auto text-white p-1 rounded bg-[#D1052C]">Edit</button>
        </div>
            <p class="ml-4">Thomas Tsangaras</p>
            <p class="ml-4">thomastsangaras@mail.com</p>
            <p class="ml-4">+1258544111 151515</p>
            <p class="ml-4">Switzerland</p>
            <p class="ml-4">Zurich</p>
            <p class="ml-4">8000</p>
            
        </div>
        <!-- payment -->

        <div>
        <div class="border-2 mt-5 border-gray-500 rounded-xl p-5">
            <h1 class="font-extrabold text-xl mb-2">Select Payment Method</h1>
            <div class="flex items-center mb-4">
            <div class="flex">
                <div>
                    <input onclick=myFunction() id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-green-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-base font-medium text-black dark:text-gray-300">Credit / Debit Card</label>
                </div>
                <div class="flex lg:ml-80 ml-[200px]">
                <img src="{{asset('/images/visa.png')}}" alt="" class="h-6">
                <img src="{{asset('/images/american.png')}}" alt="" class="h-6">
                <img src="{{asset('/images/debit.png')}}" alt="" class="h-6">
                </div>
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-400 border-0 mt-[-10px]">
        <div id="hideShow" class="hidden">
            <h1 class="text-base font-semibold mt-[-10px]">Card Number</h1>
            <input type="number" placeholder="e.g. 12025151002" class="w-full border-none mb-6 border-rounded">
                <div class="flex mt-3">
                    <div>
                    <h1 class="text-base font-semibold mt-[-10px] mb-[-26px]">Expiration Date</h1>
                    <hr class="h-px my-8 bg-gray-400 border-0 ">
                    </div>
                    <input type="date" class="border-none ml-3 bg-[#F5F5F5] mt-[-30px]">
                </div>
                <h1 class="text-base font-semibold mt-[-10px]">CVV<h1>
                <input type="number" placeholder="e.g. 2025123" class="w-full border-none mb-6 border-rounded">
                <div>
                    <input id="radio" type="radio" class="w-3 h-3">
                    <label for="radio">Save card for next time</label>
                    <hr class="h-px my-8 bg-black border-0 mt-0">
                </div>
                <div class="flex mt-[-20px]">
                    <h1>Your Order</h1>
                    <p class="ml-auto text-sm">CHF 29.00</p>
                </div>
                <div class="flex">
                    <h1>Others Fee</h1>
                    <p class="ml-auto text-sm">CHF 0.00</p>
                </div>
                <hr class="h-px my-8 bg-black border-0 mt-0">
                <div class="flex">
                    <h1 class="font-bold mt-[-25px]">Total:</h1>
                    <p class="ml-auto font-bold text-sm mt-[-25px]">CHF 29.00</p>
                </div>
                <button
                    class="text-center w-full h-[48px] bg-green-500 mt-2 rounded-[10px] text-white text-[16px] font-bold"><a href="/congratulations">PAY & GO</a></button>
        </div>
        <div id="ahideShow" >
            <div class="flex items-center">
                <input onclick=anotherFunction()  id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-green-600 bg-gray-300 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="default-radio-2" class="ml-2 text-base font-medium text-black dark:text-gray-300">Paypal</label>
            </div>
            <img src="{{asset('/images/paypal.png')}}" alt="" class="h-5 ml-auto">
            <hr class="h-px my-8 bg-gray-400 border-0 mt-0">
            <div id="paypal" class="hidden">
            <div class="flex mt-[-20px]">
                    <h1>Your Order</h1>
                    <p class="ml-auto text-sm">CHF 29.00</p>
                </div>
                <div class="flex">
                    <h1>Others Fee</h1>
                    <p class="ml-auto text-sm">CHF 0.00</p>
                </div>
                <hr class="h-px my-8 bg-black border-0 mt-0">
                <div class="flex">
                    <h1 class="font-bold mt-[-25px]">Total:</h1>
                    <p class="ml-auto font-bold text-sm mt-[-25px]">CHF 29.00</p>
                </div>
                <hr class="h-px my-8 bg-black border-0 mt-0 mb-0">
                <button
                    class="text-center w-full h-[48px] bg-green-500 mt-2 rounded-[10px] text-white text-[16px] font-bold"><a href="/congratulations">PAY & GO</a></button>
            </div>
        </div>
                
        </div>
        </div>
        <!-- payment end -->
    </div>
    <div class="col-span-1 mt-10 mr-6 lg:ml-[-20px]">
        <div class="border-2 border-gray-500 rounded-xl p-3">
            <h1 class="font-bold text-xl ml-4">Order Summary</h1>
            <div class="flex mt-2">
                <h1 class="pl-4">Starter Package - Online Payment... </h1>     
                <h1 class="ml-auto">CHF 29.00</h1>     
            </div>
            <div class="flex mt-2">
                <h1 class="pl-4">Other fee</h1>     
                <h1 class="ml-auto">CHF 0.00</h1>     
            </div>
            <div class="flex mt-2">
                <h1 class="pl-4">Vat & Tax</h1>     
                <h1 class="ml-auto">CHF 0.00</h1>     
            </div>
            <hr class="mt-3 h-px my-1 bg-gray-700 border-0">
            <div class="flex">
                <h1 class="font-bold text-xl ml-4">Total</h1>
                <h1 class="ml-auto">CHF 29.00</h1>
            </div>
        </div>
    </div>
    
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script>
    function myFunction() {
  var x = document.getElementById("hideShow");
  var y= document.getElementById("ahideShow");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display="none"
  } else {
    x.style.display = "none";
    y.style.display="block"
  }
}
function anotherFunction() {
  var x = document.getElementById("paypal");

  if (x.style.display === "none") {
    x.style.display = "block";

  } else {
    x.style.display = "none";

  }
}

</script>
<!-- flowbite cdn end -->
@endpush
