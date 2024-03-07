<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Website\WeedingResponse;

class WeedingController extends Controller
{
    public function index(Request $request)
    {
        return new WeedingResponse;
    }
}
