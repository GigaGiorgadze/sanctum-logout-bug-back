<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        session()->regenerate(true);
        return response()->json(['message' => 'Authenticated'], 200);
    };
    return response()->json(['message' => 'Unauthorized'], 401);
});

Route::get('/me', function () {
    return response()->json(['user' => Auth::user()]);
})->middleware('auth:sanctum');

Route::post('/logout', function () {
    Auth::guard('web')->logout();
    request()->session()->flush();
    return response()->json(['message' => 'Logged out'], 200);
})->middleware('auth:sanctum');
