<?php

namespace App\Http\Responses\Website;

use Illuminate\Contracts\Support\Responsable;

class HotelResponse implements Responsable
{
    public function toResponse($request)
    {
        return view('pages.website.hotel');
    }
}
