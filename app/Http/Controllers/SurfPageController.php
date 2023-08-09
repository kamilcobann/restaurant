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
        return inertia(
            'Front/Customer/Index',
            [
                'products' => Product::all(),
            ]
        );
    }

    public function hello()
    {

        return inertia(
            'Front/Pages/Customer/Index'
        );
    }

}
