<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChiTietDonHangSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chi_tiet_don_hangs')->delete();
        DB::table('chi_tiet_don_hangs')->truncate();

        // Tạo dữ liệu chi tiết đơn hàng mẫu
        $chiTietDonHangs = [
            // Đơn hàng DH001 - 2 sản phẩm Xiaomi Redmi Note 13
            [
                'id_san_pham' => 1,
                'id_khach_hang' => 1,
                'id_dai_ly' => 1,
                'id_don_hang' => 1,
                'is_gio_hang' => 0,
                'don_gia' => 429000,
                'so_luong' => 2,
                'thanh_tien' => 858000,
                'ten_san_pham' => 'Điện Thoại Xiaomi Redmi Note 13 (6+128GB)',
                'tinh_trang' => 1,
                'ghi_chu' => 'Giao hàng trong ngày',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],

            // Đơn hàng DH002 - Samsung Galaxy Z Flip 5
            [
                'id_san_pham' => 5,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => 2,
                'is_gio_hang' => 0,
                'don_gia' => 1990000,
                'so_luong' => 1,
                'thanh_tien' => 1990000,
                'ten_san_pham' => 'Điện thoại Samsung Galaxy Z Flip 5 (8GB/512GB) - Độc quyền Online',
                'tinh_trang' => 1,
                'ghi_chu' => 'Hàng cao cấp, cần bảo quản cẩn thận',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],

            // Đơn hàng DH003 - iPhone 15 Plus
            [
                'id_san_pham' => 8,
                'id_khach_hang' => 1,
                'id_dai_ly' => 1,
                'id_don_hang' => 3,
                'is_gio_hang' => 0,
                'don_gia' => 3290000,
                'so_luong' => 1,
                'thanh_tien' => 3290000,
                'ten_san_pham' => 'iPhone 15 Plus - Hàng Chính Hãng VN/A',
                'tinh_trang' => 0,
                'ghi_chu' => 'Chờ thanh toán',
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],

            // Đơn hàng DH004 - 2 sản phẩm Tecno CAMON 20 Pro
            [
                'id_san_pham' => 6,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => 4,
                'is_gio_hang' => 0,
                'don_gia' => 529000,
                'so_luong' => 2,
                'thanh_tien' => 1058000,
                'ten_san_pham' => 'Điện thoại thông minh Tecno CAMON 20 Pro 8GB/256GB - Camera 64MP + 32MP',
                'tinh_trang' => 1,
                'ghi_chu' => 'Màu sắc theo yêu cầu khách hàng',
                'created_at' => Carbon::now()->subHours(12),
                'updated_at' => Carbon::now()->subHours(12),
            ],

            // Đơn hàng DH005 - Laptop HP Victus
            [
                'id_san_pham' => 13,
                'id_khach_hang' => 1,
                'id_dai_ly' => 1,
                'id_don_hang' => 5,
                'is_gio_hang' => 0,
                'don_gia' => 2100000,
                'so_luong' => 1,
                'thanh_tien' => 2100000,
                'ten_san_pham' => 'Laptop HP Victus 15-fb1022AX - 94F19PA (Ryzen 5 7535HS/RAM 16GB/512GB SSD/ Windows 11) - Bảo hành 12 tháng',
                'tinh_trang' => 1,
                'ghi_chu' => 'Cấu hình gaming cao cấp',
                'created_at' => Carbon::now()->subHours(6),
                'updated_at' => Carbon::now()->subHours(6),
            ],

            // Đơn hàng DH006 - 2 sản phẩm Xiaomi Redmi Pad
            [
                'id_san_pham' => 9,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => 6,
                'is_gio_hang' => 0,
                'don_gia' => 494000,
                'so_luong' => 2,
                'thanh_tien' => 988000,
                'ten_san_pham' => 'Máy tính bảng Xiaomi Redmi Pad (3GB/64GB)',
                'tinh_trang' => 0,
                'ghi_chu' => 'Chờ xác nhận đơn hàng',
                'created_at' => Carbon::now()->subHours(2),
                'updated_at' => Carbon::now()->subHours(2),
            ],

            // Đơn hàng DH007 - Laptop Acer Nitro 5
            [
                'id_san_pham' => 16,
                'id_khach_hang' => 1,
                'id_dai_ly' => 1,
                'id_don_hang' => 7,
                'is_gio_hang' => 0,
                'don_gia' => 2560000,
                'so_luong' => 1,
                'thanh_tien' => 2560000,
                'ten_san_pham' => 'Máy tính xách tay/ Laptop Acer Nitro 5 Tiger AN515-58-5935 (i5-12450H) (Đen)',
                'tinh_trang' => 1,
                'ghi_chu' => 'Laptop gaming chuyên nghiệp',
                'created_at' => Carbon::now()->subHours(1),
                'updated_at' => Carbon::now()->subHours(1),
            ],

            // Đơn hàng DH008 - 3 sản phẩm phụ kiện
            [
                'id_san_pham' => 20,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => 8,
                'is_gio_hang' => 0,
                'don_gia' => 611000,
                'so_luong' => 1,
                'thanh_tien' => 611000,
                'ten_san_pham' => 'Couple Trendy Brand Marvel Spider-Man Phone Case Compatible For IPhone 7Plus 11 14 15 13 12 Pro Max XR X XS MAX 7 8 6 6S Plus SE 2020 Cute Cartoon Anime Angel Eyes Case',
                'tinh_trang' => 1,
                'ghi_chu' => 'Ốp điện thoại Marvel',
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now()->subMinutes(30),
            ],
            [
                'id_san_pham' => 21,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => 8,
                'is_gio_hang' => 0,
                'don_gia' => 89000,
                'so_luong' => 1,
                'thanh_tien' => 89000,
                'ten_san_pham' => 'Bao chống sốc GEAR4 Apollo Apple Airpod Pro - Bảo vệ toàn diện, mỏng nhẹ tương thích sạc không dây, nhiều màu sắc thời trang',
                'tinh_trang' => 1,
                'ghi_chu' => 'Bao bảo vệ AirPods',
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now()->subMinutes(30),
            ],
            [
                'id_san_pham' => 22,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => 8,
                'is_gio_hang' => 0,
                'don_gia' => 209000,
                'so_luong' => 1,
                'thanh_tien' => 209000,
                'ten_san_pham' => 'Nút home phím home dành cho ip 6/ 6 Plus/ 6s/ 6s Plus',
                'tinh_trang' => 1,
                'ghi_chu' => 'Phụ kiện thay thế iPhone',
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now()->subMinutes(30),
            ],

            // Một số sản phẩm trong giỏ hàng (chưa đặt hàng)
            [
                'id_san_pham' => 7,
                'id_khach_hang' => 1,
                'id_dai_ly' => 1,
                'id_don_hang' => null,
                'is_gio_hang' => 1,
                'don_gia' => 3290000,
                'so_luong' => 1,
                'thanh_tien' => 3290000,
                'ten_san_pham' => 'iPhone 15 Pro Max - Hàng Chính Hãng VN/A',
                'tinh_trang' => 0,
                'ghi_chu' => 'Sản phẩm trong giỏ hàng',
                'created_at' => Carbon::now()->subMinutes(15),
                'updated_at' => Carbon::now()->subMinutes(15),
            ],
            [
                'id_san_pham' => 10,
                'id_khach_hang' => 2,
                'id_dai_ly' => 1,
                'id_don_hang' => null,
                'is_gio_hang' => 1,
                'don_gia' => 1190000,
                'so_luong' => 1,
                'thanh_tien' => 1190000,
                'ten_san_pham' => 'Samsung Galaxy Tab S9 FE Plus Wifi 128GB',
                'tinh_trang' => 0,
                'ghi_chu' => 'Sản phẩm trong giỏ hàng',
                'created_at' => Carbon::now()->subMinutes(10),
                'updated_at' => Carbon::now()->subMinutes(10),
            ],
        ];

        DB::table('chi_tiet_don_hangs')->insert($chiTietDonHangs);
    }
}
