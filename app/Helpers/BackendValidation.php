<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class BackendValidation
{
    public static function returnValidation($validate)
    {
        if ($validate->fails()) {
            return ['status' => 'error', 'message' => $validate->errors()->first()];
        } else {
            return ['status' => 'success'];
        }
    }

    public static function UserRegister($request, $type = 'register')
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'required|min:6',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ];

        if ($type === 'update') {
            $userId = $request->user()->id ?? null;

            $rules['email'] = 'nullable|email|unique:users,email,' . $userId;
            $rules['password'] = 'nullable|min:6';
            $rules['image'] = 'nullable|image|mimes:jpg,jpeg,png|max:2048';
        }

        $validate = Validator::make($request->all(), $rules);
        return self::returnValidation($validate);
    }

    public static function login($request)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );


        return self::returnValidation($validate);
    }

    public static function poststore($request)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'content' => 'required',
            ]
        );


        return self::returnValidation($validate);
    }
    public static function comment($request)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'post_id' => 'required',
                'comment' => 'required',
            ]
        );


        return self::returnValidation($validate);
    }
}
