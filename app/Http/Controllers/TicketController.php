<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function showTickets()
    {
        // Fetch data from the matches table
        $matches = Ticket::with('getClub1')->get();
        // dd($matches);
        // Pass the data to the view
        return view('pages.tickets', compact('matches'));
    }

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
