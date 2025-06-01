<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-purple-700">Crud Operation</h1>
            <ul class="flex space-x-6">
                <li><a href="{{ route('register') }}" class="hover:text-purple-600">Register</a></li>
                <li><a href="{{ route('login') }}" class="hover:text-purple-600">login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="text-purple-950 py-60">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-4xl font-bold mb-4">Welcome to Crud Operation</h2>
            <p class="text-lg mb-6">Create Your Information Post</p>
            <a href="/dashboard" class="bg-white text-purple-950 px-6 py-3 rounded font-semibold hover:bg-gray-100">Get Started</a>
        </div>
    </section>

</body>
</html>
