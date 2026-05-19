<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::count();
        $categories = Category::count();
        $users = User::count();

        return view('dashboard', compact(
            'products',
            'categories',
            'users'
        ));
    }
}