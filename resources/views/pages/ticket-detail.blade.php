@extends('layouts.app-plain')

@section('title', 'Detail Ticket - Tactick')

@section('content')
    <!-- Page Content  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('partials.breadcrumb')
            </div>
            <div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Data Diri</h4>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" placeholder="3578xxxxxxxx"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_hp" placeholder="62xxx-xxxx-xxxx"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="nama@gmail.com"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="email" placeholder="mm/dd/yyyy"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-5 d-flex align-items-md-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="male">
                                    <label class="form-check-label" for="male">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Pertandingan</h4>
                        <p><strong>Nama:</strong> {{ $matches->name }}</p>
                        <p><strong>Description:</strong> {{ $matches->description }}</p>
                        <p><strong>Venue:</strong> {{ $matches->venue }}</p>
                        <p><strong>Hari:</strong> {{ $matches->date }}</p>
                        <p><strong>Waktu:</strong> {{ $matches->time }}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="card-title">Informasi Tiket</h4>
                            <label for="ticket_type" class="col-sm-2 col-form-label">Tempat Duduk</label>
                            <div class="col-sm-4">
                                <select class="form-select" id="ticket_type">
                                    @foreach ($getTicketTypes as $ticketType)
                                        <option value="{{ $ticketType->name }}">{{ $ticketType->name }} -
                                            Rp.{{ $ticketType->price }};</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="ticket_quantity" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <button class="btn btn-primary btn-sm" id="minus-btn"><i
                                            class="fa fa-minus"></i></button>
                                    <input type="number" id="ticket_quantity"
                                        class="form-control form-control-sm text-center" min="1" max="2"
                                        value="1" />
                                    <button class="btn btn-primary btn-sm" id="plus-btn"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const minusBtn = document.getElementById('minus-btn');
                            const plusBtn = document.getElementById('plus-btn');
                            const ticketQuantity = document.getElementById('ticket_quantity');
                            const detailTiket2 = document.getElementById('detail-tiket-2-card')

                            function toggleDetailTiket2() {
                                if (ticketQuantity.value == '2') {
                                    detailTiket2.style.display = 'block';
                                } else {
                                    detailTiket2.style.display = 'none';
                                }
                            }

                            minusBtn.addEventListener('click', function() {
                                let currentValue = parseInt(ticketQuantity.value);
                                if (currentValue > 1) {
                                    ticketQuantity.value = currentValue - 1;
                                    toggleDetailTiket2();
                                }
                            });

                            plusBtn.addEventListener('click', function() {
                                let currentValue = parseInt(ticketQuantity.value);
                                if (currentValue < 2) {
                                    ticketQuantity.value = currentValue + 1;
                                    toggleDetailTiket2();
                                }
                            });

                            // Inital check
                            toggleDetailTiket2();
                        });
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Tiket 1</h4>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik" placeholder="3578xxxxxxxx"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomor_hp"
                                        placeholder="62xxx-xxxx-xxxx" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="nama@gmail.com" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggallahir"
                                        placeholder="mm/dd/yyyy" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="male">
                                        <label class="form-check-label" for="male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female">
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" id="detail-tiket-2-card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Tiket 2</h4>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik" placeholder="3578xxxxxxxx"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomor_hp"
                                        placeholder="62xxx-xxxx-xxxx" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="nama@gmail.com" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggallahir"
                                        placeholder="mm/dd/yyyy" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="male">
                                        <label class="form-check-label" for="male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female">
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Metode Pembayaran</h4>
                    <p class="card-text">Pilih metode pembayaran yang akan digunakan</p>
                    <div class="d-flex gap-4">
                        <!-- Grid for Bank Cards -->
                        <div class="col-5">

                            <div class="d-flex flex-column gap-3">
                                <h5>Bank Cards</h5>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('bni').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="bni" value="BNIVA">
                                            <img src="{{ asset('assets/images/method-logo/logo-bni.png') }}"
                                                alt="BNI" class="img-fluid">
                                            <label class="form-check-label" for="bni">BNI</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('bsi').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="bsi" value="BSIVA">
                                            <img src="{{ asset('assets/images/method-logo/logo-bsi.png') }}"
                                                alt="BSI" class="img-fluid">
                                            <label class="form-check-label" for="bsi">BSI</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('bca').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="bca" value="BCAVA">
                                            <img src="{{ asset('assets/images/method-logo/logo-bca.png') }}"
                                                alt="BCA" class="img-fluid">
                                            <label class="form-check-label" for="bca">BCA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('mandiri').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="mandiri" value="MANDIRIVA">
                                            <img src="{{ asset('assets/images/method-logo/logo-bmandiri.png') }}"
                                                alt="Mandiri" class="img-fluid">
                                            <label class="form-check-label" for="mandiri">Mandiri</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('bri').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="bri" value="BRIVA">
                                            <img src="{{ asset('assets/images/method-logo/logo-bri.png') }}"
                                                alt="BRI" class="img-fluid">
                                            <label class="form-check-label" for="bri">BRI</label>
                                        </div>
                                    </div>
                                </div>
                                <h5>Retail</h5>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('alfamart').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="alfamart" value="ALFAMART">
                                            <img src="{{ asset('assets/images/method-logo/logo_alfamart.png') }}"
                                                alt="Alfamart" class="img-fluid">
                                            <label class="form-check-label" for="alfamart">Alfamart</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('indomaret').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="indomaret" value="INDOMARET">
                                            <img src="{{ asset('assets/images/method-logo/logo_indomaret.png') }}"
                                                alt="Indomaret" class="img-fluid">
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
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('qris').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="qris" value="QRISREALTIME">
                                            <img src="{{ asset('assets/images/method-logo/logo-qris.png') }}"
                                                alt="QRIS" class="img-fluid">
                                            <label class="form-check-label" for="qris">QRIS</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('spay').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="spay" value="SHOPEEPAY_REALTIME">
                                            <img src="{{ asset('assets/images/method-logo/logo-spay.png') }}"
                                                alt="Spay" class="img-fluid">
                                            <label class="form-check-label" for="spay">ShopeePay</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('ovo').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="ovo" value="OVOPUSH">
                                            <img src="{{ asset('assets/images/method-logo/logo-ovo.png') }}"
                                                alt="OVO" class="img-fluid">
                                            <label class="form-check-label" for="ovo">OVO</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('dana').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="dana" value="DANA_REALTIME">
                                            <img src="{{ asset('assets/images/method-logo/logo-dana.png') }}"
                                                alt="DANA" class="img-fluid">
                                            <label class="form-check-label" for="dana">DANA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card">
                                    <div class="custom-card-body"
                                        onclick="document.getElementById('gopay').checked = true;">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="gopay" value="GOPAY">
                                            <img src="{{ asset('assets/images/method-logo/logo-gopay.png') }}"
                                                alt="GoPay" class="img-fluid">
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
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Pembayaran</h4>
                    <div class="col-sm-6 text-start">
                        <h2>Rp 100.000</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <a href="{{ route('payment-method') }}" class="btn btn-primary w-100">Bayar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
