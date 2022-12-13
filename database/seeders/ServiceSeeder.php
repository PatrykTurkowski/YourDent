<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::pluck('id')->all();

        for ($i = 1; $i < 15; $i++) {
            Service::factory(1)->create(
                [
                    'category_id' => array_rand($categories) + 1
                ]
            );
        }
    }
}