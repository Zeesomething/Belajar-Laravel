<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'Iphone 17 Pro Max', 'jumlah' => 10, 'tanggal_produksi' => '2027-06-12', 'id_merek' => 1],
            ['nama_produk' => 'Ipad 5 Air Pro', 'jumlah' => 10, 'tanggal_produksi' => '2026-08-15', 'id_merek' => 1],
            ['nama_produk' => 'Poco F5', 'jumlah' => 100, 'tanggal_produksi' => '2023-05-16', 'id_merek' => 2],
            ['nama_produk' => 'Poco X6', 'jumlah' => 1000, 'tanggal_produksi' => '2024-07-18', 'id_merek' => 2],
            ['nama_produk' => 'Samsung S25 Ultra', 'jumlah' => 109, 'tanggal_produksi' => '2028-03-10', 'id_merek' => 3],
            ['nama_produk' => 'Samsung S26 Ultra', 'jumlah' => 1067, 'tanggal_produksi' => '2027-02-20', 'id_merek' => 3],
        ];
        DB::table('produks')->insert($produks);
    }
}
