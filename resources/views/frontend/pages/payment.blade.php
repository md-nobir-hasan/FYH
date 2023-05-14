@extends('frontend.layout.app')
@push('title')
    Payment
@endpush
@section('content')

<div class="bg-[#F5F5F5] grid lg:grid-cols-3 grid-cols-1 mt-10 mx-36" style="font-family: 'Montserrat'">
    <div class="col-span-2 p-10">
        <div class="border-2 border-black rounded-xl p-5">
            <h1 class="font-bold text-xl ml-4">Your Account</h1>
            <p class="ml-4">Thomas Tsangaras</p>
            <p class="ml-4">thomastsangaras@mail.com</p>
        </div>
        <div class="border-2 border-black mt-5 rounded-xl p-5">
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
    </div>
    <div class="col-span-1 mt-10 mr-2">
        <div class="border-2 border-black rounded-xl p-3">
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
<!-- flowbite cdn end -->
@endpush
