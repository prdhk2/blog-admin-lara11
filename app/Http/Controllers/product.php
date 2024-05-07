<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dari model Product
        $products = Product::all();

        // Kirim data produk ke view
        return view('product.index', compact('products'));
    }
}

