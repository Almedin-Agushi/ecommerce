<nav class="bg-white dark:bg-gray-800 shadow rounded-xl mb-8 p-4">

    <div class="max-w-6xl mx-auto flex justify-between items-center">

        <h1 class="text-2xl font-bold text-blue-600">
            E-Commerce
        </h1>

        <div class="flex gap-6">

            <a href="/products"
               class="text-gray-700 dark:text-white hover:text-blue-500 font-medium">
                Products
            </a>

            <a href="/products/create"
               class="text-gray-700 dark:text-white hover:text-blue-500 font-medium">
                Add Product
            </a>

            <a href="/dashboard"
               class="text-gray-700 dark:text-white hover:text-blue-500 font-medium">
                Dashboard
            </a>

        </div>
<a href="/cart"
   class="text-gray-700 hover:text-blue-500 font-medium relative">

    🛒 Cart

    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full absolute -top-3 -right-5">

        {{ array_sum(array_column(session('cart', []), 'quantity')) }}

    </span>

</a>
    </div>

</nav>