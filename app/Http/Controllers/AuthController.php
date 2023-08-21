<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return inertia(
            'Back/Auth/Login'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if(!Auth::attempt($request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string'
        ]),true)){

            throw ValidationException::withMessages([
                'email' => 'Hata.'
            ]);

        }

        $request->session()->regenerate();
        return redirect()->intended('/product');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('homepage');
    }
}
