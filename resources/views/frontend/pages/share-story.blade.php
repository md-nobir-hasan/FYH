@extends('frontend.layout.app')
@push('title')
    Share Story
@endpush
@section('content')

<div class="w-[1320px] mx-auto bg-white" style="font-family:'Poppins'">
  <form action="{{route('share.story.store')}}" method="post" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-10">
  @csrf
  <input type="hidden" name="id" value="">
    <!-- image section -->
  <section class="col-span-1">
  <div class="border-2 rounded border-gray-200 mt-28 shadow-lg">
    <div class="extraOutline p-1 bg-white  bg-whtie m-auto rounded-lg">
        <div class="file_upload p-5 relative border-4  border-dotted border-gray-300 rounded-lg" >
        <div class="flex justify-center items-center">
        <p id="filePreview"></p>
        </div>
          <div class="flex justify-center items-center">
            <img id="imgFile" src="/images/inputImage.png"/>
          </div>
            <h1 class="text-center text-[#848484] text-xl font-semibold">Upload Your Image Here</h1>
            <div class="input_field flex flex-col w-max mx-auto text-center">
                <label>
                    <input id="fileInput" class="text-sm cursor-pointer w-36 hidden" type="file" name="image" />
                    <div class="text bg-[#D1052C] text-white border border-gray-300 rounded font-semibold cursor-pointer py-2 px-7 hover:bg-[#a73147]">Choose Image</div>
                    @error('image')
                    <div class="text-left text-red-600">{{ $message }}</div>
                  @enderror
                  </label>
                <p id="filePreview"></p>
                <p class="text-center text-[#848484] text-sm mt-1">Supports: JPG, JPEG, PNG</p>
            </div>
        </div>
    </div>
</div>
  </section>
<!-- img section end -->
<section class="col-span-2">
  <div class="lg:mt-20 mt-10">
    <h1 class="text-xl font-semibold capitalize"> Hey {{$user->fname}} {{$user->lname}},</h1>
     <input type="hidden" name="name" value="{{$user->fname }}">


       <div class="">
        <input type="text" name="profession" value="{{old('profession')}}" placeholder="Your Job Tittle (e.g. Recruiter)" class=" @error('profession') is-invalid @enderror w-full rounded border mt-2 border-dotted border-[#848484]" />
        @error('profession')
             <div class="text-left text-red-600">{{ $message }}</div>
        @enderror
       </div>


        {{-- <div class="">
          <input type="text" name="address" placeholder="Where are you From?" class="@error('address') is-invalid @enderror w-full rounded border mt-5 border-dotted border-[#848484]" />
              @error('address')
              <div class="text-left text-red-600">{{ $message }}</div>
            @enderror
        </div> --}}

        <div>
          <select name="country_id"  class="@error('city') is-invalid @enderror w-full rounded border mt-5 border-dotted border-[#848484]">
                  <option  selected disabled value="">Where are you From?</option>
                  @foreach ($country as $item)
                       <option value="{{$item->id}}" @selected($item->id == old('country_id'))>{{$item->country}}</option>
                  @endforeach
          </select>

          @error('country_id')
          <div class="text-left text-red-600">{{ $message }}</div>
         @enderror
        </div>

        <div>
          <input type="text" name="city" value="{{old('city')}}" placeholder="City" class="@error('city') is-invalid @enderror w-full rounded border mt-5 border-dotted border-[#848484]" />
          @error('city')
          <div class="text-left text-red-600">{{ $message }}</div>
         @enderror
        </div>


        <div>
          <input type="text" name="title" value="{{old("title")}}" placeholder="Story Title" class="@error('title') is-invalid @enderror w-full rounded border mt-5 border-dotted border-[#848484]" />
          @error('title')
          <div class="text-left text-red-600">{{ $message }}</div>
         @enderror
        </div>

       <div>
        <textarea id="message" name="description" rows="4" class="@error('description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-dotted h-[386px] border-[#848484] focus:ring-blue-500 focus:border-blue-500 mt-5" placeholder="Write story here..." >
            {{old('description')}}
        </textarea>
          @error('description')
          <div class="text-left text-red-600">{{ $message }}</div>
          @enderror
       </div>

        <div class="flex items-center mb-4 mt-5">
    <input id="default-checkbox" type="checkbox" name="agree" @checked(old("agree")) class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2" required>
    <label for="default-checkbox" class="ml-2 font-medium text-black">I agree to use my story and my photo</label>
  </div>
<button type="submit" class="text bg-[#D1052C] text-white border border-gray-300 rounded font-semibold cursor-pointer py-2 px-7 hover:bg-[#a73147]">Post Story</button>
  </div>
</section>
  </form>
</div>

@endsection
@push('js')
<script>
   const fileInput = document.getElementById('fileInput');
const filePreview = document.getElementById('filePreview');
const imageFile = document.getElementById('imgFile')

fileInput.addEventListener('change', (event) => {
  const file = event.target.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = (readerEvent) => {
      const previewImage = document.createElement('img');
      previewImage.src = readerEvent.target.result;
      previewImage.classList.add('w-40','mt-5', 'h-28', 'object-cover', 'rounded');
      imageFile.classList.add('hidden')
      filePreview.innerHTML = '';
      filePreview.appendChild(previewImage);
    };

    reader.readAsDataURL(file);
  } else {
    filePreview.innerHTML = '';
  }
});

</script>
@endpush
