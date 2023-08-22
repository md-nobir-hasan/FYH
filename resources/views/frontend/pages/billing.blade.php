<x-guest-layout>
@php
               $user = auth()->user();
               $countrys = App\Models\Country::all();
    @endphp

    <div class="xl:w-[1320px] xl:mx-auto md:mx-10 bg-white  rounded mt-20" style="font-family: 'Poppins';">
    <div class="pt-[23px]">
        <a href="{{route('home')}}">
            <img src="{{asset('/images/fyhlogo.png')}}" alt="" class="xl:ml-[63px] xl:mx-0 md:mx-20 mx-5 h-[37px] w-[111px]">
        </a>
    </div>
       <div class="xl:ml-[88px] xl:mx-0 md:mx-20 mx-5 mt-[27px]">
        <a href="/register">
        <button style="box-shadow: 1px 2px 2px 0px rgba(0, 0, 0, 0.20);" class="bg-white border py-2 hover:bg-[#FCEEF1] hover:text-[#D1052C] w-[95px] rounded"><i class="fa-solid fa-arrow-left text-[#848484]"></i><span class="ml-2 text-[16px] font-bold text-[#848484]">Back</span></button>
        </a>

       </div>
       <div class="grid xl:grid-cols-5 grid-cols-1 xl:mx-0 md:mx-20 mx-5 mt-[24px] xl:ml-[88px]">
            <div class=" col-span-3">
                    <div class=" rounded-lg xl:w-[702px]" style="border:1px solid rgba(102, 101, 101, 0.50);"
>
                            <div class="flex">
                                <h1 class="text-xl font-bold ml-[20px] mt-[10px]">Your Account</h1>
                                <button class="ml-auto mt-[10px] mr-[10px] border py-2 rounded px-4 text-[#848484] shadow-xl hover:shadow-2xl">Edit</button>
                            </div>
                                <p class="ml-5 text-[14px] font-normal" > {{$user->fname}}  {{$user->lname}} </p>
                                <p class="ml-5 text-[14px] font-normal mb-[10px]" > {{$user->email}} </p>
                    </div>
                    <!-- billing section -->
                        <div class="pt-[10px] pb-[20px] xl:w-[702px] mt-[24px] px-[49px] mb-10  rounded-lg" style="border:1px solid rgba(102, 101, 101, 0.50);">
                            <h1 class="text-[20px] font-[700]">Billing Details</h1>
                            <p class="text-[14px] font-normal">FYH collects and uses personal data in accordance with our Privacy Policy. By creating an account, you agree to our Terms and Conditions.</p>

                            <!-- input Name-->
                            <form action="{{route('web.billing.store',$planId->plan_id)}}" method="post">
                           @csrf
                                <div class="mt-5">
                                <label for="first_name" class="block mb-2 text-sm text-black font-semibold">First name</label>
                                <input type="text" value="{{$user->fname}}" required name="fname" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required>
                            </div>
                            <div class="mt-5">
                                <label for="last_name" class="block mb-2 text-sm text-black font-semibold">Last Name</label>
                                <input type="text" value="{{$user->lname}}" required  name="lname" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required>
                            </div>
                            <div class="mt-5">
                                <label for="email" class="block mb-2 text-sm text-black font-semibold">Email</label>
                                <input type="email" value="{{auth()->user()->email}}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                            </div>
                            <div class="mt-5">
                                <label for="Number" class="block mb-2 text-sm text-black font-semibold">Phone Number</label>
                                <input type="text" value="{{auth()->user()->phone}}" required id="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone" required>
                            </div>

                                    <label for="countries" class="block mb-2 text-sm text-gray-900 mt-5 font-semibold">Select an Country</label>
                                    <select id="countries" required name="country_id" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " style="border-top:0;border-right:0; border-left:0">

                                        @foreach ($countrys as $item)
                                            <option value="{{$item->id}}" class="capitalize"> {{$item->country}} </option>
                                        @endforeach
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
                                    <button class="w-full text-xl p-3 rounded-lg font-semibold flex justify-center items-center bg-[#D1052C] text-white mt-5">Save & Continue</button>
                            </form>
                        </div>

                    <!-- billing section end -->
            </div>
            <div class="col-span-2 xl:ml-[-10px] xl:w-[418px]">
        <div class="border-2  border-gray-300 rounded-xl p-3">
            <h1 class="font-bold text-[20px] ml-4">Order Summary</h1>
            <div class="flex mt-2">
                <h1 class="pl-4"> {{$planId->name}}  - Online Payment... </h1>
                <h1 class="ml-auto"> {{number_format($planId->price,2)}} </h1>
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
                <h1 class="ml-auto">{{number_format($planId->price,2)}}</h1>
            </div>
        </div>
    </div>
       </div>
    </div>
</x-guest-layout> 



