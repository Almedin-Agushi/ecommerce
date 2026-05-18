<h1>Products</h1>

<a href="{{ route('products.create') }}">
    Add Product
</a>

<hr>

@foreach($products as $product)

    <h3>{{ $product->name }}</h3>

    <p>{{ $product->description }}</p>

    <strong>${{ $product->price }}</strong>

    <hr>

    <a href="{{ route('products.edit', $product->id) }}">
    Edit
</a>
<br>  <br>
<form action="{{ route('products.destroy', $product->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit">
        Delete
    </button>

</form>

@endforeach