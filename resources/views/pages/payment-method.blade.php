@extends('layouts.app-plain')

@section('title', 'Metode Pembayaran - Tactick')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="row mb-3">Pilih Metode Pembayaran</h1>
                    <h3 class="row mb-1">Bank</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="bri" value="bri"
                                        class="mb-1">
                                    <label for="bri">
                                        <img src="./assets/images/method-logo/logo-bri.png" alt="logo-bri" class=" m-lg-5"
                                            style="width: 150px">
                                        <h3 class="card-title">BRI</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="bca" value="bca"
                                        class="mb-1">
                                    <label for="bca">
                                        <img src="./assets/images/method-logo/logo-bca.png" alt="logo-bca" class="m-lg-4"
                                            style="height: 150px">
                                        <h3 class="card-title">BCA</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="bni" value="bni"
                                        class="mb-1">
                                    <label for="bni">
                                        <img src="./assets/images/method-logo/logo-bni.png" alt="logo-bni" class="m-lg-5"
                                            style="width: 190px">
                                        <h3 class="card-title">BNI</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="mandiri" value="mandiri"
                                        class="mb-1">
                                    <label for="mandiri">
                                        <img src="./assets/images/method-logo/logo-bmandiri.png" alt="logo-mandiri"
                                            class="m-lg-5" style="width: 190px">
                                        <h3 class="card-title">Mandiri</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="bsi" value="bsi"
                                        class="mb-1">
                                    <label for="bsi">
                                        <img src="./assets/images/method-logo/logo-bsi.png" alt="logo-bsi" class="m-lg-5"
                                            style="width: 200px">
                                        <h3 class="card-title">BSI</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="row mb-1">E-Wallet</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="spay" value="spay"
                                        class="mb-1">
                                    <label for="spay">
                                        <img src="./assets/images/method-logo/logo-spay.png" alt="logo-shopeepay"
                                            class="m-lg-5" style="width: 190px">
                                        <h3 class="card-title">Shopee Pay</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="gopay" value="gopay"
                                        class="mb-1">
                                    <label for="gopay">
                                        <img src="./assets/images/method-logo/logo-gopay.png" alt="logo-gopay"
                                            class="m-lg-5" style="width: 160px">
                                        <h3 class="card-title">Gopay</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="dana" value="dana"
                                        class="mb-1">
                                    <label for="dana">
                                        <img src="./assets/images/method-logo/logo-dana.png" alt="logo-dana"
                                            class="m-lg-5" style="width: 220px">
                                        <h3 class="card-title">Dana</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="ovo" value="ovo"
                                        class="mb-1">
                                    <label for="ovo">
                                        <img src="./assets/images/method-logo/logo-ovo.png" alt="logo-ovo" class="m-lg-5"
                                            style="width: 200px">
                                        <h3 class="card-title">OVO</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="row mb-1">Bank</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="qris" value="qris"
                                        class="mb-1">
                                    <label for="qris">
                                        <img src="./assets/images/method-logo/logo-qris.png" alt="logo-ovo"
                                            class="m-lg-5" style="width: 200px">
                                        <h3 class="card-title">QRIS</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="row mb-1">Retail</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="indomaret" value="indomaret"
                                        class="mb-1">
                                    <label for="indomaret">
                                        <img src="./assets/images/method-logo/logo_indomaret.png" alt="logo-indomaret"
                                            class="m-lg-5" style="width: 200px">
                                        <h3 class="card-title">Indomaret</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <input type="radio" name="payment_method" id="alfamart" value="alfamart"
                                        class="mb-1">
                                    <label for="alfamart">
                                        <img src="./assets/images/method-logo/logo_alfamart.png" alt="logo-alfamart"
                                            class="m-lg-5" style="width: 200px">
                                        <h3 class="card-title">Alfamart</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
