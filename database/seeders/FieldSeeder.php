<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    public function run()
    {
        DB::table('fields')->insert([
            [
                'id' => 1,
                'name' => 'Sân A',
                'type' => '5 người',
                'address' => '123 Đường A, Quận 1',
                'description' => 'Sân cỏ nhân tạo, có mái che',
                'price_per_hour' => 300000,
                'image' => 'https://th.bing.com/th/id/OIP.zgwVtX99UefzAvOlCeMW5gHaE7?w=728&h=485&rs=1&pid=ImgDetMain    ', // Thêm đường dẫn ảnh nếu cần
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,  
                'name' => 'Sân B',
                'type' => '7 người',
                'address' => '456 Đường B, Quận 2',
                'description' => 'Sân rộng, thoáng mát',
                'price_per_hour' => 400000,
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fvi.wikipedia.org%2Fwiki%2FOld_Trafford&psig=AOvVaw0A_ZeC90h4-kOr693Ca04F&ust=1750678020621000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOja3oT2hI4DFQAAAAAdAAAAABAL', 
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Sân C',
                'type' => 'Futsal',
                'address' => '789 Đường C, Quận 3',
                'description' => 'Sân futsal tiêu chuẩn',
                'price_per_hour' => 350000,
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fbongda24h.vn%2Ftieu-su%2Fsan-van-dong-etihad-517-260754.html&psig=AOvVaw0NWOhssb5OhpO7DFb0UwGt&ust=1750678106151000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCKi96qb2hI4DFQAAAAAdAAAAABAE',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
