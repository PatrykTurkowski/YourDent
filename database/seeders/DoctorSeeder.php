<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Doctor;


use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::pluck('id')->all();


        for ($i = 0; $i < count($categories); $i++)
            Doctor::factory(1)->create([
                'category_id' => $categories[$i]
            ]);
    }
}