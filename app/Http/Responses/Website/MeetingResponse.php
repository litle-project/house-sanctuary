<?php

namespace App\Http\Responses\Website;

use Illuminate\Contracts\Support\Responsable;

class MeetingResponse implements Responsable
{
    public function toResponse($request)
    {
        return view('pages.website.meeting');
    }
}
