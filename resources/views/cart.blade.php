<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Cart</title>
</head>
<body class="bg-gray-100 p-10">

@include('layouts.navbar')

<div class="max-w-5xl mx-auto">

    <h1 class="text-4xl font-bold mb-8">
        Shopping Cart
    </h1>

    @foreach($cart as $id => $details)

        <div class="bg-white p-6 rounded-xl shadow mb-4 flex items-center gap-6">

            <img src="{{ asset('storage/' . $details['image']) }}"
                 class="w-24 h-24 object-contain">

            <div>

                <h2 class="text-2xl font-bold">
                    {{ $details['name'] }}
                </h2>

                <p class="text-gray-600">
                    Qty: {{ $details['quantity'] }}
                </p>

                <p class="text-xl font-bold mt-2">
                    ${{ $details['price'] }}
                </p>

            </div>

        </div>

    @endforeach

</div>

</body>
</html>