<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokopayCallbackController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/payment/callback', [TokopayCallbackController::class, 'handle']);

// Health check route
Route::get('/health', function () {
    return response()->json(['status' => 'OK']);
});
