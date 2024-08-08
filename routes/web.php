<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/coming-soon', function () {
    return view('pages.coming-soon');
})->name('coming-soon');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/matches', function () {
    return view('pages.matches');
});

Route::get('/match-detail', function () {
    return view('pages.match-detail');
});

Route::get('/live-score', function () {
    return view('pages.live-score');
});

Route::get('/statistics', function () {
    return view('pages.statistics');
});

Route::get('/ticket', function () {
    return view('pages.ticket');
});

Route::get('/personal-data', function () {
    return view('pages.personal-data');
});

Route::get('/payment', function () {
    return view('pages.payment');
});

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

// Route::get('/terms-and-conditions', function () {
//     return view('pages.terms-and-conditions');
// });

Route::get('/groups', function () {
    return view('pages.groups');
});

Route::get('/group-detail', function () {
    return view('pages.group-detail');
});

Route::get('/invoice', function () {
    return view('pages.invoice');
});
