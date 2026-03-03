<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'penjualan_kode' => 'PJ001', 'pembeli' => 'Pembeli 1', 'penjualan_tanggal' => '2024-06-01'],
            ['penjualan_id' => 2, 'user_id' => 3, 'penjualan_kode' => 'PJ002', 'pembeli' => 'Pembeli 2', 'penjualan_tanggal' => '2024-06-02'],
            ['penjualan_id' => 3, 'user_id' => 3, 'penjualan_kode' => 'PJ003', 'pembeli' => 'Pembeli 3', 'penjualan_tanggal' => '2024-06-03'],
            ['penjualan_id' => 4, 'user_id' => 3, 'penjualan_kode' => 'PJ004', 'pembeli' => 'Pembeli 4', 'penjualan_tanggal' => '2024-06-04'],
            ['penjualan_id' => 5, 'user_id' => 3, 'penjualan_kode' => 'PJ005', 'pembeli' => 'Pembeli 5', 'penjualan_tanggal' => '2024-06-05'],
            ['penjualan_id' => 6, 'user_id' => 3, 'penjualan_kode' => 'PJ006', 'pembeli' => 'Pembeli 6', 'penjualan_tanggal' => '2024-06-06'],
            ['penjualan_id' => 7, 'user_id' => 3, 'penjualan_kode' => 'PJ007', 'pembeli' => 'Pembeli 7', 'penjualan_tanggal' => '2024-06-07'],
            ['penjualan_id' => 8, 'user_id' => 3, 'penjualan_kode' => 'PJ008', 'pembeli' => 'Pembeli 8', 'penjualan_tanggal' => '2024-06-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'penjualan_kode' => 'PJ009', 'pembeli' => 'Pembeli 9', 'penjualan_tanggal' => '2024-06-09'],
            ['penjualan_id' => 10, 'user_id' => 3, 'penjualan_kode' => 'PJ010', 'pembeli' => 'Pembeli 10', 'penjualan_tanggal' => '2024-06-10'],
            ['penjualan_id' => 11, 'user_id' => 3, 'penjualan_kode' => 'PJ011', 'pembeli' => 'Pembeli 11', 'penjualan_tanggal' => '2024-06-11'],
            ['penjualan_id' => 12, 'user_id' => 3, 'penjualan_kode' => 'PJ012', 'pembeli' => 'Pembeli 12', 'penjualan_tanggal' => '2024-06-12'],
            ['penjualan_id' => 13, 'user_id' => 3, 'penjualan_kode' => 'PJ013', 'pembeli' => 'Pembeli 13', 'penjualan_tanggal' => '2024-06-13'],
            ['penjualan_id' => 14, 'user_id' => 3, 'penjualan_kode' => 'PJ014', 'pembeli' => 'Pembeli 14', 'penjualan_tanggal' => '2024-06-14'],
            ['penjualan_id' => 15, 'user_id' => 3, 'penjualan_kode' => 'PJ015', 'pembeli' => 'Pembeli 15', 'penjualan_tanggal' => '2024-06-15'],
           ];

        DB::table('t_penjualan')->insert($data);
    }
}
