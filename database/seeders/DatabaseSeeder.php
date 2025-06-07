<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // USER
        User::factory()->create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08123456789',
            'password' => bcrypt('P@55word'),
        ]);
        User::factory()->create([
            'nama' => 'Zidan Herlangga',
            'email' => 'zidanherlangga@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '085161334009',
            'password' => bcrypt('zidanherlangga'),
        ]);
        User::factory()->create([
            'nama' => 'Novan Risqi',
            'email' => 'noavanrisqi@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '083895312862',
            'password' => bcrypt('novanrisqi'),
        ]);
        User::factory()->create([
            'nama' => 'Naufal Rafli',
            'email' => 'naufalrafli@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '089666201620',
            'password' => bcrypt('naufalrafli'),
        ]);
        User::factory()->create([
            'nama' => 'Gustiar Ilham',
            'email' => 'gustiarilham@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '085156428541',
            'password' => bcrypt('gustiarilham'),
        ]);
        User::factory()->create([
            'nama' => 'Rivaldy Zaky',
            'email' => 'rivaldyzaky@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '082122527889',
            'password' => bcrypt('rivaldyzaky'),
        ]);

        // KATEGORI
        Kategori::create([
            'nama_kategori' => 'Monitor'
        ]);
        Kategori::create([
            'nama_kategori' => 'Keyboard'
        ]);
        Kategori::create([
            'nama_kategori' => 'Flashdisk'
        ]);
        Kategori::create([
            'nama_kategori' => 'Mouse'
        ]);
        Kategori::create([
            'nama_kategori' => 'Cooling Pad'
        ]);
    }
}
