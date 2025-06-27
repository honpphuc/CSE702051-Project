<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/contact-info.css') }}">

    @php
        // Demo dữ liệu liên hệ (thay bằng dữ liệu từ controller khi dùng thực tế)
        $contacts = [
            ['name' => 'Lee Hồnn Foot', 'email' => 'doibuonjqk@gmail.com', 'phone' => '123456789', 'position' => 'Trưởng dự án'],
            ['name' => 'Nguyễn Văn A', 'email' => 'nguyenvana@gmail.com', 'phone' => '0987654321', 'position' => 'Thành viên'],
            ['name' => 'Trần Thị B', 'email' => 'tranthib@gmail.com', 'phone' => '0911222333', 'position' => 'Thành viên'],
            ['name' => 'Phạm Văn C', 'email' => 'phamvanc@gmail.com', 'phone' => '0909090909', 'position' => 'Thành viên'],
        ];
        $search = request('search');
        if ($search) {
            $contacts = array_filter($contacts, function($c) use ($search) {
                return stripos($c['name'], $search) !== false
                    || stripos($c['email'], $search) !== false
                    || stripos($c['phone'], $search) !== false
                    || stripos($c['position'], $search) !== false;
            });
        }
    @endphp

    <div class="contact-reason">
        <img src="{{ asset('img/vietnam-flag.png') }}" alt="Thắc mắc" class="faq-img">
        <strong>Lý do liên hệ:</strong>
        <ul>
            <li>Hỗ trợ kỹ thuật hoặc thắc mắc về hệ thống.</li>
            <li>Liên hệ hợp tác, quảng cáo hoặc tài trợ.</li>
            <li>Góp ý, phản hồi về nội dung hoặc chức năng.</li>
        </ul>
    </div>

    <!-- <div class="search-box">
        <form method="GET">
            <input type="text" name="search" placeholder="Tìm kiếm liên hệ..." value="{{ request('search') }}">
            <button type="submit">Tìm kiếm</button>
        </form>
    </div> -->

    <table class="contact-table">
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Chức vụ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Liên hệ</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact['name'] }}</td>
                <td>{{ $contact['position'] }}</td>
                <td>{{ $contact['email'] }}</td>
                <td>{{ $contact['phone'] }}</td>
                <td>
                    <a href="mailto:{{ $contact['email'] }}" class="btn">Email</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align:center;">Không tìm thấy liên hệ nào.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</x-app-layout>
