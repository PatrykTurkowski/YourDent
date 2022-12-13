<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect(['profilaktyka', 'endodoncja', 'stomatologia zachowawcza']);

        foreach ($categories as $category) {
            Category::factory()->create(
                ['name' => $category]
            );
        }
    }
}