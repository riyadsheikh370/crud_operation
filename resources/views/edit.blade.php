<!-- resources/views/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <title>Edit Post</title>
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
    <div class="flex-1 px-10 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-blue-500 text-2xl font-bold">Edit - {{ $ourPost->name }}</h2>
            <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
        </div>

        <form method="POST" action="{{ route('update', $ourPost->id) }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md max-w-xl">
            @csrf
            <div class="flex flex-col gap-5">

                <div>
                    <label class="block mb-1 font-semibold">Name</label>
                    <input type="text" name="name" value="{{ $ourPost->name }}" class="w-full border rounded px-3 py-2">
                    @error('name')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Description</label>
                    <input type="text" name="description" value="{{ $ourPost->description }}" class="w-full border rounded px-3 py-2">
                    @error('description')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Select Image</label>
                    <input type="file" name="image" class="w-full">
                    @error('image')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror

                    @if ($ourPost->image)
                        <img src="{{ asset('uploads/' . $ourPost->image) }}" alt="Current Image"
                            class="w-24 h-24 mt-3 rounded border border-gray-300 object-cover">
                    @endif
                </div>

                <div>
                    <input type="submit" value="Update" class="bg-green-600 text-white py-2 px-4 rounded cursor-pointer">
                </div>

            </div>
        </form>
    </div>
</body>

</html>
