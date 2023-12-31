<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        $filters = $request->only([
            'category'
        ]);
        return inertia(
            'Back/Products/Index',
            [
                'filters' => $filters,
                'categories' => Category::all(),
                'products' => Product::withTrashed()->filters($filters)->paginate(8)->withQueryString()
            ]
            );
    }

    public function show(Product $product)
    {
        return inertia(
            'Back/Products/Show',
            [
                'product' => $product
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia(
            'Back/Products/Create',
            [
                'categories' => Category::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->validate([
            'title' => 'required|string|min:1|max:120',
            'description' => 'required|string|min:1',
            'portion_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'kilogram_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'category'=>'required|int'
        ]));

        return redirect()->route('admin.product.index')->with('success','Ürün başarıyla oluşturuldu');

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return inertia(
            'Back/Products/Edit',
            [
                'message' => 'This is Edit.vue',
                'product' => $product,
                'categories' => Category::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update(
            $request->validate([
                'title' => 'required|string|min:1|max:120',
                'description' => 'required|string|min:1',
                'portion_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                'kilogram_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                'category'=>'required|int'
            ])
        );
        return redirect()->route('admin.product.index')->with('success','Ürün başarıyla güncellendi');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->deleteOrFail();

        return redirect()->back()->with('success','Ürün başarıyla silindi');

    }

    public function restore(Product $product)
    {
        $product->restore();
        return redirect()->back()->with('success','Ürün listeye geri eklendi');
}
}
