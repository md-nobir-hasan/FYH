<x-app-layout>
    <x-slot name='title'>
        About Page

    </x-slot>

    <div class="p-4">


        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Term and Cocki Page</h1>
                    <form action="@if($term!==null) {{route('admin.page.terms.update',$term->id)}} @else {{route('admin.page.terms.store')}} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                      @if($term!==null)  @method('PUT') @endif
                        <h4 class="font-bold text-xl underline text-left">About Section</h4>





                        <div class="grid gap-6 mb-6 md:grid-cols-1">



                            <div class="mb-6">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Term: </label>
                                    <textarea id="editor" name="term" rows="2" class="@error('term') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Home Section deatils">
                                     @if($term!==null)  {!!$term->term  !!}  @endif
                                    </textarea>
                                    @error('term')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>




                            <div class="mb-6  ">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Cookies page: </label>
                                    <textarea   name="cookie" rows="2" class="@error('cookie') is-invalid @enderror editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter first Image Story">
                                     @if($term!==null)  {!!$term->cookie  !!}  @endif
                                    </textarea>
                                    @error('cookie')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="mb-6  ">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Cookies page: </label>
                                    <textarea   name="privacy" rows="2" class="@error('privacy') is-invalid @enderror editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter first Image Story">
                                     @if($term!==null)  {!!$term->privacy  !!}  @endif
                                    </textarea>
                                    @error('privacy')
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



<script>
    ClassicEditor.create( document.querySelector( '.editor' ) ).catch( error => {
            console.error( error );
        } );
</script>


            </s-slot>
</x-app-layout>
