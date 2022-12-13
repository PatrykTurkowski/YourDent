<?php

namespace Database\Seeders;


use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(500)->create();
        User::factory()->count(1)->suspended()->create();
        User::factory()->count(1)->worker()->create();
        User::factory()->count(1)->user()->create();
    }
}