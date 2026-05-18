<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}">
    <br><br>

    <textarea name="description">{{ $product->description }}</textarea>
    <br><br>

    <input type="number" step="0.01" name="price" value="{{ $product->price }}">
    <br><br>

    <button type="submit">Update Product</button>
</form>