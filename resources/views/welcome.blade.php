<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
     .container{
        @apply px-10 mx-auto;
     }
    }
  </style>
    <title>Crud Operation</title>
</head>

<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h2 class="text-purple-900 font-bold border-2 border-purple-900 py-2 px-4">Home | Data Information</h2>
            <a href="/create" class="bg-purple-900 text-white rounded py-2 px-4">Add New Post</a>
        </div>
        @if (session('success'))
            <h2 class="text-green-600">{{ session('success') }}</h2>
        @endif
        <div class="">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 border border-purple-300">
                                <thead class="bg-purple-900">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            <h5 class="text-white font-bold">Id</h5>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            <h5 class="text-white font-bold">Name</h5>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            <h5 class="text-white font-bold">Description</h5>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            <h5 class="text-white font-bold">Image</h5>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                            <h5 class="text-white font-bold"> Action</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr class="odd:bg-white even:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ $post->id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $post->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $post->description }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                @if($post->image)
                                                    <img src="{{ asset('uploads/' . $post->image) }}" alt=""
                                                        class="w-16 h-16 object-cover rounded" />
                                                @else
                                                    <span class="text-gray-400 italic">No image</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm">
                                                <a href="{{route('edit', $post->id)}}"
                                                    class="bg-green-600 text-white px-4 py-2 rounded"> Edit</a>
                                                <a href="{{route('delete', $post->id)}}"
                                                    class="bg-red-600 text-white px-4 py-2 rounded">Delete</a>
                                                <!-- resources/views/index.blade.php -->
                                                <a href="{{ route('post.show', $post->id) }}"
                                                    class="bg-purple-900 text-white px-4 py-2 rounded">
                                                    Show
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mr-[30px] mt-[30px]">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>