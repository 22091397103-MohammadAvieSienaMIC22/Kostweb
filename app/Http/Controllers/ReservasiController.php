<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Reservasi $reservasi)
    {
        return view('reservasi.index',[
            'title' => 'YUDISTIRA | Reservation',
            'reservasi' => $reservasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Reservasi $reservasi)
    {
        return view('reservasi.index',[
            'title' => 'YUDISTIRA | Reservation',
            'reservasi' => $reservasi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ReservasiData = $request->validate([
            'room_type' => 'required|in:small,medium,large',
            'firstname' =>  'required',
            'lastname' =>  'required',
            'email' =>  'required|email:dns',
            'phone' =>  'required|numeric|min:10',
            'guest' => 'required|in:2,4,6',
            'booking' => 'required|in:2 bulan,4 bulan,6 bulan',
            'checkin' => 'required|date',
            'checkout' => 'required|date',
        ]);

        Reservasi::create($ReservasiData);
        return redirect('/reservation')->with('success', 'Create Reservation Successfull!');
    }

    /**
     * Display the specified resource.
     */
    
    public function available()
{
    $rooms = [
        (object)[
            'type' => 'small',
            'image' => 'small_room.jpg',
            'facilities' => ['Free WiFi', 'Air Conditioning', 'Breakfast Included'],
            'price' => 50.00,
        ],
        (object)[
            'type' => 'medium',
            'image' => 'medium_room.jpg',
            'facilities' => ['Free WiFi', 'Air Conditioning', 'Breakfast Included', 'Mini Bar'],
            'price' => 75.00,
        ],
        (object)[
            'type' => 'large',
            'image' => 'large_room.jpg',
            'facilities' => ['Free WiFi', 'Air Conditioning', 'Breakfast Included', 'Mini Bar', 'Balcony'],
            'price' => 100.00,
        ],
    ];

    return view('reservasi.availableroom', [
        'title' => 'YUDISTIRA | Available Room',
        'rooms' => $rooms,
    ]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        //
    }
}
