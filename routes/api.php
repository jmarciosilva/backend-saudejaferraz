<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {

    return response()->json([
        'success' => true,
        'message' => 'API SaúdeJá Ferraz online.',
    ]);

});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');