<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body class="bg-gray-100 p-10">

    @include('layouts.navbar')

    <div class="max-w-6xl mx-auto">

       <div class="p-10 bg-gray-100 dark:bg-gray-900 min-h-screen">

    <h1 class="text-4xl font-bold mb-8 text-black dark:text-white">
        Dashboard
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-blue-500 dark:bg-blue-700 text-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-bold">
                Total Products
            </h2>

            <p class="text-4xl mt-4">
                {{ $products }}
            </p>
        </div>

        <div class="bg-green-500 text-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-bold">
                Total Categories
            </h2>

            <p class="text-4xl mt-4">
                {{ $categories }}
            </p>
        </div>

        <div class="bg-purple-500 text-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-bold">
                Total Users
            </h2>

            <p class="text-4xl mt-4">
                {{ $users }}
            </p>
        </div>

    </div>

</div>

        
</body>
</html>