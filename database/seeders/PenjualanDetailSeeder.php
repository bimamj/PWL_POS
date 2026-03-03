<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Penjualan 1
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 3500, 'jumlah' => 2],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 9000, 'jumlah' => 1],

            // Penjualan 2
            ['penjualan_id' => 2, 'barang_id' => 3, 'harga' => 10000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 3],

            // Penjualan 3
            ['penjualan_id' => 3, 'barang_id' => 5, 'harga' => 5500, 'jumlah' => 2],
            ['penjualan_id' => 3, 'barang_id' => 6, 'harga' => 2500, 'jumlah' => 4],

            // Penjualan 4
            ['penjualan_id' => 4, 'barang_id' => 7, 'harga' => 20000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 8, 'harga' => 18000, 'jumlah' => 1],

            // Penjualan 5
            ['penjualan_id' => 5, 'barang_id' => 9, 'harga' => 27000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 10, 'harga' => 4000, 'jumlah' => 5],

            // Penjualan 6
            ['penjualan_id' => 6, 'barang_id' => 11, 'harga' => 5000, 'jumlah' => 3],
            ['penjualan_id' => 6, 'barang_id' => 12, 'harga' => 6500, 'jumlah' => 2],

            // Penjualan 7
            ['penjualan_id' => 7, 'barang_id' => 13, 'harga' => 4500, 'jumlah' => 4],
            ['penjualan_id' => 7, 'barang_id' => 14, 'harga' => 9000, 'jumlah' => 1],

            // Penjualan 8
            ['penjualan_id' => 8, 'barang_id' => 15, 'harga' => 19000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 1, 'harga' => 3500, 'jumlah' => 3],

            // Penjualan 9
            ['penjualan_id' => 9, 'barang_id' => 2, 'harga' => 9000, 'jumlah' => 2],
            ['penjualan_id' => 9, 'barang_id' => 3, 'harga' => 10000, 'jumlah' => 1],

            // Penjualan 10
            ['penjualan_id' => 10, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 5],
            ['penjualan_id' => 10, 'barang_id' => 5, 'harga' => 5500, 'jumlah' => 2],

            // Penjualan 11
            ['penjualan_id' => 11, 'barang_id' => 6, 'harga' => 2500, 'jumlah' => 6],
            ['penjualan_id' => 11, 'barang_id' => 7, 'harga' => 20000, 'jumlah' => 1],

            // Penjualan 12
            ['penjualan_id' => 12, 'barang_id' => 8, 'harga' => 18000, 'jumlah' => 1],
            ['penjualan_id' => 12, 'barang_id' => 9, 'harga' => 27000, 'jumlah' => 1],

            // Penjualan 13
            ['penjualan_id' => 13, 'barang_id' => 10, 'harga' => 4000, 'jumlah' => 4],
            ['penjualan_id' => 13, 'barang_id' => 11, 'harga' => 5000, 'jumlah' => 2],

            // Penjualan 14
            ['penjualan_id' => 14, 'barang_id' => 12, 'harga' => 6500, 'jumlah' => 3],
            ['penjualan_id' => 14, 'barang_id' => 13, 'harga' => 4500, 'jumlah' => 2],

            // Penjualan 15
            ['penjualan_id' => 15, 'barang_id' => 14, 'harga' => 9000, 'jumlah' => 1],
            ['penjualan_id' => 15, 'barang_id' => 15, 'harga' => 19000, 'jumlah' => 1],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}