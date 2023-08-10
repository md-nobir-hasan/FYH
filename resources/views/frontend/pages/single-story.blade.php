@extends('frontend.layout.app')
@push('title')
    {{ $story->name }}
@endpush
@section('content')
    <div class=" mt-[100px] mx-auto" style="font-family:'Poppins'">
        <section class="border-2 rounded grid grid-cols-1 lg:grid-cols-4 px-5 w-[1320px] bg-white gap-[48px] mx-auto ">
            <div class="col-span-1">
                <img src="{{ Storage::url($story->image) }}" alt="" class="w-[308px] h-[308px] mt-[20px]" />
            </div>
            <div class="col-span-3 ">
                <h1 class="text-[36px] mt-[10px] font-bold">“ {{ $story->title }} ”</h1>

                <div class="flex">
                    <p class="text-[#666565] mt-[10px] text-[16px] font-normal">Posted:
                        {{ date('D-M-Y', strtotime($story->created_at)) }} </p>

                    <div>
                        @auth
                            <svg class="mt-[10px] ml-[10px] cursor-pointer" width="20" height="20"
                                data-id="{{ $story->id }}" id="wl_manage" onclick="WishlistManage()"
                                xmlns="http://www.w3.org/2000/svg"
                                @if ($wishlist = $story->wishlists->where('user_id', Auth::user()->id)->first()) fill="red" data-add='' @else fill="none" data-add='yes' @endif
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        @else
                            <a href="{{ route('login') }}">
                                <svg class="mt-[10px] ml-[10px] cursor-pointer" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </a>
                        @endauth
                    </div>


                </div>

                <p class="text-justify font-normal text-[16px] mt-[20px]">
                    {{ $story->description }}
                </p>
                <h1 class="text-xl font-bold mt-[20px]"> {{ $story->name }} </h1>
                <p class="text-[#666565] font-normal text-[16px] capitalize "> {{ $story->profession }} </p>
                <p class="text-[#666565] capitalize font-normal text-[16px] pb-[20px] ">{{ $story->city }}, @if ($story->country !== null)
                        {{ $story->country->country }}
                    @endif
                </p>

            </div>
        </section>




        <section id="releted">
            <h1 class="text-2xl mt-[50px] w-[1320px] mx-auto -mb-5 font-bold">Related Stories</h1>



            @foreach ($stories->chunk(3) as $stres)
                <!-- temporary single story page start -->
                <div class=""
                    style="background:url('/images/benifitbg.png');background-size:100% 525px;background-repeat:no-repeat;background-position:0 100%">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10 w-[1320px] mx-auto">
                        @foreach ($stres as $stry)
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow">
                                <a href="{{ route('single-story', $stry->id) }}">
                                    <img class="h-[424px] w-full" src="/storage/{{ $stry->image }}" alt="" />
                                </a>
                                <div class="px-[22px] mt-[20px] h-[500px]">
                                    <a href="{{ route('single-story', $stry->id) }}">
                                        <h5 class=" text-[20px] font-bold tracking-tight text-[#212427]">
                                            "{!! $stry->title !!}"</h5>
                                    </a>
                                    <p class=" text-[14px] mt-[20px] font-normal text-[#212427] text-justify">
                                        {!! Str::limit($stry->description, 595) !!}</p>
                                    <a href="{{ route('single-story', $stry->id) }}"
                                        class="text-[#D1052C] font-bold text-[16px]">
                                        Read more
                                    </a>
                                    <h1 class="text-xl font-semibold mt-[20px]">{{ $stry->name }}<h1>
                                            <p class="capitalize text-[16px] font-normal">{{ $stry->profession }}</p>

                                            <p class="capitalize text-[16px] font-normal">{{ $stry->city }},
                                                {{ $stry->country->country }}</p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach
            <a href="" class="flex justify-center items-center"> <Button
                    class="lg:w-48 m-1 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Load More
                    Stories</button></a>
            <!-- temporary single story page end -->
            <!-- <div class="mt-2 flex justify-center items-center mb-10">
                @auth
                            <button  class="bg-[#D1052C] font-bold text-xl mt-2 text-white px-6 py-2 rounded loadmoredata">Load More Stories</button>
                @endauth

                    </div> -->

        </section>
        <section class=" mb-[-100px]"
            style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
            <div
                class="pb-10 pt-56 mt-[69px]"style="background:url(/images/lastbg.png);background-size:100% 100%;background-repeat:no-repeat;background-position:0 30px">
                <div class="pb-14 shadow-lg">
                    <h1 class="font-bold text-5xl text-[#212427] text-center">
                        @if ($share !== null)
                            {{ $share->share_title }}
                        @endif
                    </h1>

                    <p class="text-xl text-center text-[#D1052C] uppercase">
                        @if ($share !== null)
                            {!! $share->share_subtitle !!}
                        @endif
                    </p>
                    <a href="{{ route('share.story') }}" class=" flex justify-center items-center"><button
                            class="lg:w-48 mt-[20px] p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                            Story</button></a>

                </div>

            </div>
        </section>
        <!-- <section style="background:url(/images/Line2.png);background-size:100%;background-repeat:no-repeat">>
            <div class="mt-[100px] mb-[-100px] shadow-xl pb-32 lg:-mx-40" style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;background-position:cover">
                    <div class="">
                        <h1 class="font-bold text-5xl text-center">
                               @if ($share !== null)
    {{ $share->share_title }}
    @endif
                        </h1>
                        <p class="font-normal uppercase lg:mx-32 text-2xl text-center text-[#D1052C]"> @if ($share !== null)
    {!! $share->share_subtitle !!}
    @endif </p>
                    </div>
                    <div class="text-center mt-3"> <a href="{{ route('share.story') }}"> <button class=" font-bold text-xl text-white px-7 py-2 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Share Your Story</button> </a></div>
                    </div>
            </section> -->

    </div>
@endsection
@push('js')
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script>
        let wl_element = $('#wl_manage');
        var add = wl_element.attr('data-add');

        const WishlistManage = () => {
            const story_id = wl_element.attr('data-id');

            //For wishlist store
            if (add) {
                axios.post('{{ route('wishlist.store') }}', {
                    for: 'store',
                    id: story_id
                }).then((res) => {
                    if (!res.data) {
                        console.log('Inspect your code');
                    } else {
                        console.log('Sussfully added');
                        wl_element.css({
                            fill: 'red'
                        });
                        add = false;

                        $('#wishlist_div').append(` <div class="mt-[10px]  border wld${story_id}" style="box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.08);">
                                    <a href="{{ route('single-story', $story->id) }}">
                                        <div class="py-[10px] pl-[20px] flex">
                                            <img src="/storage/{{ $story->image }}" width="65px"/>
                                            <h1 class="text-[12px] mt-[7px] font-normal leading-normal ml-[10px]">{{ Str::limit($story->title, 57) }}</h1>
                                        </div>
                                    </a>
                                </div>`);
                    }
                })
            } else { //for wishlist remove
                axios.post('{{ route('wishlist.store') }}', {
                    for: 'delete',
                    id: story_id
                }).then((res) => {
                    if (!res.data) {
                        console.log('Inspect your code');
                    } else {
                        console.log(res.data);
                        console.log('successfully deleted');
                        $('#wishlist_div').find(`div.wld${story_id}`).remove();
                        wl_element.css({
                            fill: 'none'
                        });
                        add = true;
                    }
                })
            }

        }
    </script>
@endpush
