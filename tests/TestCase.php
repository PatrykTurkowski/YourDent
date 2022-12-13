<?php

namespace Tests;

use App\Models\Doctor;
use App\Models\Term;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;



    protected function admin()
    {
        return User::factory()->suspended()->create([
            'email' => fake()->email()
        ]);
    }
    protected function worker()
    {
        return User::factory()->worker()->create([
            'email' => fake()->email()
        ]);
    }
    protected function user()
    {
        return User::factory()->user()->create([
            'email' => fake()->email()
        ]);
    }
}