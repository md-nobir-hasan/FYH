<x-app-layout>
    <x-slot name='title'>
        Integration

    </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Integration Add</h1>
                    <form action="{{route('admin.page.integrations.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h4 class="font-bold text-xl underline text-left">Integration</h4>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="text-left">
                                <label
                                for="title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Title: </label
                              >
                              <input name="title"
                                class="@error('title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title" />

                                @error('title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="priority"
                                class=" mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Priority: </label
                              >
                              <input name="priority"
                                class="@error('priority') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="number"
                                id="priority" />
                                @error('priority')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>






                        </div>

                        <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Deatils: </label>
                                <textarea id="editor" name="description" rows="4" class="@error('description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Enter Home Section deatils">

                                </textarea>
                                @error('description')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                        </div>

                        <div class="mb-6">
                            <label
                            for="image"
                            class="mb-2 text-left block text-neutral-700 dark:text-neutral-200"
                            >Image: </label
                          >
                          <input name="image" value=""
                            class="@error('image') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                            type="file"
                            id="image" />
                            @error('image')
                            <div class="text-left text-red-600">{{ $message }}</div>
                           @enderror
                        </div>



                        <div class="mt-10">
                            <button class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <s-slot name='js'>
                <script type="module">



                    //Toastr message
                    @if ($msg = Session::get('success'))
                            toastr.success("{{$msg}}");
                    @endif

                    $(document).ready(function(){
                        $('#logo').change(function(e){
                            let file = e.target.files[0];
                            console.log(file);
                            let filereader = new FileReader();
                            filereader.onload = function(e){
                                $('#logo_img').attr('src',e.target.result);
                            }
                            filereader.readAsDataURL(file);
                        })
                    })
                </script>



            </s-slot>
</x-app-layout>
