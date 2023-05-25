@extends('frontend.layout.app')
@push('title')
  Checkout Membership
@endpush

<style>
    @media only screen and (max-width: 600px) {
        .card{
              width: 90% !important;
              margin: auto;
        }
    }

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    .card{
              width: 40% !important;
              margin: auto;
        }   
}
</style>

@section('content')

<div class=" m-auto" style="width:95%; margin:auto">
    <h1 class="text-center mt-10 text-lg font-bold ">Checkout Page</h1>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-10 content-center justify-center mx-auto">

     
 {{-- Stripe Checkout  --}}
  
 <div class="card bg-blue-600 shadow-lg m-3 p-4 rounded-xl">
    <form action="{{route('checkout.payment')}}" method="post" id="payment-form" class="p-4">
        @csrf                    
        <div class="form-group">
            <div class="card-header p-2">
                <label for="card-element">
                          <div class="my-6 p-1 rounded-lg" style="display: flex; justify-content: space-between; background: #e8f0f7">
                            <h3 class="font-bold m-2 p-1 rounded-lg" > {{ucfirst($plan->name)}}</h3>
                            <h3 class="font-bold m-2 p-1 rounded-lg" > {{ucfirst($plan->price) }} {{$plan->currency}}</h3>
                            <img src="{{asset('images/checkout.png')}}" alt="" style="width: 140px ; height:30px;">
                          </div>
                </label>
            </div>


       
            <div class="card-body">
                 <input type="hidden" name="plan_id" value="{{$plan->plan_id}}">
               
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
          class="btn btn-dark  px-3 py-1 rounded-lg" style="background: #ca194e !important; color:aliceblue; margin-top:10px;"
          type="submit"
          data-secret="{{ $intent->client_secret }}"
        > Subscribe </button>
        </div>
    </form>
</div>


    </div>
</div>

@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->


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
@endpush
