@extends('layouts.app-plain')

@section('title', 'Detail Ticket - Tactick')

@section('content')
<style>
    .active-btn {
      background-color: #0d6efd;
      color: white;
    }
  </style>
    <div class="container">
        <div class="row">
            <!-- Button Navigation for Carousel -->
            <div class="mt-4">
                <button class="btn btn-outline-primary mx-2 active-btn" data-bs-target="#contentSlider" data-bs-slide-to="0" id="btn1">Deskripsi</button>
                <button class="btn btn-outline-primary mx-2" data-bs-target="#contentSlider" data-bs-slide-to="1" id="btn2">Jenis
                    Tiket</button>
            </div>

            <!-- Carousel -->
            <div id="contentSlider" class="carousel slide mt-4">
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Deskripsi Tiket</h3>
                                <p class="card-text mb-3">
                                    Ayo dukung tim kesayanganmu dengan membeli tiket pertandingan di Tactick! Dapatkan tiket
                                    pertandingan dengan harga terbaik dan jadwal pertandingan yang lengkap. Tactick
                                    menyediakan tiket pertandingan sepak bola, basket, dan olahraga lainnya. Dapatkan tiket
                                    pertandinganmu sekarang!
                                </p>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar me-3"></i>
                                    <span>12 October 2023</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-map-marker me-3"></i>
                                    <span>Stadium ABC, City XYZ</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock me-3"></i>
                                    <span>19:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jenis Tiket</h5>
                                <p class="card-text mb-2">Pilih jenis tiket yang diinginkan</p>
                                <div class="card" style="width: 36rem">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-md-center">
                                            <div class="col-6">
                                                <h5 class="card-title text-primary">Tiket Tribun Utara</h5>
                                                <p>Harga: Rp 100.000</p>
                                            </div>
                                            <div class="col-1 me-2">
                                                <a href="#" class="btn btn-primary btn-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 36rem">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-md-center">
                                            <div class="col-6">
                                                <h5 class="card-title text-primary">Tiket Tribun Timur</h5>
                                                <p>Harga: Rp 80.000</p>
                                            </div>
                                            <div class="col-1 me-2">
                                                <a href="#" class="btn btn-primary btn-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 36rem">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-md-center">
                                            <div class="col-6">
                                                <h5 class="card-title text-primary">Tiket Tribun Barat</h5>
                                                <p>Harga: Rp 90.000</p>
                                            </div>
                                            <div class="col-1 me-2">
                                                <a href="#" class="btn btn-primary btn-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 36rem">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-md-center">
                                            <div class="col-6">
                                                <h5 class="card-title text-primary">Tiket Tribun Selatan</h5>
                                                <p>Harga: Rp 120.000</p>
                                            </div>
                                            <div class="col-1 me-2">
                                                <a href="#" class="btn btn-primary btn-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<script>
    // Function to update button highlighting
    var carousel = document.getElementById('contentSlider');
    var buttons = document.querySelectorAll('.btn');
  
    // Listen for slide change event
    carousel.addEventListener('slide.bs.carousel', function(event) {
      buttons.forEach(function(button) {
        button.classList.remove('active-btn'); // Remove highlight from all buttons
      });
  
      // Highlight the current button based on the slide index
      document.getElementById('btn' + (event.to + 1)).classList.add('active-btn');
    });
  </script>
@endsection
