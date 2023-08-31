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
        $filters = $request->only([
            'category'
        ]);
        
        return inertia(
            'Front/Products/Index',
            [
                'filters' => $filters,
                'categories' => Category::all(),
                'products' => Product::mostRecent()
                ->with(['firstImage'])
                ->filters($filters)
                ->paginate(9)
                ->withQueryString()
            ]
        );
    }   
    
    public function show(Product $product)
    {
        $product->load(['images','category']);
        return inertia(
            'Front/Products/Show',
            [
                'message' => 'This is Show.vue',
                'product' => $product
            ]
        );
    }

}
