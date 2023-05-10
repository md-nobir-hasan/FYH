@if ($n = check('Benefit'))
    <x-app-layout>
        <x-slot name='title'>
            Benefits
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="flex items-center justify-center">
                <h1 class=" bg-white shadow-lg text-bold font-xl p-4 mb-4 rounded-lg">{{$mdata->name}}</h1>
            </div>
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="p-6">
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex justify-center items-center mb-3">
                            @if ($n->add)
                                <a href="{{ route('admin.setup.client-type.create') }}" target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>
                            @endif
                            @if ($n->edit)
                                <a href="{{ route('admin.setup.client-type.edit', [$mdata->id]) }}" target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-center text-sm font-light">
                                            <tbody>
                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Benefit Name</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->name }}
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-danger-200 bg-danger-100 text-neutral-800">
                                                    <th>Created At</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->created_at ? date_format($mdata->created_at,'d-m-Y') : '' }}
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Created By</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->created_by ? $mdata->created_by->name : '' }}
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-danger-200 bg-danger-100 text-neutral-800">
                                                    <th>Updated At</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{$mdata->updated_at ? date_format($mdata->updated_at,'d-m-Y') : '' }}
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Updated By</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->updated_by ? $mdata->updated_by->name : '' }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </x-app-layout>
@endif
