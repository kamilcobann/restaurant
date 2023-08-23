<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return inertia('Back/Category/Index');
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
    
    public function destroy(Category $category){
        $category->delete();

        return redirect()->back()->with('success','Kategori başarıyla silindi');
    }
}
