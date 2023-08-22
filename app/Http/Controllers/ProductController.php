<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // dd(Auth::user());
        return inertia(
            'Front/Products/Index',
            [
                'message' => 'This is Index.vue',
                'products' => Product::all(),
                // 'user' => Auth::user(),
            ]
        );
    }   
    
    public function show(Product $product)
    {
        return inertia(
            'Front/Products/Show',
            [
                'message' => 'This is Show.vue',
                'product' => $product
            ]
        );
    }

}
