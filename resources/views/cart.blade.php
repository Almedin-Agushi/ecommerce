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

    <table class="w-full bg-white rounded-xl shadow overflow-hidden">

    <thead class="bg-gray-200">

        <tr>

            <th class="p-4 text-left">Product</th>
            <th class="p-4">Price</th>
            <th class="p-4">Quantity</th>
            <th class="p-4">Subtotal</th>
            <th class="p-4">Action</th>

        </tr>

    </thead>

    <tbody>

        @php $total = 0; @endphp

        @foreach($cart as $id => $details)

            @php
                $subtotal = $details['price'] * $details['quantity'];
                $total += $subtotal;
            @endphp

            <tr class="border-b">

                <td class="p-4 flex items-center gap-4">

                    <img src="{{ asset('storage/' . $details['image']) }}"
                         class="w-24 h-24 object-contain">

                    <div>

                        <h2 class="text-xl font-bold">
                            {{ $details['name'] }}
                        </h2>

                    </div>

                </td>

                <td class="text-center font-bold">
                    ${{ $details['price'] }}
                </td>

                <td class="text-center">
                    {{ $details['quantity'] }}
                </td>

                <td class="text-center font-bold">
                    ${{ $subtotal }}
                </td>

                <td class="text-center">

                    <form action="{{ route('cart.remove', $id) }}"
                          method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="bg-red-500 text-white px-4 py-2 rounded">
                            Remove
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

    </tbody>

</table>
<div class="text-right mt-6">

    <h2 class="text-3xl font-bold">
        Total: ${{ $total }}
    </h2>

</div>
</div>

</body>
</html>