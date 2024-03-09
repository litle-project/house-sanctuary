<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Dashboard\Auth\PageResponse;
use App\Http\Responses\Dashboard\Auth\LoginResponse;
use App\Http\Responses\Dashboard\Auth\LogoutResponse;
use App\Http\Requests\Dashboard\Auth\LoginRequest;
use App\Http\Requests\Dashboard\Auth\LogoutRequest;


class AuthController extends Controller
{
    public function page(Request $request)
    {
        return new PageResponse;
    }

    public function login(Request $request)
    {
        return new LoginResponse;
    }

    public function logout(Request $request)
    {
        return new LogoutResponse;
    }
}
