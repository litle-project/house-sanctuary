<?php

namespace App\Http\Responses\Dashboard\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Support\Responsable;

class LoginResponse implements Responsable
{
    public function toResponse($request)
    {
        try {
            $valid = $this->validator($request);
            if ($valid->status) return $this->error($valid->error);
            
            return $this->process($request);
        } catch (\Throwable $th) {
            return back()
                ->withInput()
                ->withErrors($th->getMessage());
        }
    }

    protected function validator($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        return (object) [
            'status' => $validator->fails(),
            'error' => $validator
        ];
    }

    function error($messages)
    {
        return back()
            ->withInput()
            ->withErrors($messages);
    }

    protected function process($request)
    {
        $user = User::where('email', $request->email)->firstOrFail();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw new \Exception("Invalid Email or password", 1);
        }

        return true;
    }
}
