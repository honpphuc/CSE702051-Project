<x-app>
    <div class="container mt-4">
        <h2>Lịch sử đặt sân</h2>

        @if($history->isEmpty())
            <p>Bạn chưa có lịch sử đặt sân nào.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sân</th>
                        <th>Ngày</th>
                        <th>Giờ</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $item)
                    <tr>
                        <td>{{ $item->san->ten_san ?? 'Không rõ' }}</td>
                        <td>{{ $item->ngay ?? '' }}</td>
                        <td>{{ $item->gio ?? '' }}</td>
                        <td>{{ $item->trang_thai ?? '' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app>