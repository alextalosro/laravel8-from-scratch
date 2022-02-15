<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'goodbye!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt($credentials)){

            return back()
                ->withInput()
                ->withErrors(['email' => 'The provided credentials do not match our records.',
                ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');




    }
}
