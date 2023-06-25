@extends('frontend.layout.app')
@push('title')
 
@endpush
@section('content')

<section class="mt-[27px] lg:mx-40 bg-white mb-[-150px]" style="font-family:'Poppins'">

    <div class="border px-20 py-14">
        <div class="">
            <a href="/ticket" class=""><button class=" flex items-center px-2 py-2 shadow-lg"><span class="mr-1"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM17 7L1 7V9L17 9V7Z" fill="#666565"/>
    </svg>
    </span>Back</button></a>
        </div>
    
        <div>
            <h1 class="text-2xl mt-5 font-bold text-[#212427]"> Open Case</h1>
            <h1 class="text-xl mt-2 font-bold text-[#212427]">{{$problemShow->subject}}</h1>
            <p class="text-[#212427]">
                {{$problemShow->description}}
            </p>
    <p class="text-[#848484] text-sm capitalize ">Created by: @if($user !==null){{$user->fname}} @endif<br>
   
        @if($problemShow->created_at !==null)
        Date: {{$problemShow->created_at->format('d-m-Y')}}, {{date('h:i A', strtotime($problemShow->created_at))}}
         
          @endif

</p>
         @if($problemShow->status ==1)
            <h1 class="text-xl mt-2 font-bold text-[#212427]">Solve Case:</h1>
            <p class="text-[#212427]">
                {{$problemShow->answer}}
</p>
    <p class="text-[#848484] text-sm">Solved by: FYH Support Team<br>
    Date: @if($problemShow->solveDate !==null) {{$problemShow->solveDate->format('d-m-Y')}}, {{date('h:i A', strtotime($problemShow->solveDate))}} @endif</p>
    @endif
        </div>
    </div>
       
    </section>


@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
