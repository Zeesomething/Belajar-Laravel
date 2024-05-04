<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id' => 1, 'id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 5, 'tanggal' => '2017-04-19'],
            ['id' => 2, 'id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 7, 'tanggal' => '2017-05-20'],
            ['id' => 3, 'id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 10, 'tanggal' => '2017-06-21'],
            ['id' => 4, 'id_barang' => 3, 'id_pembeli' => 1, 'jumlah' => 10, 'tanggal' => '2017-07-22'],
            ['id' => 5, 'id_barang' => 2, 'id_pembeli' => 3, 'jumlah' => 9, 'tanggal' => '2017-08-23'],
            ['id' => 6, 'id_barang' => 1, 'id_pembeli' => 2, 'jumlah' => 5, 'tanggal' => '2017-09-24'],
        ];
        DB::table('transaksis')->insert($transaksis);

    }
}
