<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailMatchController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TokopayController;
use App\Http\Controllers\PaymentController;

Route::get('/coming-soon', function () {
    return view('pages.coming-soon');
})->name('coming-soon');

Route::get('/', [TicketController::class, 'showTickets'])->name('index');

Route::get('/tiket/detail-pertandingan/{id}', [DetailMatchController::class, 'showDetailMatches'])->name('match.detail');

Route::post('/tiket/bayar', [TicketController::class, 'storeTicket'])->name('ticket.store');

Route::get('/tiket/detail/{id}', [TicketController::class, 'showDetail'])->name('ticket.detail');

Route::get('/transaksi/{ref_id}', [PaymentController::class, 'handlePaymentSuccess'])->name('payment.success');

// del this
// Route::get('/ticket-details/{id}', [TicketController::class, 'showDetails'])->name('ticket-details');
// Route::post('/ticket-info', [TicketController::class, 'storeTicketInfo'])->name('ticket.info.store');

Route::get('/payment-method', function () {
    return view('pages.payment-method');
})->name('payment-method');

Route::get('/description-ticket', function () {
    return view('pages.description-ticket');
})->name('description-ticket');

// Route::post('/order', [TokopayController::class, 'createOrder'])->name('order');

// Route::get('/payment/{trx_id}', [PaymentController::class, 'showPayment'])->name('payment');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

// Step 4: Middleware
// Ensure that your routes are protected by the auth middleware if they require authentication.

// Route::group(['middleware' => ['auth']], function () {
//     // Protected routes
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });

// Route::get('/matches', function () {
//     return view('pages.matches');
// })->name('matches');

// Route::get('/match-detail', function () {
//     return view('pages.match-detail');
// })->name('match-detail');

// Route::get('/live-score', function () {
//     return view('pages.live-score');
// })->name('live-score');

// Route::get('/statistics', function () {
//     return view('pages.statistics');
// })->name('statistics');

// Route::get('/profile', function () {
//     return view('pages.profile');
// })->name('profile');

// Route::get('/favorite', function () {
//     return view('pages.favorite');
// })->name('favorite');

// Route::get('/home', function () {
//     return view('pages.home');
// })->name('home');

// Route::get('/liga', function () {
//     return view('pages.liga');
// })->name('liga');

// Route::get('/tickets', function () {
//     return view('pages.tickets');
// })->name('tickets');

// Route::get('/ticket/buy', function () {
//     return view('pages.ticket-buy');
// })->name('ticket-buy');

// Route::get('/video', function () {
//     return view('pages.video');
// })->name('video');

// Route::get('/newspaper', function () {
//     return view('pages.newspaper');
// })->name('newspaper');

// Route::get('/chat', function () {
//     return view('pages.chat');
// })->name('chat');

// Route::get('/game', function () {
//     return view('pages.game');
// })->name('game');

// Route::get('/store', function () {
//     return view('pages.store');
// })->name('store');

// Route::get('/ai', function () {
//     return view('pages.ai');
// })->name('ai');

// Route::get('/setting', function () {
//     return view('pages.setting');
// })->name('setting');

// Route::get('/user/personal-data', function () {
//     return view('pages.personal-data');
// })->name('personal-data');


// Route::get('/user/invoice', function () {
//     return view('pages.invoice');
// })->name('invoice');

// Route::get('/groups', function () {
//     return view('pages.groups');
// })->name('groups');

// Route::get('/group-detail', function () {
//     return view('pages.group-detail');
// })->name('group-detail');