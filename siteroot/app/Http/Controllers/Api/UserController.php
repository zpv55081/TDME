<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Получить список всех пользователей с их ролями.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = User::with('roles')->get();
        return response()->json($users);
    }

    /**
     * Получить данные одного пользователя по ID с его ролями.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $user = User::with('roles')->findOrFail($id);
        return response()->json($user);
    }
}
