<x-app-layout>
    <x-slot name='title'>
        Add Embed code
    </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
            <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                <div class="flex justify-between">
                    <h4 class="text-bold text-lg">Creating Embed Code</h4>
                    <a href="{{ url()->previous() }}">
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

                <div class="block mx-auto max-w-md rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <form action="{{ route('admin.setup.video.store') }}" method="POST">
                        @csrf
                        <div class="">
                            {{-- Embed code for  --}}
                            <div class="relative w-full mb-6 xl:w-96">
                                <select name="for" data-te-select-init>
                                    <option value="" hidden>Embed Code For</option>
                                    <option value="survival" @selected(old('for')=='survival')>Servival</option>
                                </select>

                                @error('for')
                                    <span class="text-[red]">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Title for the video  --}}
                            <div class="relative w-full mb-6 xl:w-96">
                                <input type="text" name="title" value="{{old('title')}}"
                                    class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                                    id="title" placeholder="Title for the video" autocomplete="off" />
                                <label for="title"
                                    class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200">Title</label>
                                @error('title')
                                    <span class="text-[red]">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Embed code for the videos  --}}
                            <div class="relative w-full mb-6 xl:w-96">
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <textarea name="embed_code"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="embed_code"
                                        rows="3"
                                        placeholder="Enter video's embed code">{{old('embed_code')}}</textarea>
                                    <label for="embed_code"
                                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                    Embed Code</label>
                                </div>
                                @error('embed_code')
                                    <span class="text-[red]">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Description for the videos  --}}
                            <div class="relative w-full mb-6 xl:w-96">
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <textarea name="des"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="des"
                                        rows="3"
                                        placeholder="Description for the video">{{old('des')}}</textarea>
                                    <label for="des"
                                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                    Description</label>
                                </div>
                                @error('des')
                                    <span class="text-[red]">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Aditional Description for the videos  --}}
                            <div class="relative w-full mb-6 xl:w-96">
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <textarea name="additional_des"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="additional_des"
                                        rows="3"
                                        placeholder="Additional Description for the video">{{old('additional_des')}}</textarea>
                                    <label for="additional_des"
                                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                   Additional Description</label>
                                </div>
                                @error('additional_des')
                                    <span class="text-[red]">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Default --}}
                            <div class="relative w-full mb-6 xl:w-96">
                                <input type="number" name="default" value="{{old('default')}}"
                                    class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding py-4 px-3 text-base font-normal leading-tight text-neutral-700 ease-in-out placeholder:text-transparent focus:border-primary focus:bg-white focus:pt-[1.625rem] focus:pb-[0.625rem] focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:bg-neutral-800 dark:text-neutral-200 [&:not(:placeholder-shown)]:pt-[1.625rem] [&:not(:placeholder-shown)]:pb-[0.625rem]"
                                    id="default" placeholder="1 means main video, 2 means second video ..." autocomplete="off" />
                                <label for="default"
                                    class="pointer-events-none absolute top-0 left-0 origin-[0_0] border border-solid border-transparent py-4 px-3 text-neutral-700 transition-[opacity,_transform] duration-100 ease-in-out peer-focus:translate-x-[0.15rem] peer-focus:-translate-y-2 peer-focus:scale-[0.85] peer-focus:opacity-[0.65] peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:scale-[0.85] peer-[:not(:placeholder-shown)]:opacity-[0.65] motion-reduce:transition-none dark:text-neutral-200">
                                    1 means main video, 2 means second video ...</label>
                                @error('default')
                                    <span class="text-[red]">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                                data-te-ripple-init data-te-ripple-color="light">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
</x-app-layout>
