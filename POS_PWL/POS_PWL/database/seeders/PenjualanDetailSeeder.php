<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        // Looping 10 transaksi
        for ($i = 1; $i <= 10; $i++) {
            // Setiap transaksi ada 3 barang berbeda
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = rand(1, 15);
                $harga = DB::table('m_barang')->where('barang_id', $barang_id)->value('harga_jual');

                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
