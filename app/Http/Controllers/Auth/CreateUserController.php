<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CreateUserRequest;
use App\Models\User;

class CreateUserController extends Controller
{

    public function __invoke(CreateUserRequest $request)
    {
        //$data = $request->validated();
        
        return response()->json(['test' => 'test'], 201);
    }
}
