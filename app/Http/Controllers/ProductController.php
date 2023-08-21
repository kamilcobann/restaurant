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
        Product::create($request->validate([
            'title' => 'required|string|min:1|max:120',
            'description' => 'required|string|min:1',
            'portion_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'kilogram_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        ]));

        return redirect()->route('product.index')->with('success','Ürün başarıyla oluşturuldu');
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

    public function update(Request $request, Product $product)
    {
        $product->update(
            $request->validate([
                'title' => 'required|string|min:1|max:120',
                'description' => 'required|string|min:1',
                'portion_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                'kilogram_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/'
            ])
        );
        return redirect()->route('product.index')->with('success','Ürün başarıyla güncellendi');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()->with('success','Product was deleted');
    }
}
