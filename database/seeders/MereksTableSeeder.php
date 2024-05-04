<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['id' => 1, 'nama_merek' => 'Apple'],
            ['id' => 2, 'nama_merek' => 'Xiaomi'],
            ['id' => 3, 'nama_merek' => 'Samsung'],
        ];
        DB::table('mereks')->insert($mereks);
    }
}
