<x-app-layout>
    <x-slot name='title'>
        Opportunity Section

    </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Opportunity Section</h1>
                    <form action="@if($opportunity!==null) {{route('admin.page.opportunitys.update',$opportunity->id)}} @else {{route('admin.page.opportunitys.store')}} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                      @if($opportunity!==null)  @method('PUT') @endif
                        <h4 class="font-bold text-xl underline text-left">Opportunity Section</h4>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">

                            <div class="text-left">
                                <label
                                for="title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Title: </label
                              >
                              <input name="title"  @if($opportunity!==null) value="{{$opportunity->title}}" @endif
                                class="@error('title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title" />

                                @error('title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Heading: </label
                              >
                              <input name="heading"  @if($opportunity!==null) value="{{$opportunity->heading}}" @endif
                                class="@error('heading') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="heading" />

                                @error('heading')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class=" mb-6">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left"> Subtitle: </label>
                                    <textarea  name="subtitle" rows="1" class="@error('subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Oppornity subtitle">
                                     @if($opportunity!==null)  {!!$opportunity->subtitle  !!}  @endif
                                    </textarea>
                                    @error('subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opOne" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity One: </label>
                                    <textarea  name="opOne" rows="4" class="@error('opOne') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity One">
                                     @if($opportunity!==null)  {{$opportunity->opOne  }}  @endif
                                    </textarea>
                                    @error('opOne')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>
                            <div class="mb-6 ">
                                <label for="opTwo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Two: </label>
                                    <textarea  name="opTwo" rows="4" class="@error('opOne') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity One">
                                     @if($opportunity!==null)  {{$opportunity->opTwo}}  @endif
                                    </textarea>
                                    @error('opTwo')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>
                            <div class="mb-6 ">
                                <label for="opThree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Three: </label>
                                    <textarea  name="opThree" rows="4" class="@error('opThree') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity Three">
                                     @if($opportunity!==null)  {{$opportunity->opTwo}}  @endif
                                    </textarea>
                                    @error('opThree')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>
                            <div class="mb-6 ">
                                <label for="opFour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Four: </label>
                                    <textarea  name="opFour" rows="4" class="@error('opOne') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity Four">
                                     @if($opportunity!==null)  {{$opportunity->opFour}}  @endif
                                    </textarea>
                                    @error('opFour')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opFive" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Five: </label>
                                    <textarea  name="opFive" rows="4" class="@error('opFive') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity Five">
                                     @if($opportunity!==null)  {{$opportunity->opFive}}  @endif
                                    </textarea>
                                    @error('opFive')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>
                            <div class="mb-6 ">
                                <label for="opSix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Six: </label>
                                    <textarea  name="opSix" rows="4" class="@error('opOne') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity Six">
                                     @if($opportunity!==null)  {{$opportunity->opSix}}  @endif
                                    </textarea>
                                    @error('opSix')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opSeven" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Seven: </label>
                                    <textarea  name="opSeven" rows="4" class="@error('opSeven') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity Seven">
                                     @if($opportunity!==null)  {{$opportunity->opSeven}}  @endif
                                    </textarea>
                                    @error('opSeven')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opEight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Eight: </label>
                                    <textarea  name="opEight" rows="4" class="@error('opOne') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity Eight">
                                     @if($opportunity!==null)  {{$opportunity->opEight}}  @endif
                                    </textarea>
                                    @error('opEight')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="opNine" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Opporttinity Nine: </label>
                                    <textarea  name="opNine" rows="4" class="@error('opOne') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Opporttinity One">
                                     @if($opportunity!==null)  {{$opportunity->opNine}}  @endif
                                    </textarea>
                                    @error('opNine')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                        </div>



                        <div class="grid gap-6 mb-6 md:grid-cols-2">

                            <div class="text-left">
                                <label
                                for="icon"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Icon: </label
                              >
                              <input name="icon"  @if($opportunity!==null) value="{{$opportunity->icon}}" @endif
                                class="@error('icon') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="icon" />

                                @error('icon')
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
