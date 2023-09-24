<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return inertia(
            'Back/Category/Index',
            [
                'categories'=>Category::withTrashed()->withCount('products')->paginate(10)
            ]
        );
    }

    public function show(Category $category){
        return  inertia(
            'Back/Category/Show',
            [
                'category' => $category
            ]
        );
    }

    public function create(){
        return inertia(
            'Back/Category/Create'
        );
    }
    public function store(Request $request){

        Category::create($request->validate([
            'name' => 'required|string|min:1|max:100'
        ]));

        return redirect()->route('admin.category.index')->with('success','Kategori başarıyla oluşturuldu');
    }

    public function update(Request $request, Category $category){


        $category->update(
            $request->validate([
                'name' => 'required|string|min:1|max:100'
            ])
            );
            return redirect()->route('admin.category.index')->with('success','Kategori başarıyla güncellendi');
        }

    public function edit(Category $category){
        return inertia(
            'Back/Category/Edit',
            [
                'category' => $category
            ]
        );
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->deleteOrFail();

        return redirect()->back()->with('success','Kategori başarıyla silindi');

    }

    public function restore(Category $category)
    {
        $category->restore();
        return redirect()->back()->with('success','Ürün listeye geri eklendi');
    }
}
