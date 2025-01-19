<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    // Display a listing of the resource.
    public function index() {}

    // Show the form for creating a new resource.
    public function create()
    {
        return view('auth.register');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // validate
        request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'confirmed'],
            'password' => ['required', Password::min(6)]
        ]);

        // user creation
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        // log in
        Auth::login($user);
        // redirect 
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
