@extends('layouts.app-plain')

@section('title', 'Detail Match - Tactick')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            @include('partials.breadcrumb')
        </div>
        <h1>Match Details</h1>
        @foreach ($matches as $match)
            <p>Date: {{ $match->date }}</p>
            <p>Time: {{ $match->time }}</p>
            <p>Teams: <img src="{{ $match->getClub1->logo }}" alt="" height="100px"> VS <img
                    src="{{ $match->getClub2->logo }}" alt="" height="100px"></p>
            <p>Name: {{ $match->name }}</p>
            <p>Description: {{ $match->description }}</p>

            <td class="col-lg-2">
                {{-- <a href="{{ route('ticket-detail') }}" class="btn btn-primary">Buy</a> --}}
                <a href="{{ route('ticket-detail', ['id' => $match->id]) }}" class="btn btn-primary">Buy</a>
            </td>
        @endforeach
    </div>
@endsection
