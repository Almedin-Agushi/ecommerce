<h1>Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Product Name">
    <br><br>

    <textarea name="description" placeholder="Description"></textarea>
    <br><br>

    <input type="number" step="0.01" name="price" placeholder="Price">
    <br><br>

    <button type="submit">Save Product</button>
</form>