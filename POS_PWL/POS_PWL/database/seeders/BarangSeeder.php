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
        // Supplier 1
        ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Chiki Balls', 'harga_beli' => 4500, 'harga_jual' => 6000],
        ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Pringles', 'harga_beli' => 18000, 'harga_jual' => 22000],
        ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Beras 5kg', 'harga_beli' => 65000, 'harga_jual' => 75000],
        ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Minyak Goreng 2L', 'harga_beli' => 32000, 'harga_jual' => 36000],
        ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2500, 'harga_jual' => 4000],
        
        // Supplier 2
        ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Coca-Cola', 'harga_beli' => 5000, 'harga_jual' => 7000],
        ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Panadol', 'harga_beli' => 10000, 'harga_jual' => 13000],
        ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Antangin', 'harga_beli' => 3000, 'harga_jual' => 5000],
        ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 15000, 'harga_jual' => 20000],
        ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Pel Lantai', 'harga_beli' => 25000, 'harga_jual' => 35000],

        // Supplier 3
        ['barang_id' => 11, 'kategori_id' => 1, 'barang_kode' => 'BRG11', 'barang_nama' => 'Taro', 'harga_beli' => 4000, 'harga_jual' => 5500],
        ['barang_id' => 12, 'kategori_id' => 2, 'barang_kode' => 'BRG12', 'barang_nama' => 'Gula 1kg', 'harga_beli' => 14000, 'harga_jual' => 16500],
        ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BRG13', 'barang_nama' => 'Pocari Sweat', 'harga_beli' => 6000, 'harga_jual' => 8500],
        ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG14', 'barang_nama' => 'Sabun Cuci', 'harga_beli' => 18000, 'harga_jual' => 22000],
        ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Sikat Gigi', 'harga_beli' => 5000, 'harga_jual' => 7500],
    ];
    DB::table('m_barang')->insert($data);
    }
}
