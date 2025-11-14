<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DonHangSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('don_hangs')->delete();
        DB::table('don_hangs')->truncate();

        // Tạo dữ liệu đơn hàng mẫu
        $donHangs = [
            [
                'ma_don_hang' => 'DH001',
                'id_khach_hang' => 1,
                'id_dia_chi' => 1,
                'tong_tien' => 858000, // 2 sản phẩm: 429000 + 429000
                'ma_code_giam' => 'DISCOUNT01',
                'so_tien_giam' => 85800, // 10% của 858000
                'so_tien_thanh_toan' => 772200,
                'is_thanh_toan' => 1,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'ma_don_hang' => 'DH002',
                'id_khach_hang' => 2,
                'id_dia_chi' => 2,
                'tong_tien' => 1990000, // 1 sản phẩm Samsung Galaxy Z Flip 5
                'ma_code_giam' => 'DISCOUNT02',
                'so_tien_giam' => 398000, // 20% của 1990000
                'so_tien_thanh_toan' => 1592000,
                'is_thanh_toan' => 1,
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'ma_don_hang' => 'DH003',
                'id_khach_hang' => 1,
                'id_dia_chi' => 1,
                'tong_tien' => 3290000, // iPhone 15 Plus
                'ma_code_giam' => null,
                'so_tien_giam' => 0,
                'so_tien_thanh_toan' => 3290000,
                'is_thanh_toan' => 0,
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'ma_don_hang' => 'DH004',
                'id_khach_hang' => 2,
                'id_dia_chi' => 2,
                'tong_tien' => 1058000, // 2 sản phẩm: 529000 + 529000
                'ma_code_giam' => 'DISCOUNT03',
                'so_tien_giam' => 158700, // 15% của 1058000
                'so_tien_thanh_toan' => 899300,
                'is_thanh_toan' => 1,
                'created_at' => Carbon::now()->subHours(12),
                'updated_at' => Carbon::now()->subHours(12),
            ],
            [
                'ma_don_hang' => 'DH005',
                'id_khach_hang' => 1,
                'id_dia_chi' => 1,
                'tong_tien' => 2100000, // Laptop HP Victus
                'ma_code_giam' => 'DISCOUNT05',
                'so_tien_giam' => 525000, // 25% của 2100000
                'so_tien_thanh_toan' => 1575000,
                'is_thanh_toan' => 1,
                'created_at' => Carbon::now()->subHours(6),
                'updated_at' => Carbon::now()->subHours(6),
            ],
            [
                'ma_don_hang' => 'DH006',
                'id_khach_hang' => 2,
                'id_dia_chi' => 2,
                'tong_tien' => 988000, // 2 sản phẩm: 494000 + 494000
                'ma_code_giam' => null,
                'so_tien_giam' => 0,
                'so_tien_thanh_toan' => 988000,
                'is_thanh_toan' => 0,
                'created_at' => Carbon::now()->subHours(2),
                'updated_at' => Carbon::now()->subHours(2),
            ],
            [
                'ma_don_hang' => 'DH007',
                'id_khach_hang' => 1,
                'id_dia_chi' => 1,
                'tong_tien' => 2560000, // Laptop Acer Nitro 5
                'ma_code_giam' => 'DISCOUNT09',
                'so_tien_giam' => 1024000, // 40% của 2560000
                'so_tien_thanh_toan' => 1536000,
                'is_thanh_toan' => 1,
                'created_at' => Carbon::now()->subHours(1),
                'updated_at' => Carbon::now()->subHours(1),
            ],
            [
                'ma_don_hang' => 'DH008',
                'id_khach_hang' => 2,
                'id_dia_chi' => 2,
                'tong_tien' => 876000, // 3 sản phẩm phụ kiện
                'ma_code_giam' => 'DISCOUNT01',
                'so_tien_giam' => 87600, // 10% của 876000
                'so_tien_thanh_toan' => 788400,
                'is_thanh_toan' => 1,
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now()->subMinutes(30),
            ],
        ];

        DB::table('don_hangs')->insert($donHangs);
    }
}
