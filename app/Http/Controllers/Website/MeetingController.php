<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Website\MeetingResponse;

class MeetingController extends Controller
{
    public function index(Request $request)
    {
        return new MeetingResponse;
    }
}
