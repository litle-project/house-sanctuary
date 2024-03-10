<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Dashboard\Banner\BannerResponse;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        return new BannerResponse;
    }

    public function add(Request $request)
    {
        return new BannerAddResponse;
    }

    public function create(Request $request)
    {
        return new BannerCreateResponse;
    }

    public function edit(Request $request, $id)
    {
        return new BannerEditResponse($id);
    }

    public function update(Request $request, $id)
    {
        return new BannerUpdateResponse($id);
    }

    public function delete($id)
    {
        return new BannerDeleteResponse($id);
    }
}
