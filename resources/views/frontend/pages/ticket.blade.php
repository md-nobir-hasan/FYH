@extends('frontend.layout.app')
@push('title')
   ticket and support
@endpush
@section('content')
<div class="lg:mx-40" style="font-family:'Poppins'">
<section class="mt-[52px]">
<section>
   <a href="{{route('createRequest')}}"> 
    <img src="/images/ticketBanner.png" alt="" class=""/>
   </a>
</section>
<section class="mt-[27px]">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
        <div class="my-4">
            <h1 class="font-black text-xl ml-5">Recent Support Case</h1>
        </div>
        
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-sm">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-sm">
                    Date/Time
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-sm">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-sm">
                    Created by
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          
                <td class="w-4 p-4">
                  
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
             
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">
                            <a href="{{route('problem')}}">
                            Facing problem in billing
                        </a>
                        </div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                    <a href="{{route('problem')}}">   20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span> </a>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#848484] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]"> <a href="{{route('problem')}}">Thomas Tsangaras</a> </div>
                </td>
           
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#848484] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#848484] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#848484] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#04D140] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#04D140] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#04D140] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#04D140] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#04D140] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="font-normal text-[#212427] text-base">Facing problem in billing</div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] text-base">
                20/06/2023 <span class="text-[#848484] text-sm">12:20 pm</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#04D140] mr-2 "></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-[#212427]">Thomas Tsangaras</div>
                </td>
            </tr>       
        </tbody>
    </table>
</section>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
