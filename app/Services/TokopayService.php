<?php

namespace App\Services;

require base_path('lib/tokopay.lib.php');

class TokopayService
{
    protected $merchant_id;
    protected $secret_key;

    public function __construct()
    {
        $this->merchant_id = env('TOKOPAY_MERCHANT_ID', 'YOUR_MERCHANT_ID');
        $this->secret_key = env('TOKOPAY_SECRET_KEY', 'YOUR_SECRET_KEY');
    }

    public function createOrder($ref_id, $channel, $amount, $customer_name, $customer_email, $customer_phone, $redirect_url, $items)
    {
        $tokopay = new \Tokopay($this->merchant_id, $this->secret_key);
        $generateSignature = $tokopay->generateSignature($ref_id);
        $data = [
            'merchant_id' => $this->merchant_id,
            'kode_channel' => $channel,
            'reff_id' => $ref_id,
            'amount' => intval($amount),
            'customer_name' => $customer_name,
            'customer_email' => $customer_email,
            'customer_phone' => $customer_phone,
            'redirect_url' => $redirect_url,
            'expired_ts' => 0,
            'signature' => $generateSignature,
            'items' => $items
        ];
        return $tokopay->createAdvanceOrder($data);
    }
}
