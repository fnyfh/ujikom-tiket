<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[
            [
                'nama_petugas'=>'Choi Hyunsuk',
                'username'=>'hyunsuk',
                'password'=>Hash::make('1234567'),
                'id_level'=>2,
            ],

            [
                'nama_petugas'=>'Haruto',
                'username'=>'haru',
                'password'=>Hash::make('ruto123'),
                'id_level'=>1,
            ],
        ];

        Petugas::truncate();
        Petugas::insert($array);
    }
}
