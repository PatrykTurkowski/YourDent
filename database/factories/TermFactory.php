<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Term;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\NullableType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Term>
 */
class TermFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [


            'date' => fake()->dateTime(),

        ];
    }
}