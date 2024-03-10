<?php

namespace App\Http\Responses\Dashboard\Banner;

use App\Models\Banner;
use Illuminate\Contracts\Support\Responsable;

class BannerResponse implements Responsable
{
    public function toResponse($request)
    {
        try {
            return view('pages.dashboard.banner.view', [
                'data' => $this->data($request),
            ]);
        } catch (\Throwable $th) {
            return back()
                ->withInput()
                ->withErrors($th->getMessage());
        }
    }


    protected function data($request)
    {
        return Banner::all();
    }
}
