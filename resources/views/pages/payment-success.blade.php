@extends('layouts.app-plain')

@section('title', 'Pembayaran Berhasil - TacTick')

@section('content')
    <!-- Page Content  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('partials.breadcrumb')
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Pembayaran Berhasil</h1>
                        <p>Scan the QR code below to access your ticket:</p>
                        <img src="{{ $qrCode }}" alt="QR Code">
                        <p>Belum nganu buat kirim tiket ke email</p>
                        <p>Atur pas email duplicate bakal nampilin error</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
