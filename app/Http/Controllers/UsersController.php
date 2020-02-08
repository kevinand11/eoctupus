<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserCreateRequest;

class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request->except(['password_confirmation']));
        $user->remember_token = $user->createToken(env('TOKEN_KEY'))->accessToken;
        $user->save();
        return $user;
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        return $user->update($request->all());
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }
}
