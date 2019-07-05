<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store(Request $request)
    {
        $remember = $request->rememberme;

        if (auth()->attempt(request(['email', 'password']),$remember) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        return redirect()->to('/posts');
    }

    public function logout()
    {
        auth()->logout();

        return view('sessions.choose');
    }
}
