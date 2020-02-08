<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserCreateRequest;

class AuthController extends Controller
{
    public function user()
    {
        return auth()->user();
    }


    public function login(UserLoginRequest $request)
    {
        if(auth()->attempt(['phone' => $request['phone'], 'password' => $request['password']])){
            return auth()->user();
        }
        return response()->json(['password' => trans('auth.failed')],400);
    }

    public function register(UserCreateRequest $request)
    {
        $user = User::create($request->except(['password_confirmation']));
        $user->remember_token = $user->createToken(env('TOKEN_KEY'))->accessToken;
        $user->save();
        return $user;
    }
}
