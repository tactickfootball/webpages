<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/coming-soon', function () {
    return view('pages.coming-soon');
})->name('coming-soon');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/matches', function () {
    return view('pages.matches');
})->name('matches');

Route::get('/match-detail', function () {
    return view('pages.match-detail');
})->name('match-detail');

Route::get('/live-score', function () {
    return view('pages.live-score');
})->name('live-score');

Route::get('/statistics', function () {
    return view('pages.statistics');
})->name('statistics');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/favorite', function () {
    return view('pages.favorite');
})->name('favorite');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/liga', function () {
    return view('pages.liga');
})->name('liga');

Route::get('/tickets', function () {
    return view('pages.tickets');
})->name('tickets');

Route::get('/ticket-detail', [TicketController::class, 'showDetail'])->name('ticket-detail');

Route::get('/ticket/buy', function () {
    return view('pages.ticket-buy');
})->name('ticket-buy');

Route::get('/video', function () {
    return view('pages.video');
})->name('video');

Route::get('/newspaper', function () {
    return view('pages.newspaper');
})->name('newspaper');

Route::get('/chat', function () {
    return view('pages.chat');
})->name('chat');

Route::get('/game', function () {
    return view('pages.game');
})->name('game');

Route::get('/store', function () {
    return view('pages.store');
})->name('store');

Route::get('/ai', function () {
    return view('pages.ai');
})->name('ai');

Route::get('/setting', function () {
    return view('pages.setting');
})->name('setting');

Route::get('/user/personal-data', function () {
    return view('pages.personal-data');
})->name('personal-data');

Route::get('/user/payment', function () {
    return view('pages.payment');
})->name('payment');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');


Route::get('/groups', function () {
    return view('pages.groups');
})->name('groups');

Route::get('/group-detail', function () {
    return view('pages.group-detail');
})->name('group-detail');

Route::get('/user/invoice', function () {
    return view('pages.invoice');
})->name('invoice');