<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Matches;
use App\Models\Seat;

class TicketController extends Controller
{
    public function showTickets()
    {
        // Fetch data from the matches table
        $matches = Ticket::with('getClub1')->get();

        // Add the breadcrumbs
        $breadcrumbs = [
            ['name' => 'Beranda', 'url' => route('index')],
        ];

        // Pass the data to the view
        return view('pages.tickets', compact('matches', 'breadcrumbs'));
    }

    public function showDetail($id)
    {
        $matches = Matches::findOrFail($id);
        $match_detail = Ticket::with('getClub1')->where($id);
        $getTicketTypes = Seat::all();

        // dd($match);
        $breadcrumbs = [
            ['name' => 'Beranda', 'url' => route('index')],
            ['name' => $matches->name, 'url' => route('match-detail', ['id' => $matches->id])],
            ['name' => 'Pembayaran', 'url' => url()->current()],
        ];

        return view('pages.ticket-detail', compact('breadcrumbs', 'match_detail', 'matches', 'getTicketTypes'));
    }
}