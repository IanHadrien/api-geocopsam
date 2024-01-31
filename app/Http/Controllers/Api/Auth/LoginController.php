<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        if(!auth()->attempt($data)) {
            abort(401, 'Invalid credentials');
        }

        $token = auth()->user()->createToken('auth_token');
        // $roles = auth()->user()->getRoles()->toArray();

        return response()->json([
            'token' => $token->plainTextToken,
            // 'roles' => $roles,
            'user' => auth()->user(),
        ]);
    }

    // public function logout(Request $request)
    // {
    //     auth()->user()->TwoFactorCode()->delete();
    //     $request->user()->currentAccessToken()->delete();

    //     return response()->json([], 204);
    // }
}
