<?php

namespace App\Http\Controllers;

use App\Services\TokopayService;
use App\Http\Controllers\PaymentController;
use App\Models\Payment;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;

class TokopayCallbackController extends Controller
{
    protected $merchant_id;
    protected $secret_key;
    protected $tokopayService;
    protected $paymentController;

    public function __construct(TokopayService $tokopayService, PaymentController $paymentController)
    {
        Log::debug('Webhook controller constructor called');
        $this->merchant_id = env('TOKOPAY_MERCHANT_ID', '');
        $this->secret_key = env('TOKOPAY_SECRET_KEY', '');
        $this->tokopayService = $tokopayService;
        $this->paymentController = $paymentController;
    }


    public function handle(Request $request)
    {
        Log::debug('Webhook handle method called');

        // $user = Auth::user();
        // DB::beginTransaction();

        $json = $request->getContent();
        $data = json_decode($json, true);

        // Log the webhook data for debugging
        Log::debug('Webhook received:', $data);

        if (isset($data['status'], $data['reff_id'], $data['signature'])) {
            Log::debug('Webhook data contains required fields');

            $status = $data['status'];
            if ($status === "Success") {
                //hanya proses yg status transaksi sudah di bayar, sukses = dibayar
                $reff_id = $data['reff_id'];
                /*
                 * Validasi Signature
                 */
                $signature_from_tokopay = $data['signature'];
                $signature_validasi = md5($this->merchant_id . ":" . $this->secret_key . ":" . $reff_id);
                if ($signature_from_tokopay === $signature_validasi) {
                    Log::debug('Signature validation passed');
                    /*
                     * Silahkan lakukan action di website kamu, misal memproses orderan, deposit, dll
                     * gunakan $reff_id sebagai data referensi di database web kamu
                     * data reff_id ini merupakan data yang kamu kirimkan di saat create order
                     */
                    // $this->paymentController->handlePaymentSuccess($reff_id);

                    // Find the payment record using reff_id
                    $payment = Payment::where('reff_id', $reff_id)->first();
                    $ticket = $payment->ticket;

                    if ($payment) {
                        // Update the payment status to 'paid'
                        $payment->status = 'paid';
                        $payment->save();

                        Log::debug('Webhook processed successfully for reff_id:', ['reff_id' => $reff_id]);
                    } else {
                        Log::error('Payment record not found for reff_id:', ['reff_id' => $reff_id]);
                        return Response::json(['error' => "Payment record not found"]);
                    }

                    return Response::json(['status' => true]);
                } else {
                    Log::error('Invalid Signature:', ['received' => $signature_from_tokopay, 'expected' => $signature_validasi]);
                    return Response::json(['error' => "Invalid Signature"]);
                }
            } else {
                Log::error('Payment status not success:', ['status' => $status]);
                return Response::json(['error' => "Status payment tidak success"]);
            }
        } else {
            Log::error('Invalid JSON data:', $data);
            return Response::json(['error' => "Data json tidak sesuai"]);
        }
    }
}
