@extends('layouts.app')

@section('title', 'Thông Tin Liên Hệ')

@section('content')
<div class="container">
    <h2>Thông Tin Liên Hệ Cá Nhân</h2>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/avatar.png') }}" class="img-fluid rounded-start" alt="Avatar">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lee Hồnn Foot</h5>
                    <p class="card-text"><strong>Email:</strong> doibuonjqk@gmail.com</p>
                    <p class="card-text"><strong>Số điện thoại:</strong> 123456789</p>
                    <a href="mailto:doibuonjqk@gmail.com" class="btn btn-primary mt-2">Liên hệ qua Email</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
