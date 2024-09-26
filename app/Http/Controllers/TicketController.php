<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function showDetail()
    {
        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('index')],
            ['name' => 'Tickets', 'url' => route('index')],
            ['name' => 'Register Form', 'url' => '']
        ];

        return view('pages.ticket-detail', compact('breadcrumbs'));
    }
}
