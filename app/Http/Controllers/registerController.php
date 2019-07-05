<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Validator;

class registerController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' =>'required|string|max:255',
            'email' =>'required|email|unique:users',
            'password' => 'required|min:8',
            'photo' =>'image|mimes:jpeg,png,jpg'
        ]);

        $user = new User();
        if($request->hasFile('photo'))
        {
            $path = Storage::putFile('users', $request->file('photo'));
            $user->photo = $path ;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = 0;

        Mail::to($request['email'])->send(new WelcomeMail($user));
        $user -> save();

        return redirect()->to('/login');
    }
}
