<nav class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <h2 class="text-xl font-bold mb-6">Quản trị</h2>
    <ul>
        <li class="mb-2"><a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a></li>
        <li class="mb-2"><a href="{{ route('admin.users.index') }}" class="hover:underline">Người dùng</a></li>
        <li class="mb-2"><a href="{{ route('admin.fields.index') }}">Sân bóng</a></li>
        <li class="mb-2"><a href="{{ route('admin.bookings.index') }}">Đặt sân</a></li>
    </ul>
</nav>