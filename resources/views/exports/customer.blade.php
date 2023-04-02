<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    {{-- <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8"> --}}
            <div class="overflow-hidden">
              <table class="min-w-full text-left text-lg font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                  <tr>
                    <th scope="col" class="px-6 py-4">SL</th>
                    <th scope="col" class="px-6 py-4">Name</th>
                    <th scope="col" class="px-6 py-4">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$loop->index}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$data->name}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$data->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          {{-- </div>
        </div>
    </div> --}}

</body>
</html>
