<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('test'),
        ]);
        \App\Models\Paket::create([
            'title' => 'Paket Dasar 1',
            'subtitle' => 'Full Fiber To The Home',
            'kecepatan' => 10,
            'harga' => 150,
            'include' => 'Up to 250,000 tracked visits',

        ]);
        \App\Models\Home::create([
            'title' => 'Test User',
            'subtitle' => 'test@example.com',
            'bg_image' => 'home-bg.jpg',
            'karyawan' => 67,
            'user' => 1500,
            'partner' => 20,
            'keunggulan' => 'Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus ultricies tempor. Tempor amet enim risus non.',
            'visi' => 'Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus ultricies tempor. Tempor amet enim risus non.',
            'misi' => 'Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus ultricies tempor. Tempor amet enim risus non.',
        ]);
    }
}