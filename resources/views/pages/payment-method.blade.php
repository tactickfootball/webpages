@extends('layouts.app-plain')

@section('title', 'Metode Pembayaran - Tactick')

@section('content')
<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container">

        <div class="card">
            <div class="card-body mx-3 my-2">
                <h4 class="card-title">Metode Pembayaran</h4>
                <p class="card-text">Pilih metode pembayaran yang akan digunakan</p>
                <div class="d-flex gap-4">
                    <!-- Grid for Bank Cards -->
                    <div class="col-5">

                        <div class="d-flex flex-column gap-3">
                            <h5>Bank Cards</h5>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('bni').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="bni"
                                            value="bni">
                                        <img src="./assets/images/method-logo/logo-bni.png" alt="BNI" class="img-fluid">
                                        <label class="form-check-label" for="bni">BNI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('bsi').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="bsi"
                                            value="bsi">
                                        <img src="./assets/images/method-logo/logo-bsi.png" alt="BSI" class="img-fluid">
                                        <label class="form-check-label" for="bsi">BSI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('bca').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="bca"
                                            value="bca">
                                        <img src="./assets/images/method-logo/logo-bca.png" alt="BCA" class="img-fluid">
                                        <label class="form-check-label" for="bca">BCA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body"
                                    onclick="document.getElementById('mandiri').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="mandiri"
                                            value="mandiri">
                                        <img src="./assets/images/method-logo/logo-bmandiri.png" alt="Mandiri"
                                            class="img-fluid">
                                        <label class="form-check-label" for="mandiri">Mandiri</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('bri').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="bri"
                                            value="bri">
                                        <img src="./assets/images/method-logo/logo-bri.png" alt="BRI" class="img-fluid">
                                        <label class="form-check-label" for="bri">BRI</label>
                                    </div>
                                </div>
                            </div>
                            <h5>Retail</h5>
                            <div class="custom-card">
                                <div class="custom-card-body"
                                    onclick="document.getElementById('alfamart').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="alfamart"
                                            value="alfamart">
                                        <img src="./assets/images/method-logo/logo_alfamart.png" alt="Alfamart"
                                            class="img-fluid">
                                        <label class="form-check-label" for="alfamart">Alfamart</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body"
                                    onclick="document.getElementById('indomaret').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="indomaret"
                                            value="indomaret">
                                        <img src="./assets/images/method-logo/logo_indomaret.png" alt="Indomaret"
                                            class="img-fluid">
                                        <label class="form-check-label" for="indomaret">Indomaret</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid for E-Wallet Options -->
                    <div class="col-5">

                        <div class="d-flex flex-column gap-3">
                            <h5>E-Wallet</h5>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('qris').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="qris"
                                            value="qris">
                                        <img src="./assets/images/method-logo/logo-qris.png" alt="QRIS"
                                            class="img-fluid">
                                        <label class="form-check-label" for="qris">QRIS</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('spay').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="spay"
                                            value="spay">
                                        <img src="./assets/images/method-logo/logo-spay.png" alt="Spay"
                                            class="img-fluid">
                                        <label class="form-check-label" for="spay">Spay</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('ovo').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="ovo"
                                            value="ovo">
                                        <img src="./assets/images/method-logo/logo-ovo.png" alt="OVO" class="img-fluid">
                                        <label class="form-check-label" for="ovo">OVO</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body" onclick="document.getElementById('dana').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="dana"
                                            value="dana">
                                        <img src="./assets/images/method-logo/logo-dana.png" alt="DANA"
                                            class="img-fluid">
                                        <label class="form-check-label" for="dana">DANA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card">
                                <div class="custom-card-body"
                                    onclick="document.getElementById('gopay').checked = true;">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="gopay"
                                            value="gopay">
                                        <img src="./assets/images/method-logo/logo-gopay.png" alt="GoPay"
                                            class="img-fluid">
                                        <label class="form-check-label" for="gopay">GoPay</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .custom-card {
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                        overflow: hidden;
                        background-color: #fff;
                        cursor: pointer;
                        height: 60px;
                    }

                    .custom-card-body {
                        padding: 10px;
                        cursor: pointer;
                        transition: background-color 0.3s, transform 0.2s;
                        height: 100%;
                        display: flex;
                        align-items: center;
                        transform: translateY(0);
                    }

                    .custom-card-body:hover {
                        background-color: #f5f5f5;
                        transform: translateY(-2px);
                    }

                    .custom-card-body:active {
                        background-color: #e0e0e0;
                        transform: translateY(1);
                    }

                    .form-check {
                        display: flex;
                        align-items: center;
                    }

                    .form-check img {
                        margin: 0px 10px;
                        width: 50px;
                    }

                    .form-check-label {
                        margin-left: 5px;
                    }
                </style>

            </div>
        </div>
    </div>
    @endsection