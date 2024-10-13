<?php
class Tokopay
{
    public $merchantId = 'YOUR_MERCHANT_ID';
    public $secretKey = 'YOUR_SECRET_KEY';
    public $apiUrl = "https://api.tokopay.id";

    public function __construct($merchantId, $secretKey)
    {
        $this->merchantId = env('TOKOPAY_MERCHANT_ID', '');
        $this->secretKey = env('TOKOPAY_SECRET_KEY', '');
    }

    public function generateSignature($refId)
    {
        //signature formula md5(merchant_id:secret:ref_id)
        $formula = $this->merchantId . ":" . $this->secretKey . ":" . $refId;
        $signatureTrx = md5($formula);
        return $signatureTrx;
    }

    public function createOrder($nominal, $ref_id, $kodeChannel)
    {
        //this simple order, referece to api docs https://docs.tokopay.id/order/create-order-simple
        $mid = $this->merchantId;
        $secret = $this->secretKey;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiUrl . "/v1/order?merchant=$mid&secret=$secret&ref_id=$ref_id&nominal=$nominal&metode=$kodeChannel",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function createAdvanceOrder($data = [])
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiUrl . '/v1/order',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}