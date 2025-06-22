@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <h1 class="mb-4">Bảng điều khiển</h1>
    <div class="alert alert-success">Chào mừng bạn đến trang quản trị!</div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Tổng người dùng</h5>
                    <p class="card-text fs-3">{{ $userCount ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title">Tổng sân bóng</h5>
                    <p class="card-text fs-3">{{ $fieldCount ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-warning shadow">
                <div class="card-body">
                    <h5 class="card-title">Tổng lượt đặt sân</h5>
                    <p class="card-text fs-3">{{ $bookingCount ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
