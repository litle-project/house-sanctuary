<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Website\HomeResponse;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return new HomeResponse;
    }
}
