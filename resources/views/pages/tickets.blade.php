@extends('layouts.app-plain')

@section('title', 'Tactick - Ticket')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.footballticketnet.fr/theme/images/special_picture/Chelsea-Special-Picture-FootballTicketNet.jpg.webp?cb=7130"
                                        class="d-block">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.footballticketnet.fr/theme/images/special_picture/Liverpool-Special-Picture-FootballTicketNet.jpg.webp?cb=7130"
                                        class="d-block">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.footballticketnet.fr/theme/images/special_picture/FC-Barcelona-Special-Picture-FootballTicketNet.jpg.webp?cb=7130"
                                        class="d-block">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Match</th>
                                            <th class="text-center"></th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($matches as $match)
                                            <tr>
                                                <td class="col-lg-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="media-body ms-3">
                                                            <h6 class="mb-0">{{ $match->date }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">
                                                    <img class="img-fluid rounded-circle avatar-40"
                                                        src="{{ $match->getClub1->logo }}" alt="">
                                                    VS
                                                    <img class="img-fluid rounded-circle avatar-40"
                                                        src="{{ $match->getClub2->logo }}" alt="">
                                                </td>
                                                <td class="col-lg-5">
                                                    <div class="media-body ms3">
                                                        <h6 class="mb-0">
                                                            <p class="mb-0">{{ $match->name }}</p>
                                                            <p class="text-dark">{{ $match->description }}</p>
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">
                                                    <a href="{{ route('ticket-detail') }}" class="btn btn-primary">Buy</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <div class="vanila-datepicker"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
