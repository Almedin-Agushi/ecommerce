<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>E-Commerce</title>
</head>

<body class="bg-gray-100">

@include('layouts.navbar')

<section class="max-w-6xl mx-auto py-24 text-center">

        <h1 class="text-6xl font-bold mb-6">
            Welcome To My Store
        </h1>

        <p class="text-2xl text-gray-600 mb-8">
            Best Phones & Laptops
        </p>

        <a href="/products"
           class="bg-blue-500 text-white px-8 py-4 rounded-xl text-xl">
            Shop Now
        </a>

    </section>

    <section class="max-w-6xl mx-auto py-10">

        <h2 class="text-4xl font-bold mb-10 text-center">
            Categories
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white p-10 rounded-2xl shadow text-center">

                <h3 class="text-3xl font-bold mb-4">
                    Phones
                </h3>

                <a href="/products/category/1"
                   class="bg-blue-500 text-white px-6 py-3 rounded-lg">
                    View Phones
                </a>

            </div>

            <div class="bg-white p-10 rounded-2xl shadow text-center">

                <h3 class="text-3xl font-bold mb-4">
                    Laptops
                </h3>

                <a href="/products/category/2"
                   class="bg-green-500 text-white px-6 py-3 rounded-lg">
                    View Laptops
                </a>

            </div>

        </div>

    </section>

</body>
</html>