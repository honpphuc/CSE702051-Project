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
            <!-- Tin nổi bật -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tin nổi bật</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($articles->take(2) as $article)
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-64">
                            <img src="{{ $article->image_url }}" alt="Tin tức bóng đá" class="w-full h-full object-cover object-top">
                            @if($article->category)
                            <div class="absolute top-3 left-3 bg-primary text-white px-2 py-1 rounded text-sm">
                                {{ $article->category }}
                            </div>
                            @endif
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $article->title }}</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i>
                                    {{ \Carbon\Carbon::parse($article->date_posted)->format('d/m/Y') }}
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i>
                                    {{ number_format($article->views) }} lượt xem
                                </span>
                            </div>
                            <p class="text-gray-600 mb-4">{{ $article->description }}</p>
                            @if($article->read_more_link)
                            <a href="{{ $article->read_more_link }}" class="inline-flex items-center text-primary hover:underline">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tin tức mới nhất -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tin tức mới nhất</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($articles->skip(2) as $article)
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 news-card">
                        <div class="relative h-48">
                            <img src="{{ $article->image_url }}" alt="Ảnh bài viết" class="w-full h-full object-cover object-top">
                            @if($article->category)
                            <div class="absolute top-3 left-3 bg-blue-500 text-white px-2 py-1 rounded text-sm">
                                {{ $article->category }}
                            </div>
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $article->title }}</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-3">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i>
                                    {{ \Carbon\Carbon::parse($article->date_posted)->format('d/m/Y') }}
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 line-clamp-3">{{ $article->description }}</p>
                            @if($article->read_more_link)
                            <a href="{{ $article->read_more_link }}" class="inline-flex items-center text-primary hover:underline text-sm">
                                Đọc tiếp <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


            <!-- Video nổi bật -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Video nổi bật</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($videos as $video)
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="relative h-48">
                            <img src="{{ $video->thumbnail }}" alt="Video bóng đá" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-white bg-opacity-80 flex items-center justify-center">
                                    <i class="ri-play-fill ri-xl text-primary"></i>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">
                                {{ $video->duration }}
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-base font-bold text-gray-800">
                                <a href="{{ $video->link }}" target="_blank">{{ $video->title }}</a>
                            </h3>
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <span class="flex items-center">
                                    <i class="ri-calendar-line mr-1"></i>
                                    {{ \Carbon\Carbon::parse($video->date_posted)->format('d/m/Y') }}
                                </span>
                                <span class="mx-2">•</span>
                                <span class="flex items-center">
                                    <i class="ri-eye-line mr-1"></i>
                                    {{ number_format($video->views) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </main>
        <script src="script.js"></script>
    </body>
</x-app-layout>

</html>