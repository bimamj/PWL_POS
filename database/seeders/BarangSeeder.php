<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // ================= Makanan (kategori_id = 1)
            [
                'barang_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Indomie Goreng',
                'kategori_id' => 1,
                'harga_beli' => 2500,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Biskuit Roma Kelapa',
                'kategori_id' => 1,
                'harga_beli' => 7000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Chitato Sapi Panggang',
                'kategori_id' => 1,
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],

            // ================= Minuman (kategori_id = 2)
            [
                'barang_id' => 4,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Aqua Botol',
                'kategori_id' => 2,
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 5,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Teh Botol Sosro',
                'kategori_id' => 2,
                'harga_beli' => 4000,
                'harga_jual' => 5500,
            ],
            [
                'barang_id' => 6,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kopi Good Day',
                'kategori_id' => 2,
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],

            // ================= Elektronik (kategori_id = 3)
            [
                'barang_id' => 7,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Lampu LED',
                'kategori_id' => 3,
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 8,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Kabel USB Type-C',
                'kategori_id' => 3,
                'harga_beli' => 12000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id' => 9,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Stop Kontak',
                'kategori_id' => 3,
                'harga_beli' => 20000,
                'harga_jual' => 27000,
            ],

            // ================= ATK (kategori_id = 4)
            [
                'barang_id' => 10,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Pulpen Pilot',
                'kategori_id' => 4,
                'harga_beli' => 2500,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 11,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Buku Tulis Sidu',
                'kategori_id' => 4,
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 12,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Spidol Snowman',
                'kategori_id' => 4,
                'harga_beli' => 4000,
                'harga_jual' => 6500,
            ],

            // ================= Kebersihan (kategori_id = 5)
            [
                'barang_id' => 13,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Sabun Lifebuoy',
                'kategori_id' => 5,
                'harga_beli' => 3000,
                'harga_jual' => 4500,
            ],
            [
                'barang_id' => 14,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Pasta Gigi Pepsodent',
                'kategori_id' => 5,
                'harga_beli' => 7000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 15,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Detergen Rinso',
                'kategori_id' => 5,
                'harga_beli' => 15000,
                'harga_jual' => 19000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
