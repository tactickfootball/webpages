<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Zxing\QrReader;
use App\Models\Payment;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Response;

class PaymentController extends Controller
{
    private $secretKey;

    public function __construct()
    {
        // Store the secret key securely in your .env file
        $this->secretKey = env('QR_CODE_SECRET_KEY', '');
    }

    public function handlePaymentSuccess($ref_id)
    {
        // Add the breadcrumbs
        $breadcrumbs = [
            ['name' => 'Beranda', 'url' => route('index')],
            ['name' => 'Pembayaran', 'url' => url()->current()],
        ];

        // dell this
        // if (Auth::check()) {
        //     $user = Auth::user()->only(['id', 'name', 'email']);
        //     return Response::json(['user' => $user]);
        // } else {
        //     return Response::json(['error' => 'User not authenticated']);
        // }

        // Check data on payment database from ref_id, is it already paid or not
        $payment = Payment::where('reff_id', $ref_id)->first();

        if (!$payment) {
            // Payment record not found
            return response()->json(['error' => 'Payment record not found'], 404);
        }

        if ($payment->status === 'unpaid') {
            // Payment unpaid
            return response()->json(['message' => 'Payment unpaid!'], 200);
        } elseif ($payment->status === 'paid') {
            // Payment is already paid

            // Encrypt and generate HMAC for the data
            $encryptedData = $this->encryptWithHMAC($ref_id);
            // Generate the QR code with the encrypted data
            $qrCode = new QrCode($encryptedData);
            $writer = new PngWriter();
            $qrCodeImage = $writer->write($qrCode);

            // Decrypt the data and validate HMAC
            $qrCodeImagePath = 'assets/images/download.png';
            $qrReader = new QrReader($qrCodeImagePath);
            $scannedData = $qrReader->text();  // Extract the text from the QR code (this is the encrypted data)
            if ($scannedData !== null) {
                // Decrypt the scanned data
                $decryptedData = $this->decryptWithHMAC($scannedData);
            } else {
                echo 'Could not decode QR code.';
            }
        }

        // Return the view with the QR code
        return view('pages.payment-success', ['qrCode' => $qrCodeImage->getDataUri(), 'breadcrumbs' => $breadcrumbs]);
    }

    // Function to encrypt the data and generate HMAC
    private function encryptWithHMAC($data)
    {
        $cipher = 'aes-256-cbc';
        $iv = random_bytes(openssl_cipher_iv_length($cipher));
        $encryptedData = openssl_encrypt($data, $cipher, $this->secretKey, 0, $iv);
        $hmac = hash_hmac('sha256', $encryptedData, $this->secretKey);
        $encodedData = base64_encode($encryptedData . '::' . $iv . '::' . $hmac);
        return $encodedData;
    }

    // Function to decrypt the data and validate HMAC
    private function decryptWithHMAC($data)
    {
        try {
            $cipher = 'aes-256-cbc';
            $decodedData = base64_decode($data);
            list($encrypted, $iv, $hmac) = explode('::', $decodedData, 3);
            $calculatedHmac = hash_hmac('sha256', $encrypted, $this->secretKey);

            // Verify HMAC integrity
            if (!hash_equals($calculatedHmac, $hmac)) {
                throw new \Exception("QR Code data has been tampered with.");
            }

            return openssl_decrypt($encrypted, $cipher, $this->secretKey, 0, $iv);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // // Function to encrypt the data and generate HMAC
    // private function encryptWithHMAC($data)
    // {
    //     $cipher = 'aes-256-cbc';
    //     $iv = random_bytes(openssl_cipher_iv_length($cipher));
    //     echo 'IV: ' . base64_encode($iv) . '<br>';
    //     $encryptedData = openssl_encrypt($data, $cipher, $this->secretKey, 0, $iv);
    //     echo 'Encrypted Data: ' . $encryptedData . '<br>';
    //     $hmac = hash_hmac('sha256', $encryptedData, $this->secretKey);
    //     echo 'HMAC: ' . $hmac . '<br>';
    //     return base64_encode($encryptedData . '::' . $iv . '::' . $hmac);
    // }

    // // Function to decrypt the data and validate HMAC
    // private function decryptWithHMAC($encryptedData)
    // {
    //     try {
    //         $cipher = 'aes-256-cbc';
    //         // dd($encryptedData);
    //         list($encrypted, $iv, $hmac) = explode('::', base64_decode($encryptedData), 3);
    //         $calculatedHmac = hash_hmac('sha256', $encrypted, $this->secretKey);

    //         // Verify HMAC integrity
    //         if (!hash_equals($calculatedHmac, $hmac)) {
    //             throw new \Exception("QR Code data has been tampered with.");
    //         }

    //         return openssl_decrypt($encrypted, $cipher, $this->secretKey, 0, $iv);
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }
}