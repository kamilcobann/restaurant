<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    public function create()
    {
        return inertia(
            'Back/Auth/Create'
        );
    }

    public function store(Request $request)
    {
        $user = User::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'phone' => 'required|min:10|max:11|numeric'
        ]));

        Auth::login($user);
        return redirect()->route('product.index')->with('success','Account Created!');
    }
}
