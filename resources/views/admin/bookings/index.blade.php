@extends('layouts.admin')  
@section('title', 'Quản lý đặt sân')
@section('content')

    <h1 class="mb-4">Quản lý đặt sân</h1>
    <a href="{{ route('admin.bookings.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Thêm booking</a>
    <table class="table-auto w-full border">
        <thead>
            <tr>
                <th>ID</th><th>Người đặt</th><th>Sân</th><th>Ngày</th><th>Giờ</th><th>Tổng tiền</th><th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->user->name ?? 'N/A' }}</td>
                <td>{{ $booking->field->name ?? 'N/A' }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                <td>{{ number_format($booking->total_price) }} đ</td>
                <td>
                    <a href="{{ route('admin.bookings.edit', $booking->id) }}">Sửa</a>
                    <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Xóa booking này?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection