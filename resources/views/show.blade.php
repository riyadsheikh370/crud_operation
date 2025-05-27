<!-- resources/views/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud Operation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">
    <div class="max-w-xl mx-auto bg-white shadow-md p-6 rounded">
        <h2 class="text-2xl font-bold mb-4 text-blue-600">{{ $post->name }}</h2>
        <p class="mb-4 text-gray-700">{{ $post->description }}</p>

        @if ($post->image)
            <img src="{{ asset('uploads/'.$post->image) }}" alt="Post Image" class="rounded w-full">
        @endif

        <a href="/" class="mt-5 inline-block bg-green-500 text-white px-4 py-2 rounded">Back</a>
    </div>
</body>
</html>
