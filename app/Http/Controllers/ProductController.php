<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        // Mengambil semua data produk dari model Product dengan paginasi
        $products = AllOf::all();
        $products = Product::paginate(10);
    
        // Kirim data produk ke view
        return view('admin.dashboard', compact('products'));
    }
}
