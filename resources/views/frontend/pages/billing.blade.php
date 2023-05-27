@extends('frontend.layout.app')
@push('title')
    Billing
@endpush
@section('content')

    <div class="bg-[#F5F5F5] lg:mx-40 p-10 rounded mt-20" style="font-family: 'Poppins';">
    <!-- <img src="{{asset('/images/fyhlogo.png')}}" alt="" class="lg:ml-20 h-8 w-24"> -->
       <div class="">
        <button class="bg-white p-2 rounded"><i class="fa-solid fa-arrow-left"></i><span class="ml-2">back</span></button>
       </div>
       <div class="grid lg:grid-cols-3 grid-cols-1 ">
            <div class=" col-span-2 lg:mr-10">
                    <div class="mt-5 pl-10 rounded-lg border-gray-300 border-2 p-6">
                            <div class="flex">
                                <h1 class="text-xl font-bold">Your Account</h1>
                                <button class="ml-auto rounded p-2 text-gray-600 bg-white">Edit</button>
                            </div>
                                <p> {{auth()->user()->name}} </p>
                                <p> {{auth()->user()->email}} </p>
                    </div>
                    <!-- billing section -->
                        <div class="mt-5 pl-10 rounded-lg border-gray-300 border-2 p-5">
                            <h1 class="text-xl font-bold">Billing Details</h1>
                            <p class="text-base">FYH collects and uses personal data in accordance with our Privacy Policy. By creating an account, you agree to our Terms and Conditions.</p>

                            <!-- input Name-->
                            <form action="{{route('billing.store',$plan->plan_id)}}" method="post">
                           @csrf
                                <div class="mt-5">
                                <label for="first_name" class="block mb-2 text-sm text-black font-semibold">First name</label>
                                <input type="text" required name="f_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required>
                            </div>
                            <div class="mt-5">
                                <label for="last_name" class="block mb-2 text-sm text-black font-semibold">Last Name</label>
                                <input type="text" required name="l_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required>
                            </div>
                            <div class="mt-5">
                                <label for="email" class="block mb-2 text-sm text-black font-semibold">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                            </div>
                            <div class="mt-5">
                                <label for="Number" class="block mb-2 text-sm text-black font-semibold">Phone Number</label>
                                <input type="text" required id="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone" required>
                            </div>
                            
                                    <label for="countries" class="block mb-2 text-sm text-gray-900 mt-5 font-semibold">Select an option</label>
                                    <select id="countries" required name="country" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " style="border-top:0;border-right:0; border-left:0">
                                    <option selected>Choose a country</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                    </select>
                                    <div class="flex justify-between">
                                    <div class="mt-5">
                                        <label for="city" class="block mb-2 text-sm text-black font-semibold">City</label>
                                        <input type="text" required name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="City" required>
                                    </div>
                                            <div class="mt-5">
                                        <label for="zip" class="block mb-2 text-sm text-black font-semibold">Zip code</label>
                                        <input type="number" required name="zip" id="zip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="zip" required>
                                    </div>
                                    </div>
                                    <button class="w-full text-xl p-3 rounded-lg font-semibold flex justify-center items-center bg-[#D1052C] text-white mt-5"><a href="/payment">Save & Continue</a></button>
                            </form>
                        </div>

                    <!-- billing section end -->
            </div>
            <div class="col-span-1 mt-6 lg:mr-[-15px] lg:ml-[-20px]">
        <div class="border-2  border-gray-300 rounded-xl p-3">
            <h1 class="font-bold text-xl ml-4">Order Summary</h1>
            <div class="flex mt-2">
                <h1 class="pl-4"> {{$plan->name}}  - Online Payment... </h1>     
                <h1 class="ml-auto"> {{$plan->price}}.00 </h1>     
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
                <h1 class="ml-auto">{{$plan->price}}.00</h1>
            </div>
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
