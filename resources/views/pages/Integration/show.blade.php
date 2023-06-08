<x-app-layout>
    <x-slot name='title'>
        Integration
       
    </x-slot>

    <div class="p-4">
        <div class="block rounded-lg bg-white text-center shadow-lg dark:bg-neutral-700">

            <div class="p-2 mx-auto bg-gray-100">
                <div class="block mx-auto min-w-full rounded-lg bg-white p-6  shadow-lg dark:bg-neutral-700">
                    <h1 class="text-center font-bold text-2xl bg-white rounded mb-2">Integration Show</h1>
                                   <div class="w-8/12 mx-auto my-3 p-4">
                                             <img src="{{'/storage/'. $integration->image}}" alt="" class="w-48 rounded-lg m-3 mx-auto p-4">
                                          <h3 class="text-4xl font-bold my-5"> @if($integration !== null){{$integration->title}} @endif</h3>
                                           <p class="text-md font-semibold text-justify">
                                                  @if($integration !== null){{$integration->description}} @endif
                                           </p>
                                   </div>
                </div>
            </div>
            <s-slot name='js'>
              
            </s-slot>
</x-app-layout>
