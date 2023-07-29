@extends('frontend.layout.app')
@push('title')
   ticket and support
@endpush
@section('content')
<div class=" mb-[-150px]" style="font-family:'Poppins'">
<section class="mt-[64px]">
<section>
   <a href="{{route('createRequest')}}"> 
    <img src="/images/ticketBanner.png" alt="" class="mx-auto"/>
   </a>

</section>
<section class="mt-[50px] w-[1320px] mx-auto">

<div class="relative bg-white overflow-x-auto shadow-md sm:rounded-lg">
    
        <div class="">
            <h1 class="font-semibold text-[28px] ml-5">Recent Support Case</h1>
        </div>
        
    <table class="w-full mt-[20px] text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-[18px]">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-[18px] font-semibold">
                    Date/Time
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-[18px] font-semibold">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-[#848484] text-[18px] font-semibold">
                    Created by
                </th>
            </tr>
        </thead>
        <tbody>
            @if($problems->count() > 0)
             @foreach ($problems as $item)
                 
           

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
                            <a href="{{route('problem', $item->id)}}">
                           {{$item->subject}}
                        </a>
                        </div>
                    </div>  
                </th>
                <td class="px-6 py-4 text-[#212427] font-normal text-base">
                    <a href="{{route('problem', $item->id)}}"> @if($item->created_at !==null)  {{$item->created_at->format('d-m-Y')}} <span class="text-[#848484] text-sm">{{date('h:i A', strtotime($item->created_at))}} @endif</span> </a>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-[#212427]">
                        @if($item->status == 0)
                        <div class="h-2.5 w-2.5 rounded-full bg-[#848484] mr-2 text-[16px] font-normal"></div> Open                       
                        @else
                        <div class="h-2.5 w-2.5 rounded-full bg-green-600 mr-2 text-base font-normal"></div> Solve
                        @endif
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div  type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-normal text-base text-[#212427] uppercase"> <a href="{{route('problem',$item->id)}}"> @if($item->user !==null) {{$item->user->fname}} @endif </a> </div>
                </td>
           
            </tr>       
            @endforeach
            @endif
        </tbody>
    </table>

                <div class="flex justify-center my-5">
                    {{ $problems->links() }}
                </div>


</section>
</section>

</div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
