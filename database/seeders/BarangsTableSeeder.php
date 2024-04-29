<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' => 'Odol', 'jumlah' => 10],
            ['nama_barang' => 'Makanan', 'jumlah' => 100],
            ['nama_barang' => 'Minuman', 'jumlah' => 1000],
        ];
        DB::table('barangs')->insert($barangs);

    }
}
