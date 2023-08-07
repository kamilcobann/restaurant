<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return inertia(
            'Front/Products/Index',
            [
                'message' => 'This is Index.vue',
                'products' => Product::all(),
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

    public function create()
    {
        return inertia(
            'Back/Products/Create',
            [
                'message' => 'This is Create.vue'
            ]
        );
    }

    public function store(Request $request)
    {

    }

    public function edit(Product $product)
    {
        return inertia(
            'Back/Products/Edit',
            [
                'message' => 'This is Edit.vue',
                'product' => $product
            ]
        );
    }

    public function update()
    {
        
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()->with('success','Product was deleted');
    }
}
