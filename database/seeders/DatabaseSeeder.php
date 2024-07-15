<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $category = [
            ['name' => 'Lowongan Kerja', 'slug' => 'lowongan-kerja'],
            ['name' => 'Magang', 'slug' => 'magang'],
            ['name' => 'Pelatihan', 'slug' => 'pelatihan'],
            ['name' => 'Informasi', 'slug' => 'informasi'],
        ];

        foreach ($category as $categori) {
            Category::create($categori);
        }

        $city = [
            ['city' => "Kota Bekasi", 'salary' => ' 5343430'],
            ['city' => "Karawang", 'salary' => ' 5257834 '],
            ['city' => "Bekasi", 'salary' => '5219263'],
            ['city' => "Purwakarta", 'salary' => ' 4499768'],
            ['city' => "Subang", 'salary' => ' 3294485'],
            ['city' => "Indramayu", 'salary' => ' 2623697'],
            ['city' => "Majalengka", 'salary' => ' 2257871'],
            ['city' => "Cirebon", 'salary' => '2533038'],
            ['city' => "Bandung", 'salary' => '4209309'],
            ['city' => "Bandung Barat", 'salary' => '3508677'],
            ['city' => "Bogor", 'salary' => '4813988']
        ];

        foreach ($city as $c) {
            City::create($c);
        }


        \App\Models\User::factory()->create([
            'name' => 'Dadan Nurmaulana',
            'email' => 'ddn@gmail.com',
        ]);
    }
}
