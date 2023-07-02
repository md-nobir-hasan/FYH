@if ($n = check('Customer'))
    @php
        if (!$n->show) {
            return back();
        }
    @endphp

    <x-app-layout>
        <x-slot name='title'>
            Subscription
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Subcription By Stripe</h4>
                        @if ($n->add)
                            <div class="flex items-center justify-end">
                                <a href="{{ route('admin.customer.export') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Excel</button>
                                </a>
                                <a href="{{ route('admin.customer.export.pdf') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">PDF</button>
                                </a>
                                {{-- <a href="{{ route('admin.user.feature.create') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Add
                                        new Customer</button>
                                </a> --}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="p-6">
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                        <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                                    <th scope="col" class="px-6 py-3">
                                       User Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Plan Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Subcription Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Triel Start
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Triel end
                                    </th>
                                    @if ($n->edit || $n->delete)
                                        <th scope="col" class="px-6 py-3 text-bold text-md">
                                          Auto Renew
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if($subscriptions->count() > 0)
                                @foreach ($subscriptions as $value)

                                @php
                                   $plan = App\Models\ClientType::where('plan_id', $value->stripe_price)->first();
                                @endphp
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$value->user->fname}}
                                    </td>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if($plan !==null)     {{$plan->name}} @endif
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$value->name}}
                                        </td>
                                        <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$value->quantity}}
                                    </td>

                                    <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              @if($value->created_at !==null)  {{$value->created_at->format('d-m-Y')}}@endif
                                </td>

                                <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if($value->ends_at !==null)   {{$value->ends_at->format('d-m-Y')}} @endif
                            </td>

                                        @if ($n->edit || $n->delete)
                                            <td class="px-6 py-4 text-center flex">
                                                @if ($n->edit)
                                                    @if($value->ends_at==null)
                                                    <a href="{{route('admin.subscriptions.cancel',[$value->user_id,$value->name ])}}" class="bg-red-600 text-white px-3 py-1 rounded-lg">Cancel</a>
                                                    @else
                                                    <a href="{{route('admin.subscriptions.resume',[$value->user_id,$value->name ])}}" class="bg-blue-600 text-white px-3 py-1 rounded-lg">Resume</a>
                                                    @endif
                                                @endif

                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $subscriptions->links() }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Users those are payment by paypal  --}}
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Subcription by Paypal payment</h4>
                        @if ($n->add)
                            <div class="flex items-center justify-end">
                                <a href="{{ route('admin.customer.export') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Excel</button>
                                </a>
                                <a href="{{ route('admin.customer.export.pdf') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">PDF</button>
                                </a>

                            </div>
                        @endif
                    </div>
                </div>
                <div class="p-6">
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                        <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr
                                    class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                                    <th scope="col" class="px-6 py-3">
                                        User Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Plan Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Interval
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Triel Start
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Triel end
                                    </th>
                                    {{-- @if ($n->edit || $n->delete)
                                <th scope="col" class="px-6 py-3 text-bold text-md">
                                    Auto Renew
                                </th>
                            @endif --}}
                                </tr>
                            </thead>
                            <tbody>

                                @if ($paypal_subscriptions->count() > 0)
                                    @foreach ($paypal_subscriptions as $value)
                                        @php
                                            $plan = App\Models\ClientType::where('price', (int) $value->amount)->first();
                                        @endphp
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $value->user->fname }}
                                            </td>

                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($plan !== null)
                                                    {{ $plan->name }}
                                                @endif
                                            </td>
                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $plan ? $plan->interval_count : '' }}
                                            </td>


                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($value->created_at !== null)
                                                    {{ $value->created_at->format('d-m-Y') }}
                                                @endif
                                            </td>
                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ date('d-m-Y', strtotime($value->end_time)) }}
                                            </td>
                                            {{-- @if ($n->edit || $n->delete)
                                        <td class="px-6 py-4 text-center flex">
                                            @if ($n->edit)
                                                @if ($value->ends_at == null)
                                                    <a href="{{ route('admin.subscriptions.update', [$value->user_id, $value->fname]) }}"
                                                        class="bg-red-600 text-white px-3 py-1 rounded-lg">Upgrade Plan</a>
                                            @endif

                                        </td>
                                    @endif --}}
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $paypal_subscriptions->links() }}
                    </div>
                </div>
            </div>
        </div>

        {{-- User by free trail  --}}
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Free Trail Users</h4>
                        @if ($n->add)
                            <div class="flex items-center justify-end">
                                <a href="{{ route('admin.customer.export') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Excel</button>
                                </a>
                                <a href="{{ route('admin.customer.export.pdf') }}">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">PDF</button>
                                </a>

                            </div>
                        @endif
                    </div>
                </div>
                <div class="p-6">
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                        <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr
                                    class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                                    <th scope="col" class="px-6 py-3">
                                        User Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Subscription At
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($free_users->count() > 0)
                                    @foreach ($free_users as $value)

                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $value->fname }}
                                            </td>
                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $value->email }}
                                            </td>

                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ date('d-m-Y',strtotime( $value->created_at)) }}
                                            </td>

                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $free_users->links() }}
                    </div>
                </div>
            </div>
        </div>
            <x-slot:js>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
                    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

                {{-- @vite(['public/js/sweet-alert.js']) --}}
                <script src="{{ asset('js/sweet-alert.js') }}"></script>
                <script type="module">
            $('.delete').on('click',function(e){
                e.preventDefault();
                let url = $(this).prop('href');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {

                    if (result.isConfirmed) {
                        window.location = url;
                    }
                })
            })
            //Toastr message
            @if ($msg = Session::get('success'))
                toastr.success("{{$msg}}");
            @endif
        </script>
            </x-slot:js>
    </x-app-layout>
@endif
