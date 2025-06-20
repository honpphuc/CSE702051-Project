<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    public function run()
    {
        Video::create([
            'title' => 'Top 5 bàn thắng đẹp nhất vòng 15 V-League 2025',
            'link' => 'https://www.youtube.com/watch?v=DMaHcJ9aM9I',
            'thumbnail' => 'https://vnn-imgs-f.vgcloud.vn/2020/11/04/20/hanoi-quanghai.jpg',
            'duration' => '03:45',
            'date_posted' => '2025-06-10',
            'views' => 1200,
        ]);

        Video::create([
            'title' => 'Hướng dẫn rê bóng như Quang Hải',
            'link' => 'https://www.youtube.com/watch?v=1HIg1-uNfjs',
            'thumbnail' => 'https://manayi.vn/wp-content/uploads/cac-bai-tap-bong-da-chuyen-nghiep.jpg',
            'duration' => '08:17',
            'date_posted' => '2025-06-08',
            'views' => 1500,
        ]);
        Video::insert([
            [
                'title' => 'Tổng hợp trận đấu: PSG 5-0 INTER MILAN',
                'link' => 'https://www.youtube.com/watch?v=tU99_CZthZo',
                'thumbnail' => 'https://d4f7y6nbupj5z.cloudfront.net/wp-content/uploads/2025/05/PSG-Champs-1-1024x734.jpeg',
                'duration' => '04:52',
                'date_posted' => '2025-06-07',
                'views' => 2300,
            ],
            [
                'title' => 'Vé xem trận Việt Nam - Thái Lan cháy hàng sau 30 phút',
                'link' => 'https://vietnamnet.vn/ve-chung-ket-viet-thai-lan...',
                'thumbnail' => 'https://houseinhanoi.vn/wp-content/uploads/2019/09/vietnamese-people.jpg',
                'duration' => '02:41',
                'date_posted' => '2025-06-11',
                'views' => 1655,
            ],
            [
                'title' => 'PVF khai trương trung tâm đào tạo trẻ tại Đà Nẵng',
                'link' => 'https://thethao247.vn/432-trung-tam-dao-tao-bong-da-tre-pvf...',
                'thumbnail' => 'https://tdigroup.vn/wp-content/uploads/2019/11/slide-pvf-1.jpg',
                'duration' => '06:18',
                'date_posted' => '2025-06-12',
                'views' => 1120,
            ],
        ]);
    }
}
