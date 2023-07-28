<x-app-layout>
    <x-slot name='title'>
        About Page

    </x-slot>

    <div class="p-4">


        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">About Page</h1>
                    <form action="@if($about!==null) {{route('admin.about.update',$about->id)}} @else {{route('admin.about.store')}} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                      @if($about!==null)  @method('PUT') @endif
                        <h4 class="font-bold text-xl underline text-left">About Section</h4>





                        <div class="grid gap-6 mb-6 md:grid-cols-2">

                            <div class="text-left">
                                <label
                                for="title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Title: </label
                              >
                              <input name="title" @if($about!==null)value="{{$about->title}}" @endif
                                class="@error('title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title" />

                                @error('title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="mb-6">
                                <label for="title_des" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Title Description: </label>
                                    <textarea id="title_des" name="title_description" rows="2" class="@error('title_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Home Section deatils">
                                     @if($about!==null)  {{$about->title_description  }}  @endif
                                    </textarea>
                                    @error('title_description')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                            <div class="text-left">
                                <label
                                for="heading"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Heading: </label
                              >
                                <textarea id="heading"  name="heading" rows="2" class="@error('heading') is-invalid @enderror preserveLines block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                placeholder="Enter heading">
                                @if($about!==null)  {!!$about->heading !!}  @endif
                               </textarea>

                                @error('heading')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>



                            <div class="mb-6">
                                <label for="heading_des" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Heading Description: </label>
                                    <textarea id="heading_des" name="heading_description" rows="2" class="@error('title_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Heading Description">
                                     @if($about!==null)  {{$about->heading_description  }}  @endif
                                    </textarea>
                                    @error('heading_description')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="logo"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Multipul Images: </label
                              >
                              <input multiple name="images[]" value=""
                                class="@error('images') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="logo" />
                                @error('images')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-6">
                                <label for="img_des" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Images Description: </label>
                                    <textarea id="img_des"  name="images_description" rows="2" class="@error('images_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Images Description">
                                     @if($about!==null)  {{$about->images_description  }}  @endif
                                    </textarea>
                                    @error('images_description')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="text-left mt-5">
                               <div>
                                    <label
                                    for="logo"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                    >Fast Images: </label>
                                    <input  name="first_image" value=""
                                    class="@error('first_image') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="file"
                                    id="first_image" />
                                    @error('first_image')
                                        <div class="text-left text-red-600">{{ $message }}</div>
                                    @enderror
                               </div>
                               <div class="mt-5">
                                    <label
                                    for="fimg_title"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                    >Title (First Image Story): </label>
                                    <textarea id="fimg_title" name="fimg_title" rows="2"
                                    class="@error('fimg_title') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter first Image Story">
                                     @if($about!==null)  {{$about->fimg_title  }}  @endif
                                    </textarea>
                                    @error('fimg_title')
                                        <div class="text-left text-red-600">{{ $message }}</div>
                                    @enderror
                               </div>
                               <div class="mt-5">
                                    <label
                                    for="fimg_subtitle"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                    >Sub-Title (First Image Story): </label>
                                    <textarea id="fimg_subtitle" name="fimg_subtitle" rows="2"
                                    class="editor_simg_stitle @error('fimg_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter first Image Story">
                                     @if($about!==null)  {{$about->fimg_subtitle  }}  @endif
                                    </textarea>
                                    @error('fimg_subtitle')
                                        <div class="text-left text-red-600">{{ $message }}</div>
                                    @enderror
                               </div>
                            </div>

                            <div class="mb-6">
                                <label for="fimg_story" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">First Image Story: </label>
                                    <textarea id="fimg_story" name="fimg_story" rows="2" class="@error('first_image_story') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter first Image Story">
                                     @if($about!==null)  {{$about->fimg_story  }}  @endif
                                    </textarea>
                                    @error('fimg_story')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="text-left">
                            <div>
                                <label
                                for="logo"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Second Images: </label
                              >
                              <input name="second_image" value=""
                                class="@error('second_image') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="second_image" />
                                @error('second_image')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="mt-5">
                                    <label
                                    for="simg_title"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                    >Title (Second Image Story): </label>
                                    <textarea id="simg_title" name="simg_title" rows="2"
                                    class="editor @error('simg_title') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Second Image Story">
                                     @if($about!==null)  {{$about->simg_title  }}  @endif
                                    </textarea>
                                    @error('simg_title')
                                        <div class="text-left text-red-600">{{ $message }}</div>
                                    @enderror
                               </div>
                               <div class="mt-5">
                                <label
                                for="simg_subtitle"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Sub-Title (Second Image Story): </label>
                                <textarea id="simg_subtitle" name="simg_subtitle" rows="2"
                                class="editor_subtitle @error('simg_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                 placeholder="Enter Second Image Story">
                                 @if($about!==null)  {{$about->simg_subtitle  }}  @endif
                                </textarea>
                                @error('simg_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                           </div>
                            </div>

                            <div class="mb-6">
                                <label for="simg_story" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Second Image Story: </label>
                                    <textarea id="simg_story"  name="simg_story" rows="2" class="@error('title_description') is-invalid @enderror editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Second Image Story">
                                     @if($about!==null)  {{$about->simg_story  }}  @endif
                                    </textarea>
                                    @error('simg_story')
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
    ClassicEditor.create( document.querySelector( '#heading' ) ).catch( error => {
            console.error( error );
        } );
    ClassicEditor.create( document.querySelector( '#heading_des' ) ).catch( error => {
            console.error( error );
        } );

    ClassicEditor.create( document.querySelector( '#title_des' ) ).catch( error => {
            console.error( error );
        } );

    ClassicEditor.create( document.querySelector( '#img_des' ) ).catch( error => {
            console.error( error );
        } );
    </script>
<script>
    ClassicEditor.create( document.querySelector( '#fimg_title' ) ).catch( error => {
            console.error( error );
        } );

    ClassicEditor.create( document.querySelector( '#fimg_subtitle' ) ).catch( error => {
            console.error( error );
        } );

    ClassicEditor.create( document.querySelector( '#fimg_story' ) ).catch( error => {
            console.error( error );
        } );
    </script>

<script>
    ClassicEditor.create( document.querySelector( '#simg_title' ) ).catch( error => {
            console.error( error );
        } );
    ClassicEditor.create( document.querySelector( '#simg_subtitle' ) ).catch( error => {
            console.error( error );
        } );
    ClassicEditor.create( document.querySelector( '#simg_story' ) ).catch( error => {
            console.error( error );
        } );
</script>


            </s-slot>
</x-app-layout>
