<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::create([
            'title' => 'Ronaldo lập hat-trick, Al Nassr thắng đậm',
            'description' => 'Cristiano Ronaldo toả sáng với 3 bàn, giúp Al Nassr thắng 5-0 trong trận ra quân mùa giải mới.',
            'category' => 'Tin quốc tế',
            'date_posted' => '2025-06-18',
            'views' => 2345,
            'image_url' => 'https://th.bing.com/th/id/OIP.fkulnS9Ass_z8GnAkFNb5AHaEK',
            'read_more_link' => 'https://vnexpress.net/ronaldo-lap-hat-trick-cho-al-nassr-4646163.html',
        ]);

        Article::create([
            'title' => 'Đội tuyển Việt Nam công bố danh sách AFF Cup 2025',
            'description' => 'HLV Park Hang-seo triệu tập 35 cầu thủ, có nhiều gương mặt quen thuộc và sao trẻ.',
            'category' => 'Tin trong nước',
            'date_posted' => '2025-06-17',
            'views' => 1876,
            'image_url' => 'https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2021/8/30/947975/Doi-Tuyen-Viet-Nam.jpg',
            'read_more_link' => 'https://www.sportingnews.com/vn/bong-da/news/...',
        ]);
        Article::insert([
            [
                'title' => 'Liverpool nhận tin dữ về chấn thương của Mohamed Salah',
                'description' => 'Tiền đạo Mohamed Salah sẽ phải nghỉ ít nhất 4 tuần sau chấn thương cơ đùi khi gặp Arsenal.',
                'category' => 'Giải ngoại hạng',
                'date_posted' => '2025-06-14',
                'views' => 1540,
                'image_url' => 'https://cdn-img.thethao247.vn/upload/syanh/2019/11/13/salah-bi-loai-khoi-doi-hinh-dt-ai-cap-vi-chan-thuong1573602874.jpg',
                'read_more_link' => 'https://bongdaplus.vn/ngoai-hang-anh/...',
            ],
            [
                'title' => 'Hà Nội FC bổ nhiệm HLV mới sau chuỗi trận không thắng',
                'description' => 'CLB Hà Nội FC chia tay HLV cũ và trao cơ hội cho chiến lược gia Lê Đức Tuấn.',
                'category' => 'V-League',
                'date_posted' => '2025-06-15',
                'views' => 1678,
                'image_url' => 'https://static-images.vnncdn.net/files/publish/2023/10/23/hlv-ha-noi-1269.jpg',
                'read_more_link' => 'https://vnexpress.net/ha-noi-fc-lan-thu-chin-thay-hlv-4844045.html',
            ],
            [
                'title' => 'Sân vận động Mỹ Đình được nâng cấp chuẩn quốc tế',
                'description' => 'Bộ VH-TT&DL đã phê duyệt dự án nâng cấp SVĐ Mỹ Đình trị giá 1.200 tỷ đồng.',
                'category' => 'Cơ sở vật chất',
                'date_posted' => '2025-06-13',
                'views' => 1290,
                'image_url' => 'https://cafebiz.cafebizcdn.vn/162123310254002176/2023/1/9/tp-san-my-dinh-01-284-1673246945368.jpg',
                'read_more_link' => 'https://hanoionline.vn/san-van-dong-my-dinh...',
            ],
        ]);
    }
}
