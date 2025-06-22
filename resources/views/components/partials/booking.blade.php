<x-app-layout>
    <!-- Nhúng file JS modal nếu cần (có thể bỏ nếu dùng Alpine.js hoàn toàn) -->
    <script src="{{ asset('js/booking-modal.js') }}"></script>

    <main class="py-10 bg-gray-50">
        <div class="container mx-auto px-4">

            <!-- ==========================
                 DANH SÁCH SÂN BÓNG NỔI BẬT
            =========================== -->
            <div class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Sân bóng nổi bật</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($fields as $field)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden" data-field-id="{{ $field->id }}">
                            <div class="relative">
                                <!-- Ảnh sân bóng -->
                                <img
                                    src="{{ $field->image ?? 'https://via.placeholder.com/400x250?text=No+Image' }}"
                                    alt="{{ $field->name }}"
                                    class="w-full h-48 object-cover object-top" />
                                <!-- Trạng thái hoạt động -->
                                @if($field->active)
                                    <div class="absolute top-2 left-2 bg-green-600 text-white text-sm px-2 py-1 rounded">
                                        Đang hoạt động
                                    </div>
                                @else
                                    <div class="absolute top-2 left-2 bg-gray-400 text-white text-sm px-2 py-1 rounded">
                                        Tạm dừng
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <!-- Tên, địa chỉ, loại sân, mô tả -->
                                <h3 class="text-xl font-semibold mb-1">{{ $field->name }}</h3>
                                <div class="text-sm text-gray-600 mb-2">{{ $field->address }}</div>
                                <div class="text-sm text-gray-600 mb-2">Loại sân: {{ $field->type ?? 'Chưa rõ' }}</div>
                                <div class="text-sm text-gray-600 mb-2">{{ $field->description }}</div>
                                <!-- Giá/giờ -->
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-sm text-gray-600">Giá/giờ:</span>
                                    <span class="font-semibold text-primary">{{ number_format($field->price_per_hour) }} đ</span>
                                </div>
                                <!-- Nút mở modal đặt sân -->
                                <button class="w-full bg-primary text-white py-2 rounded dat-san-btn">
                                    Đặt sân
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- ==========================
                 MODAL ĐẶT SÂN (Alpine.js)
            =========================== -->
            <div id="booking-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-lg shadow-xl w-full max-w-lg max-h-[90vh] overflow-auto">
                    <div class="p-6">
                        <!-- Hiển thị lỗi trùng lịch đặt sân nếu có -->
                        @if($errors->has('booking_time'))
                            <div class="text-red-600 mb-2">{{ $errors->first('booking_time') }}</div>
                        @endif

                        <!-- Modal đặt sân dùng Alpine.js để tính tiền tự động -->
                        <div
                            x-data="{
                                pricePerHour: 0,         // Giá thuê sân mỗi giờ
                                startTime: '',           // Giờ bắt đầu
                                endTime: '',             // Giờ kết thúc
                                totalPrice: 0,           // Tổng tiền
                                selectedFieldId: '',     // ID sân đã chọn
                                // Hàm tính tổng tiền khi thay đổi giờ hoặc sân
                                calcTotal() {
                                    if(this.startTime && this.endTime && this.pricePerHour) {
                                        const [sh,sm] = this.startTime.split(':').map(Number);
                                        const [eh,em] = this.endTime.split(':').map(Number);
                                        let hours = eh + em/60 - sh - sm/60;
                                        if(hours > 0) {
                                            this.totalPrice = Math.round(hours * this.pricePerHour);
                                        } else {
                                            this.totalPrice = 0;
                                        }
                                    } else {
                                        this.totalPrice = 0;
                                    }
                                }
                            }"
                        >
                            <form method="POST" action="{{ route('bookings.store') }}">
                                @csrf
                                <!-- Trường ẩn lưu ID sân -->
                                <input type="hidden" name="field_id" :value="selectedFieldId">
                                <div class="mb-4">
                                    <label>Chọn sân</label>
                                    <!-- Khi chọn sân sẽ lấy giá/giờ từ data-price -->
                                    <select name="field_id"
                                        class="w-full border rounded p-2"
                                        x-on:change="
                                            pricePerHour = $event.target.selectedOptions[0].dataset.price;
                                            selectedFieldId = $event.target.value;
                                            calcTotal();
                                        "
                                        required>
                                        <option value="">-- Chọn sân --</option>
                                        @foreach($fields as $field)
                                            <option value="{{ $field->id }}" data-price="{{ $field->price_per_hour }}">
                                                {{ $field->name }} - {{ $field->address }} ({{ number_format($field->price_per_hour) }}đ/giờ)
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label>Ngày đặt sân</label>
                                    <input type="date" name="booking_date" class="w-full border rounded p-2" required>
                                </div>
                                <div class="mb-4">
                                    <label>Giờ bắt đầu</label>
                                    <input type="time" name="start_time" class="w-full border rounded p-2"
                                        x-model="startTime" @change="calcTotal" required>
                                </div>
                                <div class="mb-4">
                                    <label>Giờ kết thúc</label>
                                    <input type="time" name="end_time" class="w-full border rounded p-2"
                                        x-model="endTime" @change="calcTotal" required>
                                </div>
                                <div class="mb-4">
                                    <label>Tổng tiền (VNĐ)</label>
                                    <!-- Tổng tiền tự động tính, chỉ đọc -->
                                    <input type="number" name="total_price" class="w-full border rounded p-2 bg-gray-100"
                                        :value="totalPrice" readonly required>
                                </div>
                                <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Xác nhận đặt sân</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ==========================
         ĐẨY DỮ LIỆU SÂN SANG JS (nếu cần dùng JS ngoài)
    =========================== -->
    <script>
        window.fieldsData = @json($fields);
    </script>

    <!-- ==========================
         TỰ ĐỘNG MỞ MODAL KHI CÓ LỖI ĐẶT SÂN
    =========================== -->
    @if($errors->has('booking_time'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('booking-modal').classList.remove('hidden');
        });
    </script>
    @endif
</x-app-layout>
