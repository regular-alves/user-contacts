<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;

class User extends Controller
{
    public function authenticate(UserLoginRequest $request)
    {

    }

    public function store(UserRegisterRequest $request)
    {

    }
}
