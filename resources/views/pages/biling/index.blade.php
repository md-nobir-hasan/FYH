@if ($n = check('Customer'))
@php
    if (!$n->show){
        return back();
    }
@endphp

    <x-app-layout>
        <x-slot name='title'>
            Customers
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Customers</h4>
                        @if ($n->add)
                        <div class="flex items-center justify-end">
                            <a href="{{route('admin.customer.export')}}">
                                <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                >Excel</button>
                            </a>
                            <a href="{{route('admin.customer.export.pdf')}}">
                                <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                >PDF</button>
                            </a>
                            <a href="{{ route('admin.user.feature.create') }}">
                                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Add new Customer</button>
                                
                            </a>
                        </div>

                        @endif
                    </div>
                </div>
                <div class="p-6">
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                       <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                    Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    E-Mail
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    Photo
                                    </th>
                                    @if ($n->edit || $n->delete)
                                        <th scope="col" class="px-6 py-3 text-bold text-md">
                                            Action
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mdata as $value)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$value->name}}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$value->email}}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="h-6 w-6 rounded-md border shadow-lg" src="{{$value->img}}" alt="{{$value->name}}">
                                        </td>
                                        @if ($n->edit || $n->delete)
                                            <td class="px-6 py-4 text-center flex">
                                                @if ($n->edit)
                                                    <a href="{{route('admin.user.feature.edit',[$value->id])}}"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                @endif
                                                @if ($n->delete)
                                                   {{-- <div class="delete"> --}}
                                                    <a href="{{route('admin.delete',[$value->id,'User'])}}"
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
                        {{ $mdata->links() }}
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
