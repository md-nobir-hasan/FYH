@if ($n = check('Customer'))
@php
    if (!$n->show){
        return back();
    }
@endphp

    <x-app-layout>
        <x-slot name='title'>
            Bilings
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Bilings</h4>

                    </div>
                </div>
                <div class="p-6">
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                       <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                   First Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Last Name
                                         </th>
                                    <th scope="col" class="px-6 py-3">
                                    E-Mail
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                      Phone
                                        </th>
                                    <th scope="col" class="px-6 py-3">
                                       Country
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                           City
                                             </th> <th scope="col" class="px-6 py-3">
                                               zip Code
                                                 </th> <th scope="col" class="px-6 py-3">
                                                   Membership
                                                     </th>

                                    @if ($n->edit || $n->delete)
                                        <th scope="col" class="px-6 py-3 text-bold text-md">
                                            Action
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($billings as $value)
                               @php   $plan= App\Models\ClientType::where( 'plan_id', $value->plan_id)->first(); @endphp
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$value->f_name}}
                                        </td>
                                        <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$value->l_name}}
                                    </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$value->email}}
                                        </td>

                                        <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$value->phone}}
                                    </td>  <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$value->country->country}}
                                </td>
                                 <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value->city}}
                            </td>
                            <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$value->zip}}
                        </td>
                             <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       @if($plan!==null) {{$plan->name}}@endif
                        </td>
                                        @if ($n->edit || $n->delete)
                                            <td class="px-6 py-4 text-center flex">

                                                @if ($n->delete)
                                                   {{-- <div class="delete"> --}}
                                                    <a href="{{route('admin.page.billings.destroy',$value->id)}}"
                                                        class="ml-2 delete font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[red]">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </a>
                                                   {{-- </div> --}}
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="mt-2">
                        {{ $billings->links() }}
                    </div>
                </div>
                <x-slot:js>
                    {{-- @vite(['public/js/sweet-alert.js']) --}}
                    <script src="{{asset('js/sweet-alert.js')}}"></script>
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
