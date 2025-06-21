<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Method to create a new booking
    public function create(Request $request)
    {
        $request->validate([
            'field_id' => 'required|exists:fields,id',
            'booking_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'user_id' => 'required|exists:users,id',
            'total_price' => 'required|numeric',
        ]);

        $booking = Booking::create([
            'field_id' => $request->field_id,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'user_id' => $request->user_id,
            'total_price' => $request->total_price,
            'status' => $request->status ?? 'pending',
        ]);

        return response()->json($booking, 201);
    }

    // Method to update an existing booking
    public function update(Request $request, $id)
    {
        $request->validate([
            'field_id' => 'sometimes|exists:fields,id',
            'booking_date' => 'sometimes|date',
            'start_time' => 'sometimes|date_format:H:i',
            'end_time' => 'sometimes|date_format:H:i|after:start_time',
            'total_price' => 'sometimes|numeric',
            'status' => 'sometimes|string',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return response()->json($booking);
    }

    // Method to retrieve a booking by ID
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return response()->json($booking);
    }

    // Method to retrieve all bookings
    public function index()
    {
        $bookings = Booking::all();
        return response()->json($bookings);
    }
}