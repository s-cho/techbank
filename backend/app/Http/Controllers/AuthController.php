<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        $credentials = request(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

        // if(!$token = auth()->attempt($request->only(['email', 'password'])))
        // {
        //     return response()->json([
        //         'errors' => [
        //             'email' => ['There is something wrong! We could not verify details']
        //     ]], 422);
        // }

        // return (new UserResource($request->user()))->additional([
        //     'meta' => [
        //         'token' => $token
        //     ]
        // ]);
    }

    public function user(Request $request)
    {   
        return new UserResource($request->user());
    }

    public function logout()
    {
        auth()->logout();
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth("api")->factory()->getTTL() * 60
        ]);
    }

}