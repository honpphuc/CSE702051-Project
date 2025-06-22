<div class="sidebar p-4">
    <h2 class="fs-4 fw-bold text-white mb-4">Quản trị</h2>
    <ul class="nav flex-column mb-4">
        <li class="nav-item mb-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">Người dùng</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.fields.index') }}" class="nav-link {{ request()->routeIs('admin.fields.*') ? 'active' : '' }}">Sân bóng</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.bookings.index') }}" class="nav-link {{ request()->routeIs('admin.bookings.*') ? 'active' : '' }}">Đặt sân</a>
        </li>
    </ul>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger mt-4">Đăng xuất</button>
    </form>
</div>