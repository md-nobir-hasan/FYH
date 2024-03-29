<x-guest-layout>
    <div class=" xl:w-[1320px] xl:h-[917px] rounded-lg mx-auto shadow-2xl bg-white mt-[107px]">
        <div class="pt-[23px]">
            <img src="/images/fyhlogo.png" class="h-[37px] w-[111px] xl:ml-[63px] xl:mx-0 md:mx-20 mx-5" />
        </div>
        <a href="/membership">
            <button
                class=" mb-[24px]  py-2 text-[16px] font-bold text-[#848484] shadow-xl px-6 mt-[27px] border xl:ml-[88px] xl:mx-0 md:mx-20 mx-5">Back</button>
        </a>
        <div class=" grid xl:grid-cols-3 grid-cols-1 xl:mx-0 md:mx-20 mx-5" style="font-family: 'Poppins'">

            <div class="col-span-2 xl:w-[702px] xl:ml-[88px]">
                <div class=" h-[93px] rounded-xl pl-5 pt-[10px]" style="border:1px solid rgba(102, 101, 101, 0.50)">
                    <h1 class="font-bold text-xl">Your Account</h1>
                    <p class="text-sm font-normal"> {{ auth()->user()->name }} </p>
                    <p class="text-sm font-normal">{{ auth()->user()->email }}</p>
                </div>
                <div class=" mt-6 rounded-xl" style="border:1px solid rgba(102, 101, 101, 0.50)">
                    <div class="flex">
                        <h1 class="font-bold text-xl mt-[10px] ml-[20px]">Billing Details</h1>

                    </div>
                    <p class="ml-[20px] text-sm font-normal"> {{ $billing->f_name }} {{ $billing->l_name }}</p>
                    <p class="ml-[20px] text-sm font-normal"> {{ $billing->email }} </p>
                    <p class="ml-[20px] text-sm font-normal"> {{ $billing->phone }} </p>
                    <p class="ml-[20px] text-sm font-normal">{{ $billing->country->country }}</p>
                    <p class="ml-[20px] text-sm font-normal"> {{ $billing->city }} </p>
                    <p class="ml-[20px] text-sm font-normal pb-[10px]"> {{ $billing->zip }} </p>

                </div>
                <!-- payment -->

                <div>
                    <div class=" mt-6 rounded-xl" style="border:1px solid rgba(102, 101, 101, 0.50)">
                        <h1 class="font-bold text-xl ml-[47px] mt-[10px]">Select Payment Method</h1>
                        <div class="flex items-center mb-4 ml-[46px] mt-[20px]">
                            <div class="flex">
                                <div>
                                    <input onclick=myFunction() id="default-radio-1" type="radio" value=""
                                        name="default-radio"
                                        class="w-4 h-4 text-green-600 bg-gray-300 border-gray-300 focus:ring-blue-500 ">
                                    <label for="default-radio-1"
                                        class="ml-2 text-base font-medium text-black ">Credit / Debit
                                        Card</label>
                                </div>
                                <div class="flex md:ml-[300px] lg:ml-[520px] xl:ml-[345px]">
                                    <img src="{{ asset('/images/visa.png') }}" alt="" class="h-6">
                                    <img src="{{ asset('/images/american.png') }}" alt="" class="h-6">
                                    <img src="{{ asset('/images/debit.png') }}" alt="" class="h-6">
                                </div>
                            </div>
                        </div>
                        <hr class="h-px my-8 mx-[46px] bg-gray-400 border-0 mt-[-10px]">
                        <div id="hideShow" class="hidden">

                            <div class="card  mt-3 p-4 rounded-xl xl:w-[500px]"
                                style=" margin:auto !important;">
                                <form action="{{ route('checkout.payment') }}" method="post" id="payment-form"
                                    class="p-4">
                                    @csrf
                                    <div class="form-group">
                                        <div class="card-header p-2">
                                            <label for="card-element">


                                            </label>
                                        </div>



                                        <div class="card-body">
                                            <input type="hidden" name="plan_id" value="{{ $planId->plan_id }}">
                                            <input type="hidden" name="biling_id" value="{{ $billing->id }}">
                                            <div id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <!-- Used to display form errors. -->
                                            <div id="card-errors" role="alert"></div>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center ">
                                        <button id="card-button"
                                            class="text-center w-full h-[48px] hover:bg-[#F6CDD5] hover:text-[#D1052C] bg-[#D1052C] mt-2 rounded-[10px] text-white text-[16px] font-bold"
                                            type="submit" data-secret="{{ $intent->client_secret }}"> PAY & GO
                                        </button>
                                    </div>
                                </form>

                            </div>



                        </div>
                        <div id="ahideShow">
                            <div class="flex justify-between mx-[46px]">
                                <div class="flex items-center">
                                    <input onclick=anotherFunction() id="default-radio-2" type="radio" value=""
                                        name="default-radio"
                                        class="w-4 h-4 text-green-600 bg-gray-300 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                    <label for="default-radio-2"
                                        class="ml-2 text-base font-medium text-black ">Paypal</label>
                                </div>
                                <img src="{{ asset('/images/paypal.png') }}" alt="" class="h-5 ">
                            </div>
                            <hr class="h-px my-8 mx-[46px] bg-gray-400 border-0 mt-0">
                            <div id="paypal" class="hidden">
                                <form action="{{ route('paypal.checkout') }}" method="POST" class="mx-[43px]">
                                    @csrf
                                    <div class="flex mt-[-10px]">
                                        <h1 class="font-[500] text-sm">Your Order</h1>
                                        <p class="ml-auto text-sm uppercase">{{ $planId->currency }}
                                            {{ number_format($planId->price,2) }}</p>
                                    </div>
                                    <div class="flex mt-[10px]">
                                        <h1 class="font-[500] text-sm">Others Fee</h1>
                                        <p class="ml-auto text-sm">CHF 0.00</p>
                                    </div>
                                    <hr class="h-px my-8 bg-black border-0 mt-[10px]">
                                    <div class="flex">
                                        <h1 class="font-semibold text-[18px] mt-[-15px]">Total:</h1>
                                        <p class="ml-auto font-semibold text-[18px] mt-[-15px] uppercase">
                                            {{ $planId->currency }} {{ number_format($planId->price,2) }}</p>
                                    </div>

                                    <input type="hidden" name="total" value="{{ $planId->price }}">
                                    <input type="hidden" name="plan_id" value="{{ $planId->id }}">
                                    <hr class="h-px my-8 bg-black border-0 mt-[10px] mb-0">
                                    <button
                                        class="text-center w-full h-[48px] hover:bg-[#F6CDD5] hover:text-[#D1052C] bg-[#D1052C] mb-[10px] mt-[10px] rounded-[10px] text-white text-[16px] font-bold">PAY
                                        & GO</button>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- payment end -->
            </div>
            <div class="col-span-1 xl:w-[418px] xl:ml-[-60px] xl:mr-[88px] xl:mt-0 mt-6 mb-6">
                <div class="rounded-xl" style="border:1px solid rgba(102, 101, 101, 0.50);">
                    <h1 class="font-bold text-xl ml-[41px] mt-[10px]">Order Summary</h1>
                    <div class="flex">
                        <h1 class="pl-[41px]"> {{ $planId->name }} - Online Payment... </h1>
                        <h1 class="ml-auto uppercase pr-[39px]">{{ $planId->currency }} {{ number_format($planId->price,2) }}</h1>
                    </div>
                    <div class="flex mt-2">
                        <h1 class="pl-[41px]">Other fee</h1>
                        <h1 class="ml-auto pr-[39px]">CHF 0.00</h1>
                    </div>
                    <div class="flex mt-2">
                        <h1 class="pl-[41px]">Vat & Tax</h1>
                        <h1 class="ml-auto pr-[39px]">CHF 0.00</h1>
                    </div>
                    <hr class="mt-3 h-px mx-[23px] my-1 bg-gray-700 border-0">
                    <div class="flex">
                        <h1 class="font-semibold text-[18px] ml-[41px]">Total</h1>
                        <h1 class="ml-auto font-semibold text-[18px] uppercase pr-[39px] pb-[11px]">{{ $planId->currency }}
                            {{ number_format($planId->price,2) }}</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script>
        var bank = false;

        function myFunction() {
            var x = document.getElementById("hideShow");
            var y = document.getElementById("ahideShow");
            if (bank) {
                x.style.display = "none";
                y.style.display = "block";
                bank = false
            } else {
                x.style.display = "block";
                y.style.display = "none"
                bank = true;
            }
        }
        var paypal = false;

        function anotherFunction() {
            var x = document.getElementById("paypal");

            if (paypal) {
                x.style.display = "none";
                console.log("block")
                paypal = false;

            } else {
                x.style.display = "block";
                console.log("none")
                paypal = true;

            }
        }
    </script>

    {{-- stripe js --}}
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        const stripe = Stripe('{{ env('STRIPE_KEY') }}', {
            locale: 'en'
        }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', {
            style: style
        }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe
                .handleCardSetup(clientSecret, cardElement, {
                    payment_method_data: {
                        //billing_details: { name: cardHolderName.value }
                    }
                })
                .then(function(result) {
                    console.log(result);
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        console.log(result);
                        // Send the token to your server.
                        stripeTokenHandler(result.setupIntent.payment_method);
                    }
                });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(paymentMethod) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', paymentMethod);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>

    </x-guest-layout>