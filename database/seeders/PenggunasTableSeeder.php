<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['id'=>1,'nama'=>'apdu'],
            ['id'=>2,'nama'=>'alpin'],
            ['id'=>3,'nama'=>'aisha']
        ];
        DB::table('penggunas')->insert($penggunas);

    }
}
