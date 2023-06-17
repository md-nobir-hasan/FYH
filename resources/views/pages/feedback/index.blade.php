@if ($n = check('Customer'))
    @php
        if (!$n->show) {
            return back();
        }
    @endphp

    <x-app-layout>
        <x-slot name='title'>
            Feedback
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Feedback</h4>
                   
                    </div>
                </div>
                <div class="p-6">
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                        <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                                    <th scope="col" class="px-6 py-3">
                                   User
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                            Reaction
                                                 </th>
                                    <th scope="col" class="px-6 py-3">
                                  feedback
                                    </th>
                                
                                    <th scope="col" class="px-6 py-3">
                                 Date
                                    </th>
                              
                                </tr>
                            </thead>
                            <tbody>
                                @if($feedbacks->count() > 0)
                                @foreach ($feedbacks as $value)

                                @php
                                   $user = App\Models\User::where('id', $value->user_id)->first() ?? null;
                                @endphp

                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row"
                                        class="capitalize px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$user->fname}} {{$user->lname}}
                                    </td>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         {{$value->reaction}} 
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$value->description}}
                                        </td>
                                    

                                    <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              @if($value->created_at !==null)  {{$value->created_at->format('d-m-Y')}}@endif
                                </td>


                                   {{-- <td></td> --}}
                                    
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $feedbacks->links() }}
                    </div>
                </div>
            </div>
        </div>
     
            <x-slot:js>
                
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
