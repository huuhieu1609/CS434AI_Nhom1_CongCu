<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GiaoDichSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giao_dichs')->delete();
        DB::table('giao_dichs')->truncate();

        // Tạo dữ liệu giao dịch mẫu cho các đơn hàng đã thanh toán
        $giaoDichs = [
            [
                'creditAmount' => 772200,
                'description' => 'Thanh toán đơn hàng DH001 - 2x Xiaomi Redmi Note 13',
                'pos' => 'POS001',
                'id_don_hang' => 1,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'creditAmount' => 1592000,
                'description' => 'Thanh toán đơn hàng DH002 - Samsung Galaxy Z Flip 5',
                'pos' => 'POS002',
                'id_don_hang' => 2,
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'creditAmount' => 899300,
                'description' => 'Thanh toán đơn hàng DH004 - 2x Tecno CAMON 20 Pro',
                'pos' => 'POS001',
                'id_don_hang' => 4,
                'created_at' => Carbon::now()->subHours(12),
                'updated_at' => Carbon::now()->subHours(12),
            ],
            [
                'creditAmount' => 1575000,
                'description' => 'Thanh toán đơn hàng DH005 - Laptop HP Victus',
                'pos' => 'POS003',
                'id_don_hang' => 5,
                'created_at' => Carbon::now()->subHours(6),
                'updated_at' => Carbon::now()->subHours(6),
            ],
            [
                'creditAmount' => 1536000,
                'description' => 'Thanh toán đơn hàng DH007 - Laptop Acer Nitro 5',
                'pos' => 'POS002',
                'id_don_hang' => 7,
                'created_at' => Carbon::now()->subHours(1),
                'updated_at' => Carbon::now()->subHours(1),
            ],
            [
                'creditAmount' => 788400,
                'description' => 'Thanh toán đơn hàng DH008 - Phụ kiện điện thoại',
                'pos' => 'POS001',
                'id_don_hang' => 8,
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now()->subMinutes(30),
            ],
        ];

        DB::table('giao_dichs')->insert($giaoDichs);
    }
}
