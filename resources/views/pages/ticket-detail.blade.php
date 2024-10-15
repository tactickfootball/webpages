@extends('layouts.app-plain')

@section('title', 'Detail Ticket - Tactick')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@push('styles')
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
@endpush

@section('content')
    <!-- Page Content  -->
    <div class="container">
        {{-- Display any error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    @include('partials.breadcrumb')
                </div>
                <input type="hidden" name="id_match" value="{{ $matches->id }}">
                {{-- del this --}}
                @error('id_match')
                    <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                @enderror
                <div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Diri Pemesan</h4>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nik"
                                        placeholder="3578-xxxx-xxxx-xxxx" value="{{ old('nik.0') }}"
                                        oninput="validateNIK(this)">
                                    <div id="nik-error" class="text-danger mt-2 d-none"></div>
                                    @error('nik.0')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                        value="{{ old('nama.0') }}">
                                    @error('nama.0')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nomor_hp" placeholder="62xxx-xxxx-xxxx"
                                        value="{{ old('nomor_hp.0') }}" oninput="validatePhoneNumber(this)">
                                    <div id="phone-error" class="text-danger mt-2 d-none"></div>
                                    @error('nomor_hp.0')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="nama@gmail.com"
                                        value="{{ old('email.0') }}">
                                    @error('email.0')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggallahir" placeholder="mm/dd/yyyy"
                                        value="{{ old('tanggal_lahir.0') }}">
                                    @error('tanggal_lahir.0')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 top-form">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="top-male" name="gender[]"
                                            value="male" {{ old('gender.0') == 'male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="top-male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="top-female" name="gender[]"
                                            value="female" {{ old('gender.0') == 'female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="top-female">Perempuan</label>
                                    </div>
                                    @error('gender.0')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
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
                                    <select class="form-select" id="ticket_type" name="ticket_type">
                                        @foreach ($getTicketTypes as $ticketType)
                                            <option value="{{ $ticketType->id }}"
                                                {{ old('ticket_type') == $ticketType->id ? 'selected' : '' }}>
                                                {{ $ticketType->name }} -
                                                Rp. {{ $ticketType->price }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="amount" id="hidden_amount" name="amount"
                                        value="{{ old('amount') }}">
                                    {{-- del this --}}
                                    @error('amount')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                    @error('ticket_type')
                                        <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="ticket_quantity" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="minus-btn"><i
                                                class="fa fa-minus"></i></button>
                                        <input type="number" id="ticket_quantity" name="ticket_quantity"
                                            class="form-control form-control-sm text-center" min="1"
                                            max="2" value="{{ old('ticket_quantity', 1) }}" />
                                        <button type="button" class="btn btn-primary btn-sm" id="plus-btn"><i
                                                class="fa fa-plus"></i></button>
                                        @error('ticket_quantity')
                                            <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <input type="number" class="form-control" id="hidden_nik" name="nik[0]"
                                            placeholder="3578-xxxx-xxxx-xxxx" value="{{ old('nik.0') }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hidden_nama" name="nama[0]"
                                            placeholder="Nama Lengkap" value="{{ old('nama.0') }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hidden_nomor_hp"
                                            name="nomor_hp[]" placeholder="62xxx-xxxx-xxxx"
                                            value="{{ old('nomor_hp.0') }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="hidden_email" name="email[0]"
                                            placeholder="nama@gmail.com" value="{{ old('email.0') }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="hidden_tanggallahir"
                                            name="tanggal_lahir[0]" placeholder="mm/dd/yyyy"
                                            value="{{ old('tanggal_lahir.0') }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3 bottom-form">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender[0]"
                                                id="bottom-male" value="male" readonly
                                                {{ old('gender.0') == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="bottom-male">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender[0]"
                                                id="bottom-female" value="female" readonly
                                                {{ old('gender.0') == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="bottom-female">Perempuan</label>
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
                                        <input type="number" class="form-control" id="nik" name="nik[1]"
                                            placeholder="3578-xxxx-xxxx-xxxx" value="{{ old('nik.1') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama[1]"
                                            placeholder="Nama Lengkap" value="{{ old('nama.1') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp[1]"
                                            placeholder="62xxx-xxxx-xxxx" value="{{ old('nomor_hp.1') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email[1]"
                                            placeholder="nama@gmail.com" value="{{ old('email.1') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggallahir"
                                            name="tanggal_lahir[1]" placeholder="mm/dd/yyyy"
                                            value="{{ old('tanggal_lahir.1') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender[1]"
                                                id="male" value="male"
                                                {{ old('gender.1') == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="male">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender[1]"
                                                id="female" value="female"
                                                {{ old('gender.1') == 'female' ? 'checked' : '' }}>
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
                        @error('payment_method')
                            <div class="alert alert-danger py-1 mt-2">{{ $message }}</div>
                        @enderror
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="qris" value="QRISREALTIME"
                                                    {{ old('payment_method') == 'QRISREALTIME' ? 'checked' : '' }}>
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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
                                                <input class="form-check-input" type="radio" name="payment_method"
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

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Pembayaran</h4>
                        <div class="col-sm-6 text-start">
                            <h2 id="total_pembayaran">Rp 0</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        {{-- <a href="{{ route('payment-method') }}" class="btn btn-primary w-100">Bayar Sekarang</a> --}}
                        <button type="submit" class="btn btn-primary w-100">Bayar Sekarang</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('nik').addEventListener('input', function() {
            document.getElementById('hidden_nik').value = this.value;
        });

        document.getElementById('nama').addEventListener('input', function() {
            document.getElementById('hidden_nama').value = this.value;
        });

        document.getElementById('nomor_hp').addEventListener('input', function() {
            document.getElementById('hidden_nomor_hp').value = this.value;
        });

        document.getElementById('email').addEventListener('input', function() {
            document.getElementById('hidden_email').value = this.value;
        });

        document.getElementById('tanggallahir').addEventListener('input', function() {
            document.getElementById('hidden_tanggallahir').value = this.value;
        });

        // document.querySelectorAll('input[name="gender"]').forEach(function(element) {
        //     element.addEventListener('change', function() {
        //         document.getElementById('hidden_gender').value = this.value;
        //     });
        // });

        // document.addEventListener('DOMContentLoaded', function() {
        //     // Synchronize top and bottom gender radio buttons
        //     const topGenderRadios = document.querySelectorAll('.top-form input[name="gender"]');
        //     const bottomGenderRadios = document.querySelectorAll('.bottom-form input[name="gender"]');

        //     function syncRadioButtons(sourceRadios, targetRadios) {
        //         sourceRadios.forEach(function(radio) {
        //             radio.addEventListener('change', function() {
        //                 targetRadios.forEach(function(targetRadio) {
        //                     if (targetRadio.value === radio.value) {
        //                         targetRadio.checked = radio.checked;
        //                     }
        //                 });
        //             });
        //         });
        //     }

        //     syncRadioButtons(topGenderRadios, bottomGenderRadios);
        //     syncRadioButtons(bottomGenderRadios, topGenderRadios);
        // });

        document.addEventListener('DOMContentLoaded', function() {
            const topMale = document.getElementById('top-male');
            const topFemale = document.getElementById('top-female');
            const bottomMale = document.getElementById('bottom-male');
            const bottomFemale = document.getElementById('bottom-female');

            topMale.addEventListener('change', function() {
                if (topMale.checked) {
                    topMale.checked = true;
                    bottomMale.checked = true;
                } else {
                    topFemale.checked = false;
                    bottomMale.checked = false;
                }
            });

            topFemale.addEventListener('change', function() {
                if (topFemale.checked) {
                    topFemale.checked = true;
                    bottomFemale.checked = true;
                } else {
                    topFemale.checked = false;
                    bottomFemale.checked = false;
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const minusBtn = document.getElementById('minus-btn');
            const plusBtn = document.getElementById('plus-btn');
            const ticketQuantity = document.getElementById('ticket_quantity');
            const detailTiket2 = document.getElementById('detail-tiket-2-card')
            const ticketTypeSelect = document.getElementById('ticket_type');
            const quantityInput = document.getElementById('ticket_quantity');
            const totalPembayaranElement = document.getElementById('total_pembayaran');
            const amountElement = document.getElementById('hidden_amount');

            function toggleDetailTiket2() {
                if (ticketQuantity.value == '2') {
                    detailTiket2.style.display = 'block';
                } else {
                    detailTiket2.style.display = 'none';
                }
            }

            minusBtn.addEventListener('click', function() {
                // event.preventDefault();
                let currentValue = parseInt(ticketQuantity.value);
                if (currentValue > 1) {
                    ticketQuantity.value = currentValue - 1;
                    toggleDetailTiket2();
                    updateTotalPembayaran();
                }
            });

            plusBtn.addEventListener('click', function() {
                // event.preventDefault();
                let currentValue = parseInt(ticketQuantity.value);
                if (currentValue < 2) {
                    ticketQuantity.value = currentValue + 1;
                    toggleDetailTiket2();
                    updateTotalPembayaran();
                }
            });
            quantityInput.addEventListener('input', updateTotalPembayaran);
            ticketTypeSelect.addEventListener('change', updateTotalPembayaran);

            function getSelectedTicketPrice() {
                const selectedOption = ticketTypeSelect.options[ticketTypeSelect.selectedIndex];
                console.log("tiket type: " + selectedOption);
                console.log("Ticket type value: " + selectedOption.value);
                console.log("Ticket type text: " + selectedOption.text);
                console.log("Ticket type price: " + selectedOption.getAttribute('price'));
                // return parseInt(selectedOption.getAttribute('data-price'));

                // Extract price number
                let selectedOptionText = selectedOption.text;
                let rpIndex = selectedOptionText.indexOf("Rp.");
                let priceString = selectedOptionText.substring(rpIndex + 3).trim();
                let priceNumber = priceString.replace(/[^0-9]/g, '');

                console.log("Price number: " + priceNumber);
                return parseInt(priceNumber);
            }

            function updateTotalPembayaran() {
                // event.preventDefault();
                const quantity = parseInt(quantityInput.value);
                // console.log("quantity: " + quantity);
                const ticketPrice = getSelectedTicketPrice();
                // console.log("prise: " + ticketPrice);
                const total = ticketPrice * quantity;
                // console.log("total: " + total);
                totalPembayaranElement.textContent = `Rp ${total.toLocaleString()}`;
                amountElement.value = total;
            }

            quantityInput.addEventListener('input', updateTotalPembayaran);

            // Inital check
            toggleDetailTiket2();
            updateTotalPembayaran();
        });
    </script>

    <script>
        function validateNIK(input) {
            const errorDiv = document.getElementById('nik-error');
            const value = input.value;
            // const min = input.min;
            // const max = input.max;
            const requiredLength = 16;

            if (value.length !== requiredLength) {
                errorDiv.textContent = `NIK harus berisi ${requiredLength} digit.`;
                errorDiv.classList.remove('d-none');
            } else {
                errorDiv.textContent = '';
                errorDiv.classList.add('d-none');
            }
        }

        function validatePhoneNumber(input) {
            const errorDiv = document.getElementById('phone-error');
            const value = input.value;
            // phone number must start with 62 and minimum length is 10
            const requiredPrefix = '62';
            const requiredLength = 10;

            if (!value.startsWith(requiredPrefix) || value.length < requiredLength) {
                errorDiv.textContent =
                    `Nomor telepon harus dimulai dengan ${requiredPrefix} dan memiliki setidaknya ${requiredLength} digit.`;
                errorDiv.classList.remove('d-none');
            } else {
                errorDiv.textContent = '';
                errorDiv.classList.add('d-none');
            }
        }
    </script>
@endpush
