<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon'=> '08189832191','pengguna_id'=> 1],
            ['nomor_telepon'=> '08189832192','pengguna_id'=> 2],
            ['nomor_telepon'=> '08189832193','pengguna_id'=> 3]
        ];
        DB::table('telepons')->insert($telepons);

    }
}
