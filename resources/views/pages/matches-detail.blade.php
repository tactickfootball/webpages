@extends('layouts.app-plain')

@section('title', 'Detail Pertandingan - Tactick')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            @include('partials.breadcrumb')
        </div>
        <div class="card">
            <div class="card-body">
                <h1>Detail Pertandingan</h1>
                @foreach ($matches as $match)
                    <p>Nama Pertandingan: {{ $match->name }}</p>
                    <p>Deskripsi: {{ $match->description }}</p>
                    <p>Tim: <img src="{{ $match->getClub1->logo }}" alt="" height="100px"> VS <img
                            src="{{ $match->getClub2->logo }}" alt="" height="100px"></p>
                    <p>Venue: {{ $match->venue }}</p>
                    <p>Tanggal: {{ $match->date }}</p>
                    <p>Waktu: {{ $match->time }}</p>
                @endforeach
            </div>
        </div>
        <td class="col-lg-2">
            <a href="{{ route('ticket-detail', ['id' => $match->id]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </td>
    </div>
@endsection
