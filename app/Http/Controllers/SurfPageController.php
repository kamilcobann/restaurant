<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurfPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user());
        return inertia(
            'Front/Customer/Index',
            [
                'products' => Product::with('firstImage')->get(),
            ]
        );
    }


}
