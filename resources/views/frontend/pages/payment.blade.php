@extends('frontend.layout.app')
@push('title')
    Payment
@endpush
@section('content')

<div class="bg-[#F5F5F5] grid lg:grid-cols-3 grid-cols-1 mt-10 lg:mx-36" style="font-family: 'Montserrat'">
    <div class="col-span-2 p-10">
        <div class="border-2 border-gray-500 rounded-xl p-5">
            <h1 class="font-bold text-xl ml-4">Your Account</h1>
            <p class="ml-4"> {{auth()->user()->name}} </p>
            <p class="ml-4">{{auth()->user()->email}}</p>
        </div>
        <div class="border-2 border-gray-500 mt-5 rounded-xl p-5">
        <div class="flex">
            <h1 class="font-bold text-xl ml-4">Billing Details</h1>

        </div>
            <p class="ml-4"> {{$billing->f_name}} {{$billing->l_name}}</p>
            <p class="ml-4"> {{$billing->email}} </p>
            <p class="ml-4"> {{$billing->phone}} </p>
            <p class="ml-4">{{$billing->country}}</p>
            <p class="ml-4"> {{$billing->city}} </p>
            <p class="ml-4"> {{$billing->zip}} </p>

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

                <div class="card  mt-3 p-4 rounded-xl" style="width:500px !important; margin:auto !important;">
                    <form action="{{route('checkout.payment')}}" method="post" id="payment-form" class="p-4">
                        @csrf
                        <div class="form-group">
                            <div class="card-header p-2">
                                <label for="card-element">


                                </label>
                            </div>



                            <div class="card-body">
                                 <input type="hidden" name="plan_id" value="{{$planId->plan_id}}">
                                <input type="hidden" name="biling_id" value="{{$billing->id}}">
                                <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>

                            </div>
                        </div>
                        <div class="card-footer text-center ">
                          <button
                          id="card-button"
                          class="text-center w-full h-[48px] bg-green-500 mt-2 rounded-[10px] text-white text-[16px] font-bold"
                          type="submit"
                          data-secret="{{ $intent->client_secret }}"
                        > PAY & GO </button>
                        </div>
                    </form>

                </div>



                </div>
        <div id="ahideShow" >
            <div  class="flex items-center">
                <input onclick=anotherFunction()  id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-green-600 bg-gray-300 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="default-radio-2" class="ml-2 text-base font-medium text-black dark:text-gray-300">Paypal</label>
            </div>
            <img src="{{asset('/images/paypal.png')}}" alt="" class="h-5 ml-auto">
            <hr class="h-px my-8 bg-gray-400 border-0 mt-0">
            <div id="paypal" class="hidden">
              <form action="{{route('paypal.checkout')}}" method="POST">
                @csrf
                <div class="flex mt-[-20px]">
                    <h1>Your Order</h1>
                    <p class="ml-auto text-sm uppercase">{{$planId->currency}} {{$planId->price}}.00</p>
                </div>
                <div class="flex">
                    <h1>Others Fee</h1>
                    <p class="ml-auto text-sm">CHF 0.00</p>
                </div>
                <hr class="h-px my-8 bg-black border-0 mt-0">
                <div class="flex">
                    <h1 class="font-bold mt-[-25px]">Total:</h1>
                    <p class="ml-auto font-bold text-sm mt-[-25px] uppercase">{{$planId->currency}} {{$planId->price}}.00</p>
                </div>

                <input type="hidden" name="total" value="{{$planId->price}}">
                <input type="hidden" name="plan_id" value="{{$planId->id}}">
                <hr class="h-px my-8 bg-black border-0 mt-0 mb-0">
                <button
                    class="text-center w-full h-[48px] bg-green-500 mt-6 rounded-[10px] text-white text-[16px] font-bold">PAY & GO</button>
            </div>
              </form>
        </div>

        </div>
        </div>
        <!-- payment end -->
    </div>
    <div class="col-span-1 mt-10 mr-6 lg:ml-[-20px]">
        <div class="border-2 border-gray-500 rounded-xl p-3">
            <h1 class="font-bold text-xl ml-4">Order Summary</h1>
            <div class="flex mt-2">
                <h1 class="pl-4"> {{$planId->name}}  - Online Payment... </h1>
                <h1 class="ml-auto uppercase">{{$planId->currency}} {{$planId->price}}.00</h1>
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
                <h1 class="ml-auto uppercase">{{$planId->currency}} {{$planId->price}}.00</h1>
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
    return x.style.display = "block";

  } else {
     return x.style.display = "none";

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

    const stripe = Stripe('{{ env("STRIPE_KEY") }}', { locale: 'en' }); // Create a Stripe client.
    const elements = stripe.elements(); // Create an instance of Elements.
    const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
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


<!-- flowbite cdn end -->
@endpush
