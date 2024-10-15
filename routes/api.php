<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokopayCallbackController;
use App\Http\Controllers\PaymentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/payment/callback', [TokopayCallbackController::class, 'handle']);

Route::get('/payment/{trx_id}', [PaymentController::class, 'showPayment'])->name('payment');

// Health check route
Route::get('/health', function () {
    return response()->json(['status' => 'OK']);
});