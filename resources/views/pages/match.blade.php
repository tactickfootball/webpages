@extends('layouts.app')

@section('title', 'Tactick - Live Score')

@section('content')
<div class="container relative">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body d-flex align-items-center pb-0">
                            <i class="ri-live-line me-2"></i>
                            <h5 class="mb-0 me-2">Live</h5>
                            <span class="badge bg-danger float-end">(1)</span>
                            <div class="ms-auto d-flex">
                                <h6>All Match</h6>
                                <span href="#" class="search-toggle   dropdown-toggle ms-2" id="notification-drop"
                                    data-bs-toggle="dropdown">
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
                        <div class="card-body p-0">
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
                                                <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
                                                    World - FIFA Women's World Cup</td>
                                                <th>
                                                    [ Quarter Finals ]
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap text-left" scope="row">00:00
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
                                                <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                                                <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                                                <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                                                <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                            <div class="tab-pane fade" id="tomorrow" role="tabpanel">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                                            <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                                            <td colspan="5" class="text-left"><i class="ri-earth-line me-1"></i>
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
                            <div class="tab-pane fade" id="d-two" role="tabpanel">
                                <div class="card-body">
                                    <h2>+2</h2>
                                    {{-- --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="d-three" role="tabpanel">
                                <div class="card-body">
                                    <h2>+3</h2>
                                    {{-- --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="d-four" role="tabpanel">
                                <div class="card-body">
                                    <h2>+4</h2>
                                    {{-- --}}
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