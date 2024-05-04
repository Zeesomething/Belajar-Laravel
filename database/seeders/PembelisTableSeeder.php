<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['id' => 1, 'nama_pembeli' => 'Wandi', 'jenis_kelamin' => 'Laki-laki'],
            ['id' => 2, 'nama_pembeli' => 'Aisha', 'jenis_kelamin' => 'Perempuan'],
            ['id' => 3, 'nama_pembeli' => 'Surya', 'jenis_kelamin' => 'Laki-laki'],
        ];
        DB::table('pembelis')->insert($pembelis);
    }
}
