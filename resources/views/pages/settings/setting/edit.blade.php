<x-app-layout>
    <x-slot name='title'>
        Site Settings
    </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Site Settings</h1>
                    <form action="{{ route('admin.setting.setting.update', [$mdata->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h4 class="font-bold text-xl underline text-left">Information</h4>
                        <div class="mb-4">
                            <img id="logo_img"
                                src="{{$mdata->logo}}"
                                class="max-w-sm max-h-[200px] mx-auto rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"
                                alt="{{$mdata->title}}" />
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div >
                                <label for="title" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Site Title:
                                </label>
                                <input type="text" name="title" id="title" value="{{$mdata->title}}" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Site Title">
                                 @error('title')
                                    <span class="block text-[red] text-left">{{$message}}</span>
                                 @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Email:
                                </label>
                                <input type="email" name="email" id="email" value="{{$mdata->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Email">
                            </div>
                            <div>
                                <label for="phone" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Tell:
                                </label>
                                <input type="tel" name="phone" id="phone" value="{{$mdata->phone}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Tell">
                            </div>
                            <div class="text-left">
                                <label
                                for="logo"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Logo: </label
                              >
                              <input name="logo" value="{{$mdata->logo}}"
                                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="logo" />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Address: </label>
                                <textarea id="message" name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Write site address here...">{{$mdata->address}}</textarea>

                        </div>

                        {{-- Social links  --}}
                        <h4 class="font-bold text-xl underline text-left mt-10 mb-2">Social Links</h4>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div >
                                <label for="fb_page" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Facebook Page:
                                </label>
                                <input type="url" name="fb_page" id="fb_page" value="{{$mdata->fb_page}}" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Facebook Page Link">
                            </div>
                            <div>
                                <label for="youtube" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Youtube:
                                </label>
                                <input type="url" name="youtube" id="youtube" value="{{$mdata->youtube}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="youtube Link">
                            </div>
                            <div>
                                <label for="linkedin" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Linkedin:
                                </label>
                                <input type="url" name="linkedin" id="linkedin" value="{{$mdata->linkedin}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Linkedin Link">
                            </div>
                            <div>
                                <label for="twitter" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Twitter:
                                </label>
                                <input type="url" name="twitter" id="twitter" value="{{$mdata->twitter}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Twitter Link">
                            </div>
                        </div>

                        {{-- Features  --}}
                        <h4 class="font-bold text-xl underline text-left mt-10 mb-2">Features</h4>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="flex">
                                <label for="trail" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Trail:
                                </label>
                                <input type="checkbox" @checked($mdata->trail) name="trail" id="trail" class="bg-gray-50 border ml-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 title="Trail">
                            </div>
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
