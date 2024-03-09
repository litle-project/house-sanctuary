<?php

namespace App\Http\Responses\Dashboard\Main;

use Illuminate\Contracts\Support\Responsable;

class MainResponse implements Responsable
{
    public function toResponse($request)
    {
        return view('pages.dashboard.main.index');
    }
}
