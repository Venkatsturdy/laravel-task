<?php

namespace App\Http\Controllers\Web;

use App\Helpers\BackendValidation;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginview()
    {
        return view('web.login');
    }
     public function registerview()
    {
        return view('web.register');
    }
    public function login(Request $request)
    {
        // dd('hi');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->route('posts.index')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }
    public function register(Request $request)
    {
        $validate = BackendValidation::UserRegister($request);

        if ($validate['status'] === "error") {
            return back()->withErrors($validate['message'])->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('users', 'public');
            $user->image = $path;
        }

        $user->save();

        return redirect('/login')->with('success', 'Registration successful please login');
    }

}
