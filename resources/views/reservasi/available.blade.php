@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">{{ $title }}</h1>
    <div class="row">
        @foreach($rooms as $room)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/' . $room->image) }}" class="card-img-top" alt="{{ $room->type }}">
                <div class="card-body">
                    <h5 class="card-title">{{ ucfirst($room->type) }} Room</h5>
                    <p class="card-text">
                        <strong>Facilities:</strong> {{ implode(', ', $room->facilities) }}<br>
                        <strong>Price:</strong> ${{ number_format($room->price, 2) }} per night
                    </p>
                    <a href="{{ route('reservasi.create', $room->id) }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
