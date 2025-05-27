<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- Sidebar / Dashboard -->
        <aside class="w-64 bg-purple-900 text-white px-6 py-8 space-y-6">
            <!-- Profile Image -->
            <div class="flex flex-col items-center mb-6">
                <img src="{{ asset('uploads/1748340315.png') }}" alt=""
                    class="w-24 h-24 rounded-full border-4 border-white shadow">
                <span class="mt-3 text-sm font-bold">Admin</span>
            </div>

            <!-- Menu Items -->
            <ul class="space-y-4">
                <li><a href="/" class="block hover:text-purple-300">Home</a></li>
                <li><a href="/create" class="block hover:text-purple-300">Create Post</a></li>
                <li><a href="#" class="block hover:text-purple-300">Settings</a></li>
                <li><a href="#" class="block hover:text-purple-300">Logout</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-purple-900 font-bold text-2xl border-b border-purple-900 pb-2">Home | Data Information
                </h2>
                <a href="/create" class="bg-purple-900 text-white rounded py-2 px-4">Add New Post</a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 border">
                    <thead class="bg-purple-900 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Description</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Image</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($posts as $post)
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $post->id }}</td>
                                <td class="px-6 py-4">{{ $post->name }}</td>
                                <td class="px-6 py-4">{{ $post->description }}</td>
                                <td class="px-6 py-4">
                                    @if ($post->image)
                                        <img src="{{ asset('uploads/' . $post->image) }}" alt="Image"
                                            class="w-16 h-16 object-cover rounded">
                                    @else
                                        <span class="text-gray-400 italic">No image</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <a href="{{ route('post.show', $post->id) }}"
                                        class="bg-purple-900 text-white px-4 py-2 rounded">Show</a>
                                    <a href="{{ route('edit', $post->id) }}"
                                        class="bg-green-600 text-white px-4 py-2 rounded">Edit</a>
                                    <a href="{{ route('delete', $post->id) }}"
                                        class="bg-red-600 text-white px-4 py-2 rounded">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="p-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </main>
    </div>

</body>

</html>