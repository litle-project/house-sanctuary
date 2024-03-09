<?php

namespace App\Http\Responses\Dashboard\Auth;

use Illuminate\Contracts\Support\Responsable;

class PageResponse implements Responsable
{
    public function toResponse($request)
    {
        return view('pages.dashboard.auth.login');
    }
}
