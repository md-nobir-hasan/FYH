<x-app-layout>
    <x-slot name='title'>
        Home Section
       
    </x-slot>
 
     <x-slot name='style'>
   

     </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-6 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Home Section</h1>
                    <form action="@if($homeSection!==null) {{route('admin.home.update',$homeSection->id)}} @else {{route('admin.home.store')}} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                      @if($homeSection!==null)  @method('PUT') @endif
                        <h4 class="font-bold text-xl underline text-left">Home Section</h4>
                        <div class="mb-4 flex justify-center gap-4">
                            @if($homeSection!==null) <img id="logo_img"
                                src="{{'/storage/'.$homeSection->image}}"
                                class="max-w-sm max-h-[200px] mx-auto rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"
                                alt="" />@endif
                                @if($homeSection!==null) <img id="logo_img"
                                src="{{'/storage/'.$homeSection->lgImage}}"
                                class="max-w-sm max-h-[200px] mx-auto rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"
                                alt="" />@endif
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">

                            <div class="text-left">
                                <label
                                for="title_one"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Title One: </label
                              >
                              <input name="title_one"     @if($homeSection!==null) value="{{$homeSection->title_one}}" @endif 
                                class="@error('title_one') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title_one" placeholder="Enter title One" />

                                @error('title_one')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="title_one_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Title One Description: </label>
                                    <textarea  name="title_one_description" rows="1" class="@error('title_one_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Title One Description">
                                     @if($homeSection!==null)  {!!$homeSection->title_one_description  !!}  @endif
                                    </textarea>
                                    @error('title_one_description')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            <div class="text-left">
                                <label
                                for="title_one"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Title Two: </label
                              >
                              <input name="title_two"  @if($homeSection!==null) value="{{$homeSection->title_two}}" @endif 
                                class="@error('title_two') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title_two" placeholder="Enter title Two" />

                                @error('title_two')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="title_two_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Title One Description: </label>
                                    <textarea  name="title_two_description" rows="1" class="@error('title_one_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Title Two Description">
                                     @if($homeSection!==null)  {!!$homeSection->title_two_description  !!}  @endif
                                    </textarea>
                                    @error('title_two_description')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                            {{-- benifit and Other Titile And description --}}
                            
                            <div class="text-left">
                                <label
                                for="benefit_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Benefit Title : </label
                              >
                              <input name="benefit_title"  @if($homeSection!==null) value="{{$homeSection->benefit_title}}" @endif 
                                class="@error('benefit_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="title_two" placeholder="Enter Bemefit title " />

                                @error('benefit_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="benefit_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Benefit SubTitle : </label>
                                    <textarea  name="benefit_subtitle" rows="1" class="@error('benefit_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Benefit SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->benefit_subtitle  !!}  @endif
                                    </textarea>
                                    @error('benefit_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            
                            {{-- story Title AND SUBTITLE --}}
                            <div class="text-left">
                                <label
                                for="story_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Story title : </label
                              >
                              <input name="story_title"  @if($homeSection!==null) value="{{$homeSection->story_title}}" @endif 
                                class="@error('story_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="story_title" placeholder="Enter Story title " />

                                @error('story_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="story_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Story SubTitle : </label>
                                    <textarea  name="story_subtitle" rows="1" class="@error('story_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Title Two Description">
                                     @if($homeSection!==null)  {!!$homeSection->story_subtitle  !!}  @endif
                                    </textarea>
                                    @error('story_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>
                            

                            {{-- fature title and subtitle --}}
                            <div class="text-left">
                                <label
                                for="feature_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Feature Title : </label
                              >
                              <input name="feature_title"  @if($homeSection!==null) value="{{$homeSection->feature_title}}" @endif 
                                class="@error('feature_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="feature_title" placeholder="Enter Feature title " />

                                @error('feature_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="feature_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Feature Subtitle: </label>
                                    <textarea  name="feature_subtitle" rows="2" class="@error('feature_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Feature SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->feature_subtitle  !!}  @endif
                                    </textarea>
                                    @error('feature_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                           {{--Image Section title and subtitle  --}}
                            <div class="text-left">
                                <label
                                for="image_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Image Title : </label
                              >
                              <input name="image_title"  @if($homeSection!==null) value="{{$homeSection->image_title}}" @endif 
                                class="@error('image_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="image_title" placeholder="Enter Iamge title " />

                                @error('image_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="image_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Image Subtitle: </label>
                                    <textarea  name="image_subtitle" rows="2" class="@error('image_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Image SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->image_subtitle  !!}  @endif
                                    </textarea>
                                    @error('image_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                            {{-- service title and subtitle --}}

                            <div class="text-left">
                                <label
                                for="service_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Service Title : </label
                              >
                              <input name="service_title"  @if($homeSection!==null) value="{{$homeSection->service_title}}" @endif 
                                class="@error('service_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="service_title" placeholder="Enter Service title " />

                                @error('service_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="service_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Feature Subtitle: </label>
                                    <textarea  name="service_subtitle" rows="2" class="@error('service_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Feature SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->service_subtitle  !!}  @endif
                                    </textarea>
                                    @error('service_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                            {{-- customer title and subtitle --}}

                            <div class="text-left">
                                <label
                                for="customer_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Customer Title : </label
                              >
                              <input name="customer_title"  @if($homeSection!==null) value="{{$homeSection->customer_title}}" @endif 
                                class="@error('customer_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="customer_title" placeholder="Enter Customer title " />

                                @error('customer_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="customer_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Customer Subtitle: </label>
                                    <textarea  name="customer_subtitle" rows="2" class="@error('customer_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Customer SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->customer_subtitle  !!}  @endif
                                    </textarea>
                                    @error('customer_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                            {{-- share title and subtitle --}}
                            <div class="text-left">
                                <label
                                for="share_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Share Title : </label
                              >
                              <input name="share_title"  @if($homeSection!==null) value="{{$homeSection->share_title}}" @endif 
                                class="@error('share_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="share_title" placeholder="Enter Share title " />

                                @error('share_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="share_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Share Subtitle: </label>
                                    <textarea id="editor"  name="share_subtitle" rows="2" class="@error('share_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Share SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->share_subtitle  !!}  @endif
                                    </textarea>
                                    @error('share_subtitle')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                              {{-- Move title and subtitle --}}
                              <div class="text-left">
                                <label
                                for="move_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Move Title : </label
                              >
                              <input name="move_title"  @if($homeSection!==null) value="{{$homeSection->move_title}}" @endif 
                                class="@error('move_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="move_title" placeholder="Enter Move title " />

                                @error('move_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="move_subtile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Move Subtitle: </label>
                                    <textarea id="editor"  name="move_subtile" rows="2" class="@error('move_subtile') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Share SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->move_subtile  !!}  @endif
                                    </textarea>
                                    @error('move_subtile')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>


                              {{-- intregation and subtitle --}}
                              <div class="text-left">
                                <label
                                for="intr_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Integation Title : </label
                              >
                              <input name="intr_title"  @if($homeSection!==null) value="{{$homeSection->intr_title}}" @endif 
                                class="@error('intr_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="intr_title" placeholder="Enter integation title " />

                                @error('intr_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="intr_subtile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Integation Subtitle: </label>
                                    <textarea id="editor"  name="intr_subtile" rows="2" class="@error('intr_subtile') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Share SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->intr_subtile  !!}  @endif
                                    </textarea>
                                    @error('intr_subtile')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>



                              {{-- help title and subtitle --}}
                              <div class="text-left">
                                <label
                                for="help_title"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Help Title : </label
                              >
                              <input name="help_title"  @if($homeSection!==null) value="{{$homeSection->help_title}}" @endif 
                                class="@error('help_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="text"
                                id="help_title" placeholder="Enter Help title " />

                                @error('help_title')
                                <div class="text-left text-red-600">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="text-left">
                                <label for="help_subtile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Help Subtitle: </label>
                                    <textarea id="editor"  name="help_subtile" rows="2" class="@error('help_subtile') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                     placeholder="Enter Help SubTitle ">
                                     @if($homeSection!==null)  {!!$homeSection->help_subtile  !!}  @endif
                                    </textarea>
                                    @error('help_subtile')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                            </div>

                                   {{-- Thanks title and subtitle --}}
                                   <div class="text-left">
                                    <label
                                    for="thank_heading"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                    >Thank Heading : </label
                                  >
                                  <input name="thank_heading"  @if($homeSection!==null) value="{{$homeSection->thank_heading}}" @endif 
                                    class="@error('thank_heading') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="text"
                                    id="thank_heading" placeholder="Enter Thank heading " />
    
                                    @error('thank_heading')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                                </div>

                                <div class="text-left">
                                    <label
                                    for="thank_title"
                                    class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                    >Thank Title : </label
                                  >
                                  <input name="thank_title"  @if($homeSection!==null) value="{{$homeSection->thank_title}}" @endif 
                                    class="@error('thank_title') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="text"
                                    id="thank_title" placeholder="Enter Thank title " />
    
                                    @error('thank_title')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                   @enderror
                                </div>
    
                                <div class="text-left">
                                    <label for="thank_subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Thank Subtitle: </label>
                                        <textarea id="editor"  name="thank_subtitle" rows="2" class="@error('thank_subtitle') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                         placeholder="Enter Share SubTitle ">
                                         @if($homeSection!==null)  {!!$homeSection->thank_subtitle  !!}  @endif
                                        </textarea>
                                        @error('thank_subtitle')
                                        <div class="text-left text-red-600">{{ $message }}</div>
                                       @enderror
                                </div>



                        </div>


                            <div class="mb-3 text-left">
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
                     
                            <div class="mb-3 text-left">
                                <label
                                for="lgImage"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Lg Image: </label
                              >
                              <input name="lgImage" value=""
                                class="@error('lgImage') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="lgImage" />
                                @error('lgImage')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                          

                            <div class="mb-3 text-left">
                                <label
                                for="lgImage"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Help Image: </label
                              >
                              <input name="help_image" value=""
                                class="@error('help_image') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="help_image" />
                                @error('help_image')
                                    <div class="text-left text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 text-left">
                                <label
                                for="thank_image"
                                class="mb-2 text-left inline-block text-neutral-700 dark:text-neutral-200"
                                >Thank Image: </label
                              >
                              <input name="thank_image" value=""
                                class="@error('thank_image') is-invalid @enderror relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file"
                                id="thank_image" />
                                @error('thank_image')
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
