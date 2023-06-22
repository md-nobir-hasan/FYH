@extends('frontend.layout.app')
@push('title')
    FYH
@endpush
@section('content')

<div style="font-family:'Poppins'" class="mb-[-100px]">
    <section class="mt-5">
        <img src="/images/sguide.png" alt="" class=""/>
    </section>
    <section class="mt-5 lg:mx-40">
    <video class="w-full h-[400px]" width="" controls>
  <source src="" type="video/mp4">
</video>
<h1 class="text-5xl font-black mt-2">Survival Guide Video</h1>
<p class="text-lg uppercase">Guidence from Thomas tsangaras</p>
    </section>
    <section class="mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 lg:mx-36 mx-5 gap-5">
            <div>
                <video class="rounded-xl w-full" width="" controls>
                <source src="" type="video/mp4">
            </video>
            <h1 class="font-bold text-lg uppercase mt-4 ml-2">Guidence from Thomas tsangaras</h1>
            <p class="ml-2">Here goes a short description about this video. </p>
            </div>
            <div>
                <video class="rounded-xl w-full" width="" controls>
                <source src="" type="video/mp4">
            </video>
            <h1 class="font-bold text-lg uppercase mt-4 ml-2">Guidence from Thomas tsangaras</h1>
            <p class="ml-2">Here goes a short description about this video. </p>
            </div>
            <div>
                <video class="rounded-xl w-full" width="" controls>
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
