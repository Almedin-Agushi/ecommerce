<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index(Request $request)
{
    $search = $request->search;

    $products = Product::query();

    if ($search) {
        $products->where('name', 'like', "%{$search}%");
    }

    $products = $products->paginate(6);

    return view('products.index', compact('products'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $imagePath = null;

    if ($request->hasFile('image')) {

        $imagePath = $request->file('image')
            ->store('products', 'public');
    }

 Product::create([
    'name' => $request->name,
    'description' => $request->description,
    'price' => $request->price,
    'stock' => $request->stock,
    'image' => $imagePath,
    'category_id' => $request->category_id,
]);

    return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         $product->update($request->all());

        return redirect('/products');
    }
public function category($id)
{
    $products = Product::where('category_id', $id)->paginate(6);

    return view('products.index', compact('products'));
}
public function cart()
{
    $cart = session()->get('cart', []);

    return view('cart', compact('cart'));
}

   public function addToCart($id)
{
    $product = Product::findOrFail($id);

    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {

        if($cart[$id]['quantity'] < $product->stock) {

            $cart[$id]['quantity']++;

        }

    } else {

        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "image" => $product->image,
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back();
}
public function removeCart($id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {

        unset($cart[$id]);

        session()->put('cart', $cart);
    }

    return redirect()->back();
}
    public function destroy(Product $product)
    {
         $product->delete();

    return redirect('/products');
    }
}
