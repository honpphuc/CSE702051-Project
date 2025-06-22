<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Hiển thị form đặt sân với danh sách sân
    public function showBookingForm()
    {
        $fields = Field::all();
        return view('components.partials.booking', compact('fields'));
    }

    // Lưu booking mới từ form đặt sân
    public function store(Request $request)
    {
        $request->validate([
            'field_id' => 'required|exists:fields,id',
            'booking_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'total_price' => 'required|numeric',
        ]);

        Booking::create([
            'field_id' => $request->field_id,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'user_id' => Auth::id(),
            'total_price' => $request->total_price,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Đặt sân thành công!');
    }
}