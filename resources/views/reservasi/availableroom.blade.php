@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">{{ $title }}</h1>
        <div class="row justify-content-center mt-4 mb-4">
            @foreach($rooms as $room)
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="{{ asset('images/' . $room->image) }}" class="card-img-top" alt="{{ $room->type }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ ucfirst($room->type) }} Room</h5>
                        <p class="card-text">
                            <strong>Facilities:</strong> {{ implode(', ', $room->facilities) }}<br>
                            <strong>Price:</strong> ${{ number_format($room->price, 2) }} per night
                        </p>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
