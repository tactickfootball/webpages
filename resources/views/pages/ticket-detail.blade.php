@extends('layouts.app-plain')

@section('title', 'TacTick - Detail Ticket')

@section('content')
<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('partials.breadcrumb')
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Data Diri</h4>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" value="3578xxxxxxxx" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" value="Nama Lengkap" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="nomor_hp" value="62-xxx-xxxx-xxxx" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="admin@tac.tick" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Tempat Duduk</h4>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Utara<br>
                                        Rp 25.000/Tiket
                                    </button>
                                </div>
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Timur<br>
                                        Rp 50.000/Tiket
                                    </button>
                                </div>
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Selatan<br>
                                        Rp 25.000/Tiket
                                    </button>
                                </div>
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Barat<br>
                                        Rp 100.000/Tiket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pilih Tiket</h4>
                        <div class="row mb-0">
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-4">Jenis Tiket</div>
                            <div class="col-sm-4">Jumlah Tiket</div>
                        </div>
                        <div class="row mb-3">
                            <label for="tribun" class="col-sm-1 col-form-label"></label>
                            <div class="col-sm-4">
                                <select class="form-select" id="tribun">
                                    <option value="utara">Pilih Jenis Tiket</option>
                                    <option value="timur">A</option>
                                    <option value="selatan">B</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-select" id="tribun">
                                    <option value="utara">Pilih Jumlah Tiket</option>
                                    <option value="timur">A</option>
                                    <option value="selatan">B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Metode Pembayaran</h4>
                            <div class="form-check d-block">
                                <button type="button" class="btn btn-outline-primary w-100" onclick="document.getElementById('tribunUtara').click();">
                                    <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                    Paypal
                                </button>
                            </div>
                            <div class="form-check d-block">
                                <button type="button" class="btn btn-outline-primary w-100" onclick="document.getElementById('tribunUtara').click();">
                                    <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                    Google Pay
                                </button>
                            </div>
                            <div class="form-check d-block">
                                <button type="button" class="btn btn-outline-primary w-100" onclick="document.getElementById('tribunUtara').click();">
                                    <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                    QRIS
                                </button>
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total</h4>
                        <div class="row mb-3">
                            {{-- <label for="total" class="col-sm-6 col-form-label">Rp</label> --}}
                            <h3 class="col-sm-6">Rp</h3>
                            <div class="col-sm-6 text-right">
                                <h3>100.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                        <button type="button" class="btn btn-primary w-100">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection