<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function create(Request $request) {
        $user = User::find($request->user()->id);
        $token = $user->createToken('token-name')->plainTextToken;

        return response(['token' => $token], 201);
    }

}
