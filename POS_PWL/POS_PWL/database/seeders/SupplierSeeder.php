<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['supplier_id' => 1, 'supplier_kode' => 'SPL1', 'supplier_nama' => 'PT. Sumber Makmur'],
        ['supplier_id' => 2, 'supplier_kode' => 'SPL2', 'supplier_nama' => 'CV. Jaya Abadi'],
        ['supplier_id' => 3, 'supplier_kode' => 'SPL3', 'supplier_nama' => 'PT. Sentosa Distribusi'],
    ];
    DB::table('m_supplier')->insert($data);
    }
}
