<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Products</title>
</head>
<body class="bg-gray-100 dark:bg-gray-900 p-10">

@include('layouts.navbar')

    <div class="max-w-6xl mx-auto">

        <div class="flex justify-between items-center mb-8">

           <h1 class="text-4xl font-bold text-black dark:text-white">
                Products
            </h1>

            <a href="{{ route('products.create') }}"
               class="bg-blue-500 text-white px-5 py-2 rounded-lg">
                Add Product
            </a>

        </div>
<div class="flex gap-3 mb-6">

    <a href="{{ route('products.index') }}"
       class="bg-gray-300 px-4 py-2 rounded">
        All
    </a>

    <a href="{{ route('products.category', 1) }}"
       class="bg-blue-500 text-white px-4 py-2 rounded">
        Phones
    </a>

    <a href="{{ route('products.category', 2) }}"
       class="bg-green-500 text-white px-4 py-2 rounded">
        Laptops
    </a>

</div>
            <form action="{{ route('products.index') }}"
      method="GET"
      class="mb-6">

    <input type="text"
           name="search"
           placeholder="Search products..."
           class="w-1/2 border p-3 rounded-lg">

</form>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach($products as $product)

                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                      @if($product->image)

                <img src="{{ asset('storage/' . $product->image) }}"
                class="w-full h-40 object-contain rounded-lg mb-4 bg-white">

    @endif
                    <h2 class="text-2xl font-bold mb-2 text-black dark:text-white">
                        {{ $product->name }}
                    </h2>

                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        {{ $product->description }}
                    </p>

                    <div class="text-xl font-bold mb-4 text-black dark:text-white">
                        ${{ $product->price }}
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('products.edit', $product->id) }}"
                           class="bg-yellow-400 px-4 py-2 rounded">
                            Edit
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded">
                                Delete
                            </button>

                        </form>
                        <form action="{{ route('cart.add', $product->id) }}"
                        method="POST">

                        @csrf

                        <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded">
                            Add To Cart
                        </button>

                    </form>
                    </div>
                    
                </div>
                
            @endforeach

        </div>
            <div class="mt-8">
                {{ $products->links() }}
            </div>
    </div>

</body>

<script>
    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
    }
</script>
</html>