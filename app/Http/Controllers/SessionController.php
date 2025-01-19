<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // 
    public function index()
    {
        //
    }

    // 
    public function create()
    {
        return view('auth.login');
    }

    // 
    public function store(Request $request)
    {
        //validate
        $attributes =  request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // attempt to login the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => "Sorry, those credentials do not match"
            ]);
        }

        // regenerate the session and redirect
        request()->session()->regenerate();
        return redirect('/tasks');
    }

    //    
    public function show(User $user)
    {
        //
    }

    // 
    public function edit(User $user)
    {
        //
    }

    // 
    public function update(Request $request, User $user)
    {
        //
    }

    // 
    public function destroy(User $user)
    {
        Auth::logout();
        return redirect('/');
    }
}
