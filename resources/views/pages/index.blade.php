@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container relative">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="iq-todo-page">
                            <div class="add-new-project mt-3 mb-3">
                                <a href="#" class="d-block nrw-project">
                                    <i class="ri-football-line"></i>
                                    TackTick Football
                                </a>
                            </div>
                            <ul class="todo-task-list p-0 m-0">
                                <li class="">
                                    <a href="#">
                                        FOOTBALL LEAGUE
                                        <i class="ri-arrow-drop-down-line"></i>
                                    </a>
                                    <ul id="todo-task1" class="sub-task  show mt-2 p-0">
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                World Cup Qatar 2022
                                            </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                Champions League</a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                Premiere League
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                La Liga</a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                Ligue 1</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#">
                                        FAVORITE CLUB
                                        <i class="ri-arrow-drop-down-line"></i>
                                    </a>
                                    <ul id="todo-task1" class="sub-task  show mt-2 p-0">
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                Chelsea FC <span class="float-end"><i class="las la-star"></i></span>
                                            </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                Manchester City<span class="float-end"><i class="las la-star"></i></span>
                                            </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill"></i>
                                                Bayern Munchen<span class="float-end"><i class="las la-star"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="iq-todo-page">
                            <ul class="todo-task-list p-0 m-0">
                                <li class="">
                                    <a href="#"><i class="ri-stack-fill me-2"></i> Group stage</a>
                                    <ul id="todo-task1" class="sub-task  show mt-2 p-0">
                                        <li class="active"><a href="#"><i
                                                    class="ri-checkbox-blank-circle-fill text-success"></i>
                                                Pertandingan 1
                                            </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                Pertandingan 2 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                Pertandingan 4 <span class="badge bg-danger float-end">44</span>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                Pertandingan 4 </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-stack-fill me-2"></i> Quarter-finals</a>
                                    <ul id="todo-task2" class="sub-task  mt-2 p-0">
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-success"></i>
                                                Pertandingan 5 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                Pertandingan 6 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                Pertandingan 7 <span class="badge bg-danger float-end">20</span>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                Pertandingan 8 </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-stack-fill me-2"></i> Semi-finals</a>
                                    <ul id="todo-task3" class="sub-task  mt-2 p-0">
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-success"></i>
                                                Pertandigan 9 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                Pertandingan 10 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                Pertandingan 11 <span class="badge bg-danger float-end">10</span>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                Pertandingan 12 </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-stack-fill me-2"></i> Final</a>
                                    <ul id="todo-task2" class="sub-task  mt-2 p-0">
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-success"></i>
                                                Pertandingan 13 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                Pertandingan 14 </a></li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                Pertandingan 15 <span class="badge bg-danger float-end">20</span>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                Pertandingan 16</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body profile-page p-0">
                                <div class="profile-header">
                                    <div class="position-relative">
                                        <img src="../assets/images/page-img/profile-bg1.jpg" alt="profile-bg"
                                            class="rounded img-fluid">
                                        <ul class="header-nav list-inline d-flex flex-wrap p-0 m-0"
                                            style="position: absolute; bottom: 14px; left: 14px;">
                                            <button type="submit" class="btn bg-soft-success">Order Now<i
                                                    class="ri-arrow-right-line"></i></button>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body d-flex align-items-center pb-0">
                                <i class="ri-live-line me-2"></i>
                                <h5 class="mb-0 me-2">Live</h5>
                                <span class="badge bg-danger float-end">(1)</span>
                                <div class="ms-auto d-flex">
                                    <h6>All Match</h6>
                                    <span href="#" class="search-toggle   dropdown-toggle ms-2"
                                        id="notification-drop" data-bs-toggle="dropdown">
                                    </span>
                                    <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                                        <div class="card shadow-none m-0">
                                            <div class="card-header d-flex justify-content-between bg-primary">
                                                <div class="header-title bg-primary">
                                                    <h5 class="mb-0 text-white">All Matches</h5>
                                                </div>
                                                <small class="badge  bg-light text-dark">2</small>
                                            </div>
                                            <div class="card-body p-0">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Sebagian Match - 1</h6>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <p class="mb-0">Data - 1</p>
                                                                <small class="float-right font-size-12">Data deskripsi
                                                                    kecil - 1</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Sebagian Match - 2</h6>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <p class="mb-0">Data - 2</p>
                                                                <small class="float-right font-size-12">Data deskripsi
                                                                    kecil - 2</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 ">
                                <div class="user-tabing">
                                    <ul
                                        class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                                        <li class="nav-item col-12 col-sm-2 p-0">
                                            <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="pill"
                                                data-bs-target="#yesterday" role="button">Yesterday</a>
                                        </li>
                                        <li class="nav-item col-12 col-sm-2 p-0">
                                            <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill"
                                                data-bs-target="#today" role="button">Today</a>
                                        </li>
                                        <li class="nav-item col-12 col-sm-2 p-0">
                                            <a class="nav-link" href="#pills-friends-tab" data-bs-toggle="pill"
                                                data-bs-target="#tomorrow" role="button">Tomorrow</a>
                                        </li>
                                        <li class="nav-item col-12 col-sm-2 p-0">
                                            <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill"
                                                data-bs-target="#d-two" role="button">+2</a>
                                        </li>
                                        <li class="nav-item col-12 col-sm-2 p-0">
                                            <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill"
                                                data-bs-target="#d-three" role="button">+3</a>
                                        </li>
                                        <li class="nav-item col-12 col-sm-2 p-0">
                                            <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill"
                                                data-bs-target="#d-four" role="button">+4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="yesterday" role="tabpanel">
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <td colspan="5" class="text-left"><i
                                                            class="ri-earth-line me-1"></i>
                                                        World - FIFA Women's World Cup</td>
                                                    <th>
                                                        [ Quarter Finals ]
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">Live
                                                    </th>
                                                    <td>Spain</td>
                                                    <td>img</td>
                                                    <td><code>2-1</code></td>
                                                    <td>img</td>
                                                    <td>Netherlands</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">13:40</th>
                                                    <td>Japan</td>
                                                    <td>img</td>
                                                    <td><code>2-3</code></td>
                                                    <td>img</td>
                                                    <td>Sweden</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">18:20</th>
                                                    <td>Olympiakos</td>
                                                    <td>img</td>
                                                    <td><code>1-4</code></td>
                                                    <td>img</td>
                                                    <td>Genk</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <td colspan="5" class="text-left"><i
                                                            class="ri-earth-line me-1"></i>
                                                        Spain - La Liga</td>
                                                    <th>
                                                        [ Quarter Finals ]
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">01:43
                                                    </th>
                                                    <td>Spain</td>
                                                    <td>img</td>
                                                    <td><code>2-1</code></td>
                                                    <td>img</td>
                                                    <td>Netherlands</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">13:40</th>
                                                    <td>Japan</td>
                                                    <td>img</td>
                                                    <td><code>2-3</code></td>
                                                    <td>img</td>
                                                    <td>Sweden</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">18:20</th>
                                                    <td>Olympiakos</td>
                                                    <td>img</td>
                                                    <td><code>1-4</code></td>
                                                    <td>img</td>
                                                    <td>Genk</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <td colspan="5" class="text-left"><i
                                                            class="ri-earth-line me-1"></i>
                                                        Spain - La Liga</td>
                                                    <th>
                                                        [ Quarter Finals ]
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">01:43
                                                    </th>
                                                    <td>Spain</td>
                                                    <td>img</td>
                                                    <td><code>2-1</code></td>
                                                    <td>img</td>
                                                    <td>Netherlands</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">13:40</th>
                                                    <td>Japan</td>
                                                    <td>img</td>
                                                    <td><code>2-3</code></td>
                                                    <td>img</td>
                                                    <td>Sweden</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-left" scope="row">18:20</th>
                                                    <td>Olympiakos</td>
                                                    <td>img</td>
                                                    <td><code>1-4</code></td>
                                                    <td>img</td>
                                                    <td>Genk</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="today" role="tabpanel">
                                    <div class="card-body">
                                        <h2>Today</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                {{--  --}}
                                            </div>
                                            <div class="col-md-9 ps-4">
                                                {{--  --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tomorrow" role="tabpanel">
                                    <div class="card-body">
                                        <h2>Tomorrow</h2>
                                        {{--  --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="d-two" role="tabpanel">
                                    <div class="card-body">
                                        <h2>+2</h2>
                                        {{--  --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="d-three" role="tabpanel">
                                    <div class="card-body">
                                        <h2>+3</h2>
                                        {{--  --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="d-four" role="tabpanel">
                                    <div class="card-body">
                                        <h2>+4</h2>
                                        {{--  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="todo-date d-flex me-3">
                                <i class="ri-calendar-2-line text-success me-2"></i>
                                <span>Wednesday, <br>08th January, 2020</span>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body pt-0">
                        <div class="iq-todo-page">
                            <div class="add-new-project mt-3 mb-3">
                                <a href="#" class="d-block nrw-project"><i class="ri-newspaper-line"></i>
                                    Trending News
                                </a>
                            </div>
                            <div class="col-12">
                                <img src="../assets/images/trending/Rectangle 11.png" class="card-img" alt="#" style="max-width: 100%; max-height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title">Results and scores from the Premier League....!!</h5>
                                    <p class="card-text"><small class="text-muted">Admin - 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="../assets/images/trending/Rectangle 12.png" class="card-img" alt="#">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Here are the top 100 players and managers</h6>
                                        <p class="card-text"><small class="text-muted">Admin - 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                        <img src="../assets/images/trending/Rectangle 13.png" class="card-img" alt="#">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">IShowSpeed Scored a Hattrick</h6>
                                        <p class="card-text"><small class="text-muted">Admin - 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="../assets/images/page-img/08.jpg" class="card-img" alt="#">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Join or start a competition now!</h6>
                                        <p class="card-text"><small class="text-muted">Admin - 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="../assets/images/page-img/08.jpg" class="card-img" alt="#">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Manchester City Relegated</h6>
                                        <p class="card-text"><small class="text-muted">Admin - 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--  --}}
