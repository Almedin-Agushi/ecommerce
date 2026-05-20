<nav class="bg-white dark:bg-gray-800 shadow rounded-xl mb-8 p-4">

    <div class="max-w-6xl mx-auto flex justify-between items-center">

        <h1 class="text-2xl font-bold text-blue-600">
            E-Commerce
        </h1>

        <div class="flex gap-6 items-center">
  @auth
            <a href="/"
               class="text-gray-700 dark:text-white hover:text-blue-500 font-medium">
                Home
            </a>

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

                <a href="/cart"
               class="text-gray-700 dark:text-white hover:text-blue-500 font-medium relative">

                🛒 Cart

                <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full absolute -top-3 -right-5">

                    {{ array_sum(array_column(session('cart', []), 'quantity')) }}

                </span>

            </a>
                <form method="POST"   action="{{ route('logout') }}">
                    
                @csrf

                    <button type="submit" class="text-black bg-red-500 hover:bg-red-700 hover:text-white transition duration-300 rounded-lg p-1 font-medium">
                        Logout
                    </button>

                </form>

            @else
            

                <a href="{{ route('login') }}"
                   class="text-gray-700 dark:text-white hover:text-blue-500 font-medium">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                    Register
                </a>

            @endauth

        </div>

    </div>

</nav>