<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Website\DealResponse;

class DealController extends Controller
{
    public function index(Request $request)
    {
        return new DealResponse;
    }
}
