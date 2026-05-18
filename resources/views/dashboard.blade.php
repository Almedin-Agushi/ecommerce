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

        <h1 class="text-4xl font-bold mb-8">
            Dashboard
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-2xl font-bold">
                    Products
                </h2>

                <p class="text-gray-500 mt-2">
                    Manage all products
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-2xl font-bold">
                    Orders
                </h2>

                <p class="text-gray-500 mt-2">
                    View customer orders
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-2xl font-bold">
                    Users
                </h2>

                <p class="text-gray-500 mt-2">
                    Manage users
                </p>
            </div>

        </div>

    </div>

</body>
</html>