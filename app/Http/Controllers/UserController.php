<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function me()
    {
        $userLogged = Auth::user();

        return response()->json([
            'user' => $userLogged,
        ], Response::HTTP_OK);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLogged = Auth::user();

        $users = User::where('id', '<>', $userLogged->id)->get();

        return response()->json([
            'data' => $users,
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json([
            'user' => $user,
        ], Response::HTTP_OK);
    }
}
