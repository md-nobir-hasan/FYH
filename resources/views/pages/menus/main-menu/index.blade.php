@if ($n = check('Main Menu'))
    <x-app-layout>
        <x-slot name='title'>
            Menus
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="border-b-2 border-neutral-100 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
                    <div class="flex justify-between">
                        <h4 class="text-bold text-lg">Menus</h4>
                        @if ($n->add)
                            <a href="{{ route('admin.menu.menu.create') }}">
                                <div class="flex justify-center space-x-2">
                                    <button type="button"
                                        class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                                        Add new Menu
                                    </button>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="p-6">
                    <!--Tabs navigation-->
                    <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                        <li role="presentation" class="flex-auto text-center">
                            <a href="#tabs-home01"
                                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                data-te-toggle="pill" data-te-target="#tabs-home01" data-te-nav-active role="tab"
                                aria-controls="tabs-home01" aria-selected="true">
                                All Menus
                            </a>
                        </li>
                        @foreach ($client_tyes as $ct_types)
                            <li role="presentation" class="flex-auto text-center">
                                <a href="#tabcontent{{ $ct_types->id }}"
                                    class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                    data-te-toggle="pill" data-te-target="#tabcontent{{ $ct_types->id }}" role="tab"
                                    aria-controls="tabcontent{{ $ct_types->id }}"
                                    aria-selected="false">{{ $ct_types->name }}</a>
                            </li>
                        @endforeach
                        <li role="presentation" class="flex-auto text-center">
                            <a href="#tabs-messages01"
                                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                data-te-toggle="pill" data-te-target="#tabs-messages01" role="tab"
                                aria-controls="tabs-messages01" aria-selected="false">Menus for Normar Users</a>
                        </li>
                    </ul>

                    <!--Tabs content-->
                    <div class="mb-6 shadow-lg shadow-gray-400">
                        {{-- All menus are  --}}
                        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-home01" role="tabpanel" aria-labelledby="tabs-home-tab01" data-te-tab-active>
                            <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            User Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Url
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Serial
                                        </th>
                                        @if ($n->edit || $n->delete)
                                            <th scope="col" class="px-6 py-3 text-bold text-md">
                                                Action
                                            </th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_menus as $mdata)
                                        @foreach ($mdata as $value)
                                            <tr
                                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $value->name }}
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    @if ($value->client_type_id)
                                                        <a href="{{ route('admin.setup.client-type.show', [$value->client_type_id]) }}"
                                                            class="text-blue-800"
                                                            target="_blank">{{ $value->client_type->name }}</a>
                                                    @else
                                                        Normal User
                                                    @endif
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $value->link ? $value->link->url : '' }}
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $value->serial }}
                                                </th>
                                                @if ($n->edit || $n->delete)
                                                    <td class="px-6 py-4 text-center flex">
                                                        @if ($n->show)
                                                        <a href="{{route('admin.menu.menu.show',[$value->id])}}" target="_blank"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            </svg>
                                                        </a>
                                                    @endif
                                                        @if ($n->edit)
                                                            <a href="{{ route('admin.menu.menu.edit', [$value->id]) }}"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        @if ($n->delete)
                                                            <a href="{{ route('admin.delete', [$value->id, 'Menu']) }}"
                                                                class="ml-2 delete font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6 text-[red]">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>
                                                            </a>
                                                        @endif
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                        @foreach ($client_tyes as $ct_types)
                            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                                id="tabcontent{{ $ct_types->id }}" role="tabpanel"
                                aria-labelledby="tabs-tabcontent{{ $ct_types->id }}1">
                                @if (count($ct_types->menu()))
                                    <table
                                        class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Type
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Url
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Serial
                                                </th>
                                                @if ($n->edit || $n->delete)
                                                    <th scope="col" class="px-6 py-3 text-bold text-md">
                                                        Action
                                                    </th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ct_types->menu() as $menu)
                                                <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $menu->name }}
                                                    </th>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        @if ($menu->client_type_id)
                                                            <a href="{{ route('admin.setup.client-type.show', [$menu->client_type_id]) }}"
                                                                class="text-blue-800"
                                                                target="_blank">{{ $menu->client_type->name }}</a>
                                                        @else
                                                            Normal User
                                                        @endif
                                                    </th>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $menu->link ? $menu->link->url : '' }}
                                                    </th>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $menu->serial }}
                                                    </th>
                                                    @if ($n->edit || $n->delete)
                                                        <td class="px-6 py-4 text-center flex">
                                                            @if ($n->show)
                                                            <a href="{{route('admin.menu.menu.show',[$value->id])}}" target="_blank"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                </svg>
                                                            </a>
                                                        @endif
                                                            @if ($n->edit)
                                                                <a href="{{ route('admin.menu.menu.edit', [$menu->id]) }}"
                                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                    </svg>
                                                                </a>
                                                            @endif
                                                            @if ($n->delete)
                                                                <a href="{{ route('admin.delete', [$menu->id, 'Menu']) }}"
                                                                    class="ml-2 delete font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6 text-[red]">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                </a>
                                                            @endif
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-center mt-10 py-5">There are no menus</p>
                                @endif
                            </div>
                        @endforeach

                        {{-- Menus for normal users  div --}}
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-messages01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                            <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            User Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Url
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Serial
                                        </th>
                                        @if ($n->edit || $n->delete)
                                            <th scope="col" class="px-6 py-3 text-bold text-md">
                                                Action
                                            </th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normal_users_menus as $nums)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $nums->name }}
                                            </th>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($nums->client_type_id)
                                                    <a href="{{route('admin.setup.client-type.show',[$nums->client_type_id])}}" class="text-blue-800" target="_blank">{{$nums->client_type->name }}</a>
                                                @else
                                                    Normal User
                                                @endif
                                            </th>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $nums->link ? $nums->link->url : '' }}
                                            </th>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $nums->serial }}
                                            </th>
                                            @if ($n->edit || $n->delete)
                                                <td class="px-6 py-4 text-center flex">
                                                    @if ($n->show)
                                                    <a href="{{route('admin.menu.menu.show',[$value->id])}}" target="_blank"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </a>
                                                @endif
                                                    @if ($n->edit)
                                                        <a href="{{ route('admin.menu.menu.edit', [$nums->id]) }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                            </svg>
                                                        </a>
                                                    @endif
                                                    @if ($n->delete)
                                                        <a href="{{ route('admin.delete', [$nums->id, 'Menu']) }}"
                                                            class="ml-2 delete font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6 text-[red]">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                            </svg>
                                                        </a>
                                                    @endif
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=" overflow-x-auto shadow-md sm:rounded-lg">

                        {{-- <table class=" text-md mx-auto min-w-[50%] text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Url
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Serial
                                    </th>
                                    @if ($n->edit || $n->delete)
                                        <th scope="col" class="px-6 py-3 text-bold text-md">
                                            Action
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mdata as $value)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->name }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->type }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->url }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->serial }}
                                        </th>
                                        @if ($n->edit || $n->delete)
                                            <td class="px-6 py-4 text-center flex">
                                                @if ($n->edit)
                                                    <a href="{{ route('admin.menu.menu.edit', [$value->id]) }}"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                @endif
                                                @if ($n->delete)
                                                    <a href="{{ route('admin.delete', [$value->id, 'Menu']) }}"
                                                        class="ml-2 delete font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6 text-[red]">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </a>
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}

                    </div>
                </div>
                <x-slot:js>
                    <script src="{{ asset('js/sweet-alert.js') }}"></script>
                    <script type="module">

                        $('.delete').on('click',function(e){
                           e.preventDefault();
                            let url = $(this).prop('href');
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                                }).then((result) => {

                                if (result.isConfirmed) {
                                    window.location = url;
                                }
                            })
                        })
                        //Toastr message
                        @if ($msg = Session::get('success'))
                            toastr.success("{{$msg}}");
                        @endif
                    </script>
                </x-slot:js>
    </x-app-layout>
@endif
