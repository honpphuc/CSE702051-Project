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
        // Lấy danh sách đặt sân để hiển thị lịch sử đặt sân
        $bookings = Booking::all();
        $bookedTimes = [];
        foreach ($bookings as $booking) {
            $bookedTimes[$booking->field_id][$booking->booking_date][] = [
                'start' => $booking->start_time,
                'end' => $booking->end_time,
            ];
        }
        return view('components.partials.booking', [
            'fields' => $fields,
            'bookedTimes' => $bookedTimes,
        ]);
    }

    // Lưu booking mới từ form đặt sân
    public function store(Request $request)
    {
        // 1. Validate dữ liệu gửi lên từ form đặt sân
        $request->validate([
            'field_id' => 'required|exists:fields,id',      // Phải chọn sân hợp lệ
            'booking_date' => 'required|date',              // Ngày đặt sân hợp lệ
            'start_time' => 'required',                     // Giờ bắt đầu không được bỏ trống
            'end_time' => 'required',                       // Giờ kết thúc không được bỏ trống
            'total_price' => 'required|numeric',            // Tổng tiền phải là số
        ]);

        // 2. Kiểm tra trùng lịch đặt sân
        $exists = \App\Models\Booking::where('field_id', $request->field_id)
            ->where('booking_date', $request->booking_date)
            ->where(function($q) use ($request) {
                // Trùng nếu có bất kỳ booking nào giao nhau với khung giờ mới
                $q->whereBetween('start_time', [$request->start_time, $request->end_time])
                  ->orWhereBetween('end_time', [$request->start_time, $request->end_time])
                  ->orWhere(function($q2) use ($request) {
                      $q2->where('start_time', '<=', $request->start_time)
                         ->where('end_time', '>=', $request->end_time);
                  });
            })
            ->exists();

        // 3. Nếu trùng lịch, trả về lỗi và giữ lại dữ liệu form
        if ($exists) {
            return redirect()->back()
                ->withInput() // Giữ lại dữ liệu đã nhập
                ->withErrors(['booking_time' => 'Đã bị trùng lịch đặt sân!']);
        }

        // 4. Nếu không trùng, lưu booking mới vào database
        \App\Models\Booking::create([
            'field_id' => $request->field_id,               // ID sân
            'booking_date' => $request->booking_date,       // Ngày đặt
            'start_time' => $request->start_time,           // Giờ bắt đầu
            'end_time' => $request->end_time,               // Giờ kết thúc
            'user_id' => auth()->id(),                      // ID người dùng hiện tại
            'total_price' => $request->total_price,         // Tổng tiền
            'status' => 'pending',                          // Trạng thái mặc định
        ]);

        // 5. Chuyển về trang trước và báo thành công
        return redirect()->back()->with('success', 'Đặt sân thành công!');
    }
}