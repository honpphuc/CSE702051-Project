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
                'image' => 'images/field1.jpg', // Thêm đường dẫn ảnh nếu cần
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
                'image' => 'images/field2.jpg', 
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
                'image' => 'images/field3.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
