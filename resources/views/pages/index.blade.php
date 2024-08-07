{{-- masih mentah --}}


@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- <h1>Welcome to the Home Page</h1> --}}

    {{-- <x-card title="Card title"
        content="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. "
        button="Submit" />

    <x-form action="/submit" method="POST" buttonText="Submit">
        <input type="text" name="name" placeholder="Enter your name">
    </x-form>

    <x-modal id="exampleModal" title="Example Modal" buttonText="Save changes">
        <p>This is the modal content.</p>
    </x-modal> --}}

    <div class="container relative">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="iq-todo-page">
                            <div class="add-new-project mt-3 mb-3">
                                <a href="#" class="d-block nrw-project"><i class="ri-add-line me-2"></i>Liga
                                    Teratas</a>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    Premiere League
                                </a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    Champions League
                                </a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    LaLiga
                                </a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    Serie A
                                </a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    Liga 1
                                </a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    Piala Dunia
                                </a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                    FA Cup
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="todo-date d-flex me-3">
                                        <i class="ri-calendar-2-line text-success me-2"></i>
                                        <span>Wednesday, 08th January, 2020</span>
                                    </div>
                                    <div class="todo-notification d-flex align-items-center  mt-2 mt-md-0">
                                        <div class="notification-icon position-relative d-flex align-items-center me-3">
                                            <a href="#"><i class="ri-notification-3-line"></i></a>
                                            <span class="bg-danger text-white">5</span>
                                        </div>
                                        <button type="submit" class="btn bg-soft-success">Add Task</button>
                                    </div>
                                </div>
                            </div>
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
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                        Pertandingan 2 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                        Pertandingan 4 <span class="badge bg-danger float-end">44</span>
                                                    </a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                        Pertandingan 4 </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ri-stack-fill me-2"></i> Quarter-finals</a>
                                            <ul id="todo-task2" class="sub-task  mt-2 p-0">
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i>
                                                        Pertandingan 5 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                        Pertandingan 6 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                        Pertandingan 7 <span class="badge bg-danger float-end">20</span>
                                                    </a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                        Pertandingan 8 </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ri-stack-fill me-2"></i> Semi-finals</a>
                                            <ul id="todo-task3" class="sub-task  mt-2 p-0">
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i>
                                                        Pertandigan 9 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                        Pertandingan 10 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                        Pertandingan 11 <span class="badge bg-danger float-end">10</span>
                                                    </a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                        Pertandingan 12 </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ri-stack-fill me-2"></i> Final</a>
                                            <ul id="todo-task2" class="sub-task  mt-2 p-0">
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i>
                                                        Pertandingan 13 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-warning"></i>
                                                        Pertandingan 14 </a></li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-danger"></i>
                                                        Pertandingan 15 <span class="badge bg-danger float-end">20</span>
                                                    </a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="ri-checkbox-blank-circle-fill text-primary"></i>
                                                        Pertandingan 16</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <ul class="todo-task-lists m-0 p-0">
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6 class="d-inline-block">Landing page for secret Project</h6>
                                                <span
                                                    class="badge bg-warning ms-0 ms-md-3 my-1 my-md-0 text-white">Expirinq</span>
                                                <p class="mb-0">by Danlel Cllfferton</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check1">
                                                    <label class="form-check-label" for="check1"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3 active-task">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6>Fix Critical Crashes</h6>
                                                <p class="mb-0">by Cralg Danles</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check2" checked="checked">
                                                    <label class="form-check-label" for="check2"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6 class="d-inline-block">IOS App - Redesign the contact</h6>
                                                <span class="badge bg-success ms-0 ms-md-3 my-1 my-md-0">Ending</span>
                                                <p class="mb-0">by Simona Gomez </p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check3">
                                                    <label class="form-check-label" for="check3"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6>Final Meetup for the Secrat Project Client</h6>
                                                <p class="mb-0">bt Serena Gemoz</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check4">
                                                    <label class="form-check-label" for="check4"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/04.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6>Code the Parsing Element</h6>
                                                <p class="mb-0">by Jeena Gaze</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check5">
                                                    <label class="form-check-label" for="check5"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/05.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6 class="d-inline-block">Test the Bug, that causes design
                                                </h6>
                                                <span class="badge bg-danger ms-0 ms-md-3 my-1 my-md-0">Urgent</span>
                                                <p class="mb-0">by migule Slimmonas</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check6">
                                                    <label class="form-check-label" for="check6"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/06.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6>Android App Design</h6>
                                                <p class="mb-0">by Becky Dimes</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check7">
                                                    <label class="form-check-label" for="check7"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center p-3">
                                        <div class="user-img img-fluid"><img src="../assets/images/user/07.jpg"
                                                alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="ms-3">
                                                <h6>Skype Meetup with clients</h6>
                                                <p class="mb-0">by James Romero</p>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" name="todo-check" class="form-check-input"
                                                        id="check8">
                                                    <label class="form-check-label" for="check8"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="iq-todo-right">
                                    <form class="position-relative">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control todo-search"
                                                id="exampleInputEmail001" placeholder="Search">
                                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                        </div>
                                    </form>
                                    <div class="iq-todo-friendlist mt-3">
                                        <ul class="suggestions-lists m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Paul Molive</h6>
                                                        <p class="mb-0">trainee</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton41" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Anna Mull</h6>
                                                        <p class="mb-0">Web Developer</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton42" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Paige Turner</h6>
                                                        <p class="mb-0">trainee</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton43" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/04.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Barb Ackue</h6>
                                                        <p class="mb-0">Web Designer</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton44" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/05.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Greta Life</h6>
                                                        <p class="mb-0">Tester</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton45" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/06.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Ira Membrit</h6>
                                                        <p class="mb-0">Android Developer</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton46" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><img src="../assets/images/user/07.jpg"
                                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ms-3">
                                                        <h6>Pete Sariya</h6>
                                                        <p class="mb-0">Web Designer</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle text-primary"
                                                                id="dropdownMenuButton47" data-bs-toggle="dropdown">
                                                                <i class="ri-more-2-line h4"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-user-unfollow-line me-2"></i>Unfollow</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-close-circle-line me-2"></i>Unfriend</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-lock-line me-2"></i>block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="btn btn-primary d-block"><i class="ri-add-line"></i>
                                            Load More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="iq-todo-page">
                            <form class="position-relative">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control todo-search" id="exampleInputEmail002"
                                        placeholder="Search">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </div>
                            </form>
                            <div class="add-new-project mt-3 mb-3">
                                <a href="#" class="d-block nrw-project"><i class="ri-add-line me-2"></i>
                                    Berita
                                </a>
                            </div>
                            <div class="col-12">
                                <img src="../assets/images/page-img/08.jpg" class="card-img" alt="#">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in. a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="../assets/images/page-img/08.jpg" class="card-img" alt="#">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in. a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
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
    </div>

@endsection

{{--  --}}
