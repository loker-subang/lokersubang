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
            ['name' => "Kota Bekasi", 'salary' => ' 5343430'],
            ['name' => "Karawang", 'salary' => ' 5257834 '],
            ['name' => "Bekasi", 'salary' => '5219263'],
            ['name' => "Purwakarta", 'salary' => ' 4499768'],
            ['name' => "Subang", 'salary' => ' 3294485'],
            ['name' => "Indramayu", 'salary' => ' 2623697'],
            ['name' => "Majalengka", 'salary' => ' 2257871'],
            ['name' => "Cirebon", 'salary' => '2533038'],
            ['name' => "Bandung", 'salary' => '4209309'],
            ['name' => "Bandung Barat", 'salary' => '3508677'],
            ['name' => "Bogor", 'salary' => '4813988']
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
