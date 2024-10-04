<?php

namespace App\Http\Controllers;

use App\Services\TokopayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Invoice;

class TokopayCallbackController extends Controller
{
    protected $merchant_id;
    protected $secret_key;
    protected $tokopayService;

    public function __construct(TokopayService $tokopayService)
    {
        $this->merchant_id = env('TOKOPAY_MERCHANT_ID', '');
        $this->secret_key = env('TOKOPAY_SECRET_KEY', '');
        $this->tokopayService = $tokopayService;
    }


    public function handle(Request $request)
    {
        $json = $request->getContent();
        $data = json_decode($json, true);
        if (isset($data['status'], $data['reff_id'], $data['signature'])) {
            $status = $data['status'];
            if ($status === "Success") {
                //hanya proses yg status transaksi sudah di bayar, sukses = dibayar
                $ref_id = $data['reff_id'];
                /*
                     * Validasi Signature
                     */
                $signature_from_tokopay = $data['signature'];
                $signature_validasi = md5($this->merchant_id . ":" . $this->secret_key . ":" . $ref_id);
                if ($signature_from_tokopay === $signature_validasi) {
                    /*
                         * Silahkan lakukan action di website kamu, misal memproses orderan, deposit, dll
                         * gunakan $ref_id sebagai data referensi di database web kamu
                         * data ref_id ini merupakan data yang kamu kirimkan di saat create order
                         */
                    return Response::json(['status' => true]);
                } else {
                    return Response::json(['error' => "Invalid Signature"]);
                }
            } else {
                return Response::json(['error' => "Status payment tidak success"]);
            }
        } else {
            return Response::json(['error' => "Data json tidak sesuai"]);
        }
    }
}
