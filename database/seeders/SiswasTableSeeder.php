<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            
            ['nama_siswa' => 'Wandi', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Sayuran', 'agama' => 'Islam', 'telepon' => 123456, 'email' => 'wandi@gmail.com'],
            ['nama_siswa' => 'Radin', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => 123457, 'email' => 'radin@gmail.com'],
            ['nama_siswa' => 'Abdu', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => 123458, 'email' => 'abdu@gmail.com'],
            ['nama_siswa' => 'Zahran', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => 123459, 'email' => 'zahran@gmail.com'],
            ['nama_siswa' => 'Alvin', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => 123460, 'email' => 'alpin@gmail.com'],
            ['nama_siswa' => 'Robby', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Cangkuang', 'agama' => 'Islam', 'telepon' => 123461, 'email' => 'robby@gmail.com'],
            ['nama_siswa' => 'Surya', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Sukamenak', 'agama' => 'Islam', 'telepon' => 123462, 'email' => 'surya@gmail.com'],
            ['nama_siswa' => 'Faiz', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Sayati', 'agama' => 'Islam', 'telepon' => 123463, 'email' => 'faiz@gmail.com'],
            ['nama_siswa' => 'Bisma', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Inhoftank', 'agama' => 'Islam', 'telepon' => 123464, 'email' => 'bisma@gmail.com'],
            ['nama_siswa' => 'Ali', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'BMI', 'agama' => 'Islam', 'telepon' => 123465, 'email' => 'ali@gmail.com']
            
        ];

        DB::table('siswas')->insert($siswas);

    }
}
