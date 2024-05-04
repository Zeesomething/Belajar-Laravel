<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Barangg2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangg2s = [
            ['id' => 1, 'nama_barang' => 'HandPhone', 'harga' => 1000000, 'stok' => 50],
            ['id' => 2, 'nama_barang' => 'Sepatu', 'harga' => 100000, 'stok' => 100],
            ['id' => 3, 'nama_barang' => 'Celana', 'harga' => 100000, 'stok' => 110],
        ];
        DB::table('barangg2s')->insert($barangg2s);
    }
}
