<header class="bg-white shadow-sm sticky top-0 z-50">
  <div class="container mx-auto px-4 py-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <a href="#" class="text-2xl font-['Pacifico'] text-primary">DatSanBong</a>
      </div>
      <nav class="hidden md:flex items-center space-x-8">
        <a href="#" class="text-gray-800 font-medium hover:text-primary transition">Trang chủ</a>
        <a href="#" class="text-gray-800 font-medium hover:text-primary transition">Đặt sân</a>
        <a href="#" class="text-gray-800 font-medium hover:text-primary transition">Giới thiệu</a>
        <a href="#" class="text-gray-800 font-medium hover:text-primary transition">Tin tức</a>
        <a href="#" class="text-gray-800 font-medium hover:text-primary transition">Liên hệ</a>
      </nav>
      <div class="flex items-center space-x-4">
        <button id="loginBtn" class="text-gray-800 hover:text-primary transition font-medium">
          <a href="{{route ('login') }}">Đăng nhập</a></button>
        <button id="registerBtn" class="bg-primary text-white py-2 px-4 rounded-button hover:bg-opacity-90 transition whitespace-nowrap">
          <a href="{{route ('register') }}">Đăng ký</a></button>
        <button class="md:hidden w-10 h-10 flex items-center justify-center">
          <i class="ri-menu-line text-xl"></i>
        </button>
      </div>
    </div>
  </div>
</header>
