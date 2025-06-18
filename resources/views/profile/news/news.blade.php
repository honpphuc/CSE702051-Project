<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức - DatSanBong</title>

    <!-- CSS External -->
    <link rel="stylesheet" href="style.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="tailwind-config.js"></script>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
</head>
<x-app-layout>

    <body class="bg-gray-50">
        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <!-- Page Title -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800 text-center">Tin tức bóng đá</h1>
                <p class="text-gray-600 mt-2 text-center">Cập nhật những tin tức mới nhất về bóng đá trong nước và quốc tế</p>
            </div>
            <!-- Featured News -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tin nổi bật</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-64">
                            <img src="https://th.bing.com/th/id/OIP.fkulnS9Ass_z8GnAkFNb5AHaEK?r=0&o=7rm=3&rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-primary text-white px-2 py-1 rounded text-sm">Tin quốc tế</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Ronaldo lập hat-trick, Al Nassr thắng đậm trong trận ra quân mùa giải mới</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 18/06/2025
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i> 2.345 lượt xem
                                </span>
                            </div>
                            <p class="text-gray-600 mb-4">Cristiano Ronaldo đã có màn trình diễn ấn tượng với 3 bàn thắng, giúp Al Nassr giành chiến thắng 5-0 trước đối thủ trong trận ra quân Saudi Pro League mùa giải 2025-2026.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-64">
                            <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2021/8/30/947975/Doi-Tuyen-Viet-Nam.jpg" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-primary text-white px-2 py-1 rounded text-sm">Tin trong nước</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Đội tuyển Việt Nam công bố danh sách sơ bộ cho AFF Cup 2025</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 17/06/2025
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i> 1.876 lượt xem
                                </span>
                            </div>
                            <p class="text-gray-600 mb-4">HLV Park Hang-seo đã công bố danh sách sơ bộ 35 cầu thủ cho chiến dịch AFF Cup 2025. Đáng chú ý có sự trở lại của nhiều gương mặt quen thuộc cùng một số tài năng trẻ mới nổi.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News List -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tin tức mới nhất</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- News Item 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="https://www.mancity.com/meta/media/b1pbz231/go3_4279-f-1920x1080-702a349.jpg" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Manchester City hoàn tất thương vụ chiêu mộ tiền đạo trẻ người Ai Cập</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 16/06/2025
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">Manchester City đã chính thức công bố việc chiêu mộ thành công tiền đạo trẻ người Ai Cập với giá 65 triệu euro, kèm theo các điều khoản phụ.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="https://static-images.vnncdn.net/files/publish/2023/10/23/hlv-ha-noi-1269.jpg" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-sm">V-League</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Hà Nội FC bổ nhiệm HLV mới sau chuỗi trận không thành công</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 15/06/2025
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">Sau chuỗi 5 trận không thắng, CLB Hà Nội FC đã quyết định chia tay HLV hiện tại và bổ nhiệm chiến lược gia người Hàn Quốc Kim Sang-sik làm tân HLV trưởng.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="https://cdn-img.thethao247.vn/upload/syanh/2019/11/13/salah-bi-loai-khoi-doi-hinh-dt-ai-cap-vi-chan-thuong1573602874.jpg" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-yellow-500 text-white px-2 py-1 rounded text-sm">Giải ngoại hạng</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Liverpool nhận tin dữ về chấn thương của Mohamed Salah</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 14/06/2025
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">Tiền đạo ngôi sao Mohamed Salah của Liverpool dự kiến sẽ phải nghỉ thi đấu ít nhất 4 tuần sau khi gặp chấn thương cơ đùi trong trận đấu với Arsenal.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="https://cafebiz.cafebizcdn.vn/162123310254002176/2023/1/9/tp-san-my-dinh-01-284-1673246945368-1673246945648911569408.jpg" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-green-500 text-white px-2 py-1 rounded text-sm">Cơ sở vật chất</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Sân vận động Mỹ Đình sẽ được nâng cấp để đăng cai các trận đấu quốc tế lớn</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 13/06/2025
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">Bộ Văn hóa, Thể thao và Du lịch vừa phê duyệt dự án nâng cấp SVĐ Quốc gia Mỹ Đình với tổng kinh phí 1.200 tỷ đồng, dự kiến hoàn thành vào cuối năm 2026.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 5 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="https://tdigroup.vn/wp-content/uploads/2019/11/slide-pvf-1.jpg" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-purple-500 text-white px-2 py-1 rounded text-sm">Đào tạo trẻ</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">PVF khai trương trung tâm đào tạo bóng đá trẻ mới tại Đà Nẵng</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 12/06/2025
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">Trung tâm Đào tạo Bóng đá trẻ PVF vừa khai trương cơ sở mới tại Đà Nẵng với cơ sở vật chất hiện đại và đội ngũ HLV được đào tạo từ các học viện hàng đầu châu Âu.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 6 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="https://houseinhanoi.vn/wp-content/uploads/2019/09/vietnamese-people.jpg " alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute top-3 left-3 bg-pink-500 text-white px-2 py-1 rounded text-sm">Cổ động viên</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Vé xem trận Việt Nam - Thái Lan tại AFF Cup 2025 cháy hàng chỉ sau 30 phút mở bán</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 11/06/2025
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">Toàn bộ vé xem trận đấu giữa đội tuyển Việt Nam và Thái Lan trong khuôn khổ AFF Cup 2025 đã được bán hết chỉ sau 30 phút kể từ khi mở bán trực tuyến.</p>
                            <a href="#" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video News -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Video nổi bật</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Video 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-48">
                            <img src="https://vnn-imgs-f.vgcloud.vn/2020/11/04/20/hanoi-quanghai.jpg" alt="Video bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-white bg-opacity-80 flex items-center justify-center">
                                    <i class="ri-play-fill ri-xl text-primary"></i>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">03:45</div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-base font-bold text-gray-800"><a href="https://www.youtube.com/watch?v=DMaHcJ9aM9I">Top 5 bàn thắng đẹp nhất vòng 15 V-League 2025</a></h3>
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 10/06/2025
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i> 1.2k
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-48">
                            <img src="https://th.bing.com/th/id/OIP.XZg22-epk4dKibzfyUoesQHaEK?r=0&rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Video bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-white bg-opacity-80 flex items-center justify-center">
                                    <i class="ri-play-fill ri-xl text-primary"></i>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">05:23</div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-base font-bold text-gray-800"><a href="https://www.youtube.com/shorts/GwqCkgrO3Hg">Phỏng vấn HLV Luis Enrique sau trận thắng INTER MILAN</a></h3>
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 09/06/2025
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i> 856
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-48">
                            <img src="https://manayi.vn/wp-content/uploads/cac-bai-tap-bong-da-chuyen-nghiep.jpg" alt="Video bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-white bg-opacity-80 flex items-center justify-center">
                                    <i class="ri-play-fill ri-xl text-primary"></i>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">08:17</div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-base font-bold text-gray-800"><a href="https://www.youtube.com/watch?v=1HIg1-uNfjs">Hướng dẫn kỹ thuật rê bóng qua người như Quang Hải</a></h3>
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 08/06/2025
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i> 1.5k
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Video 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-48">
                            <img src="https://d4f7y6nbupj5z.cloudfront.net/wp-content/uploads/2025/05/PSG-Champs-1-1024x734.jpeg" alt="Video bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-white bg-opacity-80 flex items-center justify-center">
                                    <i class="ri-play-fill ri-xl text-primary"></i>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">04:52</div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-base font-bold text-gray-800"><a href="https://www.youtube.com/watch?v=tU99_CZthZo">Tổng hợp trận đấu: PSG 5-0 INTER MILAN</a></h3>
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i> 07/06/2025
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i> 2.3k
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="script.js"></script>
    </body>
</x-app-layout>
</html>