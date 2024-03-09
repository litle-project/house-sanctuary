<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Dashboard\Main\MainResponse;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return new MainResponse;
    }
}
