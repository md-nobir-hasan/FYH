<x-app-layout>
    <x-slot name='title'>
        Congratulation Section

    </x-slot>


    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Congratulation</h1>
                    <form action="@if($congrat!==null) {{route('admin.page.congrats.update',$congrat->id)}} @else {{route('admin.page.congrats.store')}} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                      @if($congrat!==null)  @method('PUT') @endif
                        <h4 class="font-bold text-xl underline text-left">Congrat Section</h4>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">

                            <div class="text-left">
                                <label
                                for="heading"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Heading: </label
                              >
                              <input name="heading"  @if($congrat!==null) value="{{$congrat->heading}}" @endif
                                class="@error('heading') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="heading" />

                                @error('heading')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Title: </label
                              >
                              <input name="title"  @if($congrat!==null) value="{{$congrat->title}}" @endif
                                class="@error('title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title" />

                                @error('title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class=" mb-6">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left"> Subtitle: </label>
                                    <textarea  name="subtitle" rows="1" class="@error('subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter  subtitle">
                                     @if($congrat!==null)  {!!$congrat->subtitle  !!}  @endif
                                    </textarea>
                                    @error('subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                            <div class="mb-6 ">
                                <label for="opOne"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left"> Oppronity One: </label>
                                    <textarea id="opOne"  name="opOne" rows="3" class="@error('opOne ') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Oppronity one">
                                     @if($congrat!==null)  {{$congrat->opOne   }}  @endif
                                    </textarea>
                                    @error('opOne')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                            <div class="mb-6 ">
                                <label for="opTwo"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left"> Oppronity Two: </label>
                                    <textarea id="opTwo"  name="opTwo" rows="3" class="@error('opTwo ') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Oppronity Two">
                                     @if($congrat!==null)  {{$congrat->opTwo   }}  @endif
                                    </textarea>
                                    @error('opTwo')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opThree"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left"> Oppronity Three: </label>
                                    <textarea id="opThree"  name="opThree" rows="3" class="@error('opThree ') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Oppronity Three">
                                     @if($congrat!==null)  {{$congrat->opThree   }}  @endif
                                    </textarea>
                                    @error('opThree')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opFour"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left"> Oppronity One: </label>
                                    <textarea id="opFour"  name="opFour" rows="3" class="@error('opFour ') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Oppronity Four">
                                     @if($congrat!==null)  {{$congrat->opFour   }}  @endif
                                    </textarea>
                                    @error('opFour')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="icon"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Icon : </label
                              >
                              <input name="icon"  @if($congrat!==null) value="{{$congrat->icon }}" @endif
                                class="@error('icon ') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="option_title " />

                                @error('option_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>



                            <div class="text-left">
                                <label
                                for="title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Option Title : </label
                              >
                              <input name="option_title"  @if($congrat!==null) value="{{$congrat->option_title }}" @endif
                                class="@error('option_title ') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="option_title " />

                                @error('option_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="button_one"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                > Button One : </label
                              >
                              <input name="button_one"  @if($congrat!==null) value="{{$congrat->button_one }}" @endif
                                class="@error('button_one') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="button_one" />

                                @error('button_one')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="button_two"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Button Two : </label
                              >
                              <input name="button_two"  @if($congrat!==null) value="{{$congrat->button_two }}" @endif
                                class="@error('button_two ') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="button_two " />

                                @error('button_two')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="logo"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Image: </label
                              >
                              <input name="image" value=""
                                class="@error('image') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="logo" />
                                @error('image')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
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

<script src="{{asset('js/ckeditor5/ckeditor.js')}}"></script>
<script>
    ClassicEditor.create( document.querySelector( '#editor' ) ).catch( error => {
            console.error( error );
        } );
</script>


            </s-slot>
</x-app-layout>
