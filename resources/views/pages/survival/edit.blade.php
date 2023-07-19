<x-app-layout>
    <x-slot name='title'>
        Survival Guide
    </x-slot>

    <x-slot name='style'>
        <style>
            iframe{
                width: 100%;
        }
        </style>

    </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Survival Guide</h1>
                    <form
                        action="@if ($survival !== null) {{ route('admin.survival.update', $survival->id) }} @else {{ route('admin.survival.store') }} @endif"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($survival !== null)
                            @method('PUT')
                        @endif
                        <h4 class="font-bold text-xl underline text-left">Survival Guide</h4>
                        <div class="mb-4 flex justify-center">
                            @if ($survival !== null)
                                <img id="logo_img" src="{{ '/storage/' . $survival->banner_img }}"
                                    class="max-w-sm max-h-[200px] mx-auto rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"
                                    alt="" />
                            @endif

                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="text-left">
                                <label for="banner_title"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200">
                                    banner_title:
                                </label>
                                <input name="banner_title"
                                    @if ($survival !== null) value="{{ $survival->banner_title }}" @endif
                                    class="@error('banner_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="text" id="banner_title" />

                                @error('banner_title')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="banner_des"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">
                                    Bennar Description: </label>
                                <textarea name="banner_des" rows="4"
                                    class="@error('banner_des') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                    placeholder="Enter Opporttinity One">
                                     @if ($survival !== null)
                                        {{ $survival->banner_des }}
                                    @endif
                                    </textarea>
                                @error('banner_des')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="mb-3 text-left">
                            <label for="logo"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200">Banner Image:
                            </label>
                            <input name="banner_img" value=""
                                class="@error('banner_img') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file" id="logo" />
                            @error('banner_img')
                                <div class="text-left text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                </div>



                <div class="mt-10">
                    <button
                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Save</button>
                </div>
                </form>
            </div>
        </div>

        {{-- Video section  --}}

        <div class="mt-4">
            <h2 class="text-center text-xl font-bold">Videos</h2>
            {{-- @foreach ($videos as $ifram)
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden"
                    style="padding-top: 56.25%">

                    <iframe
                        class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
                        src="{{$ifram->embed_code}}"
                        allowfullscreen></iframe>
                </div>
            @endforeach --}}
            <div class="grid lg:grid-cols-3 gap-2">
                @foreach ($videos as $iframe)
                    <div class="">
                        <iframe src="{{$iframe->embed_code}}" frameborder="0"
                            ></iframe>
                    </div>
                @endforeach
            </div>
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
