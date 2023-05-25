<x-app-layout>
    <x-slot name='title'>
        Membership Type
    </x-slot>
    <x-slot name='style'>
        <style>
            span[data-te-select-clear-btn-ref]{
                padding: 0 5px;
                background: red;
                color:white;
                border-radius: 5px;
            }
            .group div[data-te-select-wrapper-ref]{
                width: 100% !important;
            }
            .group button{
                padding: 6px 10px;
                border-radius: 0px 5px 5px 0px;
            }
            .ck.ck-content.ck-editor__editable{
                height: 300px !important;
            }
        </style>
    </x-slot>
    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
            <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                <div class="flex justify-between">
                    <h4 class="text-bold text-lg">Creating Membership Types</h4>
                    <a href="{{ route('admin.setup.client-type.index') }}">
                        <div class="flex justify-center space-x-2">
                            <button type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                                Back
                            </button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="p-6 mx-auto bg-gray-100">

                <div
                class="block mx-auto max-w-xl rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                <form action="{{route('admin.setup.client-type.store')}}" method="POST">
                    @csrf

                  <div class="">
                        {{-- Name  --}}
                        <div class="relative w-full mb-6">
                                <input
                                type="text"
                                name="name"
                                value="{{old('name')}}"
                                class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                                id="name"
                                placeholder="Name" autocomplete="off" />
                                <label
                                for="name"
                                class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200"
                                >Name</label
                                >
                                @error('name')
                                    <span class="text-[red]">{{$message}}</span>
                                @enderror
                        </div>

                       

                        {{-- Price  --}}
                        <div class="relative w-full mb-6">
                                <input
                                type="number"
                                name="price"
                                value="{{old('price')}}"
                                class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                                id="price"
                                placeholder="Price" autocomplete="off" />
                                <label
                                for="price"
                                class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200"
                                >Price</label
                                >
                                @error('price')
                                    <span class="text-[red]">{{$message}}</span>
                                @enderror
                        </div>
                        {{-- Discount  --}}
                        {{-- <div class="relative w-full mb-6">
                                <input
                                type="number"
                                name="dis"
                                value="{{old('dis')}}"
                                class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                                id="dis"
                                placeholder="Discount" autocomplete="off" />
                                <label
                                for="dis"
                                class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200"
                                >Discount</label
                                >
                                @error('dis')
                                    <span class="text-[red]">{{$message}}</span>
                                @enderror
                        </div> --}}

                        {{-- Currency  --}}
                        <div class="relative w-full mb-6">
                            <input
                            type="text"
                            name="currency"
                            value="{{old('currency')}}"
                            class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                            id="currency"
                            placeholder="currency" autocomplete="on" />
                            <label
                            for="price"
                            class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200"
                            >Currency</label
                            >
                            @error('currency')
                                <span class="text-[red]">{{$message}}</span>
                            @enderror
                    </div>

                        {{-- Payment Duration  --}}
                        <div class="relative w-full mb-6">
                            <div class=" mb-4 flex group">
                                <select name="billing_period" data-te-select-init data-te-select-filter="true"
                                >
                                    <option hidden>Select Payment Duration</option>
                                    @foreach ($billing_periods as $period)
                                        <option value="{{$period}}" @selected(old('period'))>{{strtoupper($period)}}</option>
                                    @endforeach
                                </select>
                              
                            </div>
                            @error('billing_period')
                                <span class="text-[red]">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="relative w-full mb-6">
                            <input
                            type="number"
                            name="interval_count"
                            value="{{old('interval_count')}}"
                            class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                            id="name"
                            placeholder="Interval Count" autocomplete="off" />
                            <label
                            for="name"
                            class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200"
                            >Interval Count</label
                            >
                            @error('interval_count')
                                <span class="text-[red]">{{$message}}</span>
                            @enderror
                    </div>

                          {{-- Description  --}}
                          <div class="relative w-full mb-6 text-left">
                              <label for="editor" class="">Description:</label>
                            <textarea name="des" id="editor" cols="30" rows="10"
                            class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                            >{{old('des')}}</textarea>

                            {{-- <label
                            for=""
                            class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200"
                            >Description</label
                            >--}}
                            @error('des')
                                <span class="text-[red]">{{$message}}</span>
                            @enderror
                    </div>
                    <button
                      type="submit"
                      class="w-full rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      Save
                    </button>
                  </div>
                </form>
              </div>

            </div>
          <x-slot:js>
                <script src="{{asset('js/ckeditor5/ckeditor.js')}}"></script>
                <script>
                    ClassicEditor.create( document.querySelector( '#editor' ) ).catch( error => {
                            console.error( error );
                        } );
                </script>
            </x-slot:js>
</x-app-layout>
