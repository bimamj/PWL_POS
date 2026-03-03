<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'user_id' => 1, 'barang_id' => 1, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 2, 'user_id' => 1, 'barang_id' => 2, 'stok_jumlah' => 150, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 3, 'user_id' => 1, 'barang_id' => 3, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 4, 'user_id' => 1, 'barang_id' => 4, 'stok_jumlah' => 250, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 5, 'user_id' => 1, 'barang_id' => 5, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 6, 'user_id' => 1, 'barang_id' => 6, 'stok_jumlah' => 150, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 7, 'user_id' => 1, 'barang_id' => 7, 'stok_jumlah' => 100, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 8, 'user_id' => 1, 'barang_id' => 8, 'stok_jumlah' => 150, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 9, 'user_id' => 1, 'barang_id' => 9, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 10, 'user_id' => 1, 'barang_id' => 10, 'stok_jumlah' => 150, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 11, 'user_id' => 1, 'barang_id' => 11, 'stok_jumlah' => 100, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 12, 'user_id' => 1, 'barang_id' => 12, 'stok_jumlah' => 250, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 13, 'user_id' => 1, 'barang_id' => 13, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 14, 'user_id' => 1, 'barang_id' => 14, 'stok_jumlah' => 150, 'stok_tanggal' => '2024-06-01'],
            ['stok_id' => 15, 'user_id' => 1, 'barang_id' => 15, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-06-01'],
        ];

        DB::table('t_stok')->insert($data);
    }
}
