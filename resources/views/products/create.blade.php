<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Add Product</title>
</head>
<body class="bg-gray-100 p-10">
@include('layouts.navbar')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow">

    <h1 class="text-3xl font-bold mb-6">
        Add Product
    </h1>

    <form action="{{ route('products.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-5">

        @csrf

        <input type="text"
               name="name"
               placeholder="Product Name"
               class="w-full border p-3 rounded-lg">

        <textarea name="description"
                  placeholder="Description"
                  class="w-full border p-3 rounded-lg"></textarea>

        <input type="number"
               step="0.01"
               name="price"
               placeholder="Price"
               class="w-full border p-3 rounded-lg">

        <input type="file"
               name="image"
               class="w-full border p-3 rounded-lg">

        <button type="submit"
                class="bg-blue-500 text-white px-6 py-3 rounded-lg">
            Save Product
        </button>

    </form>

</div>

</body>
</html>