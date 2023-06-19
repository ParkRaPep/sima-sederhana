<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nim' => 'G.231.21.0176',
            'nama' => 'Jude Bellingham',
            'jurusan' => 'Teknik Informatika',
            'email' => 'judebellingham5@gmail.com'
        ]);
    }
}
