<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Depo Mayar Jaya Gresik',
            'username' => 'depomayar',
            'nomer_telepon' => '6281268767765',
            'alamat' => 'Kabupaten Gresik',
            'password' => bcrypt('12345678'),
        ]);
    }
}
