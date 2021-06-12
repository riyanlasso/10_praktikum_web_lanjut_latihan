<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            'Nim' => '1941720203',
            'Nama' => 'Fitranza Akbar Sarrazin',
            'tanggallahir' => 20001227,
            'email' => 'riyanlasso@gmail.com',
            'kelas_id' => 9,
            'jurusan' => 'Teknologi Informasi',
            'no_handphone' => '082230909765',
        ];
        DB::table('mahasiswa')->insert($mhs);

        $khs = [
            ['mahasiswa_id' => 1941720178, 'matakuliah_id' => 1, 'nilai' => 'B'],
            ['mahasiswa_id' => 1941720178, 'matakuliah_id' => 2, 'nilai' => 'A'],
            ['mahasiswa_id' => 1941720178, 'matakuliah_id' => 3, 'nilai' => 'B'],
            ['mahasiswa_id' => 1941720178, 'matakuliah_id' => 4, 'nilai' => 'A'],
        ];
        DB::table('mahasiswa_matakuliah')->insert($khs);
    }
}
