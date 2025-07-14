<?php

namespace App\Http\Controllers\User;

use App\Helpers\BackendValidation;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = BackendValidation::UserRegister($request);

        if ($validate['status'] == "error") {
            return response()->json(['status' => 'error', 'message' => $validate['message']], 400);
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
        return response()->json(['status' => 'success', 'message' => 'registration successfull', 'user' => $user], 200);
    }
    public function login(Request $request)
    {

        $validate = BackendValidation::login($request);

        if ($validate['status'] == "error") {
            return response()->json(['status' => 'error', 'message' => $validate['message']], 400);
        }


        $user = User::where('email', $request->email)->first();


        if ($user && Hash::check($request->password, $user->password)) {

            $user->tokens()->delete();
            $token = $user->createToken($user->email);

            return response()->json([
                'status' => 'success',
                'message' => "The email and Password Has Been Verified",
                'admin' => $user,
                'token' => $token->plainTextToken,
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "Please check your email or password"
            ], 400);
        }
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $validate = BackendValidation::UserRegister($request, 'update');
        if ($validate['status'] == "error") {
            return response()->json(['status' => 'error', 'message' => $validate['message']], 400);
        }

        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('image')) {
            if ($user->image && Storage::disk('public')->exists($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
            $path = $request->file('image')->store('users', 'public');
            $user->image = $path;
        }
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Profile updated successfully',
            'user' => $user,
        ]);
    }
}
