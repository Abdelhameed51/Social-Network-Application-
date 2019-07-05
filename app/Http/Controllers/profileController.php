<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.data', compact('user', $user));
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate(request(), [
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|unique:users,email,'.$user->id,
            'password' => 'required|min:8',
            'photo' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($request->hasFile('photo')) {
            $path = Storage::putFile('users', $request->file('photo'));
            $user->photo = $path;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        Mail::to($request['email'])->send(new WelcomeMail($user));
        $user->save();
        return back()->with("message", "Data updated successfully");;
    }
}
