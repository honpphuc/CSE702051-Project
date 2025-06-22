<x-app-layout>
    <script src="{{ asset('js/booking-modal.js') }}"></script>

    <main class="py-10 bg-gray-50">
        <div class="container mx-auto px-4">

            <!-- SÂN BÓNG NỔI BẬT -->
            <div class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Sân bóng nổi bật</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($fields as $field)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden" data-field-id="{{ $field->id }}">
                            <div class="relative">
                                <img
                                    src="{{ $field->image ?? 'https://via.placeholder.com/400x250?text=No+Image' }}"
                                    alt="{{ $field->name }}"
                                    class="w-full h-48 object-cover object-top" />
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
                                <h3 class="text-xl font-semibold mb-1">{{ $field->name }}</h3>
                                <div class="text-sm text-gray-600 mb-2">{{ $field->address }}</div>
                                <div class="text-sm text-gray-600 mb-2">Loại sân: {{ $field->type ?? 'Chưa rõ' }}</div>
                                <div class="text-sm text-gray-600 mb-2">{{ $field->description }}</div>
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-sm text-gray-600">Giá/giờ:</span>
                                    <span class="font-semibold text-primary">{{ number_format($field->price_per_hour) }} đ</span>
                                </div>
                                <button class="w-full bg-primary text-white py-2 rounded dat-san-btn">
                                    Đặt sân
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MODAL ĐẶT SÂN -->
            <div id="booking-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-lg shadow-xl w-full max-w-lg max-h-[90vh] overflow-auto">
                    <div class="p-6">
                        <form method="POST" action="{{ route('bookings.store') }}" id="booking-form">
                            @csrf
                            <h2 class="text-2xl font-bold mb-4 text-center">Đặt sân bóng</h2>

                            <div class="mb-4">
                                <label for="field_id" class="block font-semibold mb-1">Chọn sân</label>
                                <select name="field_id" id="field_id" class="w-full border border-gray-300 rounded p-2" required>
                                    <option value="">-- Chọn sân --</option>
                                    @foreach($fields as $field)
                                        <option value="{{ $field->id }}">{{ $field->name }} - {{ $field->address }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="booking_date" class="block font-semibold mb-1">Ngày đặt</label>
                                <input type="date" name="booking_date" id="booking_date"
                                       class="w-full border border-gray-300 rounded p-2"
                                       min="{{ date('Y-m-d') }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="start_time" class="block font-semibold mb-1">Giờ bắt đầu</label>
                                <input type="time" name="start_time" id="start_time"
                                       value="06:00 "
                                       class="w-full border border-gray-300 rounded p-2" required>
                            </div>

                            <div class="mb-4">
                                <label for="end_time" class="block font-semibold mb-1">Giờ kết thúc</label>
                                <input type="time" name="end_time" id="end_time"
                                       value="07:00"
                                       class="w-full border border-gray-300 rounded p-2" required>
                            </div>

                            <div class="mb-4">
                                <label for="total_price" class="block font-semibold mb-1">Tổng tiền (VNĐ)</label>
                                <input type="number" name="total_price" id="total_price"
                                       class="w-full border border-gray-300 rounded p-2"
                                       required min="0" step="1000" readonly>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="bg-primary text-white px-4 py-2 rounded">
                                    Xác nhận đặt sân
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Embed price data into JS -->
    <script>
        window.fieldsData = @json($fields);
    </script>
</x-app-layout>
