@if ($n = check('Benefit'))
    <x-app-layout>
        <x-slot name='title'>
            Benefits
        </x-slot>
        <s-slot name='style'>

        </s-slot>
        <div class="p-4">
            <div class="flex items-center justify-center">
                <h1 class=" bg-white shadow-lg text-bold font-xl p-4 mb-4 rounded-lg">{{$mdata->title}}</h1>
            </div>
            <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">
                <div class="p-6">
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                       
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-center text-sm font-light">
                                            <tbody>
                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Benefit Title</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->title }}
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Benefit Description</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->description }}
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Benefit Image</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                       <img src="{{'/storage/'.$mdata->image}}" alt="{{ $mdata->title}}" width="80px">
                                                    </td>
                                                </tr>

                                                <tr class="border-b border-success-200 bg-success-100 text-neutral-800">
                                                    <th>Benefit Priority</th>
                                                    <th>:</th>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $mdata->priority }}
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
