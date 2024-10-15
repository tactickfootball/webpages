<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TokopayService;

class TokopayController extends Controller
{
    protected $tokopayService;

    public function __construct(TokopayService $tokopayService)
    {
        $this->tokopayService = $tokopayService;
    }

    public function createOrder(Request $request)
    {
        $validated = $request->validate([
            'ref_id' => 'required|string',
            'channel' => 'required|string',
            'amount' => 'required|numeric',
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'redirect_url' => 'required|url',
            'items' => 'required|array',
        ]);

        $response = $this->tokopayService->createOrder(
            $validated['ref_id'],
            $validated['channel'],
            $validated['amount'],
            $validated['customer_name'],
            $validated['customer_email'],
            $validated['customer_phone'],
            $validated['redirect_url'],
            $validated['items']
        );

        // Store the transaction ID in the session
        session(['trx' => $response]);

        return response()->json($response);
    }
}
