<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ShowRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function show(ShowRequest $request): JsonResponse
    {
        $user = User::findOrFail($request->id);
        $receiver = $user->receiver;
        $data = [
            'sender' => new UserResource($user),
            'receiver' => new UserResource($receiver)
        ];
        return response()->json($data);
    }
}
