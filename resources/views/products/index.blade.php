<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Products</title>
</head>
<body class="bg-gray-100 p-10">

@include('layouts.navbar')

    <div class="max-w-6xl mx-auto">

        <div class="flex justify-between items-center mb-8">

            <h1 class="text-4xl font-bold">
                Products
            </h1>

            <a href="{{ route('products.create') }}"
               class="bg-blue-500 text-white px-5 py-2 rounded-lg">
                Add Product
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

                <div class="bg-white p-6 rounded-xl shadow">
                      @if($product->image)

                <img src="{{ asset('storage/' . $product->image) }}"
                class="w-full h-40 object-contain rounded-lg mb-4 bg-white">

    @endif
                    <h2 class="text-2xl font-bold mb-2">
                        {{ $product->name }}
                    </h2>

                    <p class="text-gray-600 mb-4">
                        {{ $product->description }}
                    </p>

                    <div class="text-xl font-bold mb-4">
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

                    </div>

                </div>

            @endforeach

        </div>
            <div class="mt-8">
                {{ $products->links() }}
            </div>
    </div>

</body>
</html>