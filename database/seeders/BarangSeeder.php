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
            ['kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Mainan', 'harga_beli' => 8000000, 'harga_jual' => 9000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Popok', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Sabun', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Shampoo', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Air Mineral', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Teh Botol', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Meja', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Kursi', 'harga_beli' => 100000, 'harga_jual' => 150000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
