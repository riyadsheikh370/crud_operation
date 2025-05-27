<!-- resources/views/show.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crud Operation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 h-screen bg-purple-900 text-white px-6 py-8 space-y-6">
        <!-- Profile Image -->
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('uploads/1748340315.png') }}" alt="Profile"
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
    <div class="flex-1 p-7 ml-[20%]">
        <div class="max-w-xl bg-white shadow-md p-6 rounded">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">{{ $post->name }}</h2>
            <p class="mb-4 text-gray-700">{{ $post->description }}</p>

            @if ($post->image)
                <img src="{{ asset('uploads/' . $post->image) }}" alt="Post Image" class="rounded h-[500px] w-full">
            @else
                <p class="text-gray-400 italic">No image available</p>
            @endif

            <a href="/" class="mt-5 inline-block bg-green-500 text-white px-4 py-2 rounded">Back</a>
        </div>
    </div>

</body>

</html>