@extends('layouts.admin')
@section('title', 'Quản lý sân bóng')
@section('content')
    <h1 class="mb-4">Quản lý sân bóng</h1>
    <a href="{{ route('admin.fields.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Thêm
        sân mới</a>
    <table class="table-auto w-full border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sân</th>
                <th>Địa chỉ</th>
                <th>Giá/giờ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fields as $field)
                <tr>
                    <td>{{ $field->id }}</td>
                    <td>{{ $field->name }}</td>
                    <td>{{ $field->address }}</td>
                    <td>{{ number_format($field->price_per_hour) }} đ</td>
                    <td>
                        <a href="{{ route('admin.fields.edit', $field->id) }}">Sửa</a>
                        <form action="{{ route('admin.fields.destroy', $field->id) }}" method="POST"
                            style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
