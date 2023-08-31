<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function create(Product $product){
        
        $product->load(['images']);
        return inertia(
            'Back/ProductImage/Create',
            ['product' => $product]
        );
    }

    public function store(Product $product, Request $request){
        
        if($request->hasFile('images'))
        {
            $request->validate([
                'images.*' => 'mimes:jpg,png,jpeg,webp|max:6000'
            ],[
                'images.*.mimes' => 'Dosyalar şu formatta olmalıdır : jpg,png,jpeg,webp'
            ]);
            foreach($request->file('images') as $file)
            {
                $path = $file->store('images','public');

                $product->images()->save(new ProductImage([
                    'filename' => $path
                ]));
            }
        }

        return redirect()->back()->with('success', 'Görüntüler yüklendi');

    }

    public function destroy(Product $product, ProductImage $image)
    {
        Storage::disk('public')->delete($image->filename);
        $image->delete();
        return redirect()->back()->with('success', 'Görüntü silindi');
    }
}
