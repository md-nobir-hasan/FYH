@extends('frontend.layout.app')
@push('title')
    FYH
@endpush
@section('content')

<div style="font-family:'Poppins'" class="mb-[-104px]">
    <section class="mt-5">
        <img src="/images/sguide.png" alt="" class="h-[488px]"/>
    </section>
    <section class="mt-[50px] lg:mx-36">
    <video class="w-[1319px] h-[741px]" width="" controls>
  <source src="" type="video/mp4">
</video>
<h1 class="text-[50px] font-bold mt-[20px]">Survival Guide Video</h1>
<p class="text-xl font-normal uppercase">Guidence from Thomas tsangaras</p>
    </section>
    <section class="mt-[50px] lg:mx-36">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-5">
            <div>
                <video class="rounded-2xl w-[424px] h-[247px]" width="" controls>
                <source src="" type="video/mp4">
            </video>
            <h1 class="font-bold text-lg uppercase mt-4 ml-2 text-[#212427]">Guidence from Thomas tsangaras</h1>
            <p class="ml-2">Here goes a short description about this video. </p>
            </div>
            <div>
                <video class="rounded-2xl w-[424px] h-[247px] text-[#212427]" width="" controls>
                <source src="" type="video/mp4">
            </video>
            <h1 class="font-bold text-lg uppercase mt-4 ml-2">Guidence from Thomas tsangaras</h1>
            <p class="ml-2">Here goes a short description about this video. </p>
            </div>
            <div>
                <video class="rounded-2xl w-[424px] h-[247px]" width="" controls>
                <source src="" type="video/mp4">
            </video>
            <h1 class="font-bold text-lg uppercase mt-4 ml-2">Guidence from Thomas tsangaras</h1>
            <p class="ml-2">Here goes a short description about this video. </p>
            </div>
        </div>
    </section>
</div>

@endsection
@push('js')

@endpush
