<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = fake()->date('ymd');
        $gender = rand(0, 9);

        return [
            'name' => $gender % 2 == 0 ? fake()->firstNameFemale() : fake()->firstNameMale(),
            'surname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'pesel' => $date  . $this->pesel() . $gender,
            'date_of_birth' => $date,
            'city' => fake()->city(),
            'street' => fake()->streetName(),
            'street_number' => fake()->numberBetween(1, 1000),
            'apartment_number' => fake()->numberBetween(1, 10000),
            'postcode' => '05-091',
            'email_verified_at' => now(),
            'password' => '$2y$10$K.PJj5KvvzTP2adID24l7ObUxudhzTzy94D6NLThy0Mp7C4.agmwS', // password

            'remember_token' => Str::random(10),
        ];
    }
    /**
     * Indicate that the user is suspended.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function suspended()
    {
        return $this->state(function (array $attributes) {
            return [

                'name' => 'Admin',
                'surname' => 'Admin',
                'email' => 'admin@example.pl',
                'email_verified_at' => now(),
                'password' => '$2y$10$K.PJj5KvvzTP2adID24l7ObUxudhzTzy94D6NLThy0Mp7C4.agmwS',
                'role' => '1',
                'remember_token' => '1234567890',
                'phone_number' => null,
                'pesel' => null,
                'date_of_birth' => null,
                'city' => null,
                'street' => null,
                'street_number' => null,
                'apartment_number' => null,
                'postcode' => null,

            ];
        });
    }
    /**
     * Indicate that the user is worker.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function worker()
    {
        return $this->state(function (array $attributes) {
            return [

                'name' => 'Worker',
                'surname' => 'Worker',
                'email' => 'worker@example.pl',
                'email_verified_at' => now(),
                'password' => '$2y$10$K.PJj5KvvzTP2adID24l7ObUxudhzTzy94D6NLThy0Mp7C4.agmwS',
                'role' => '2',
                'remember_token' => '1234567890',
                'phone_number' => null,
                'pesel' => null,
                'date_of_birth' => null,
                'city' => null,
                'street' => null,
                'street_number' => null,
                'apartment_number' => null,
                'postcode' => null,
            ];
        });
    }
    public function user()
    {
        return $this->state(function (array $attributes) {
            $date = fake()->date('ymd');
            $gender = rand(0, 9);
            return [

                'name' => 'Patryk',
                'surname' => 'Turkowski',
                'email' => 'user@example.pl',
                'phone_number' => fake()->unique()->phoneNumber(),
                'pesel' => $date  . $this->pesel() . $gender,
                'date_of_birth' => '1998-01-01',
                'city' => 'Dolne',
                'street' => 'Kolejowe',
                'street_number' => '12',
                'apartment_number' => null,
                'postcode' => '05-090',
                'email_verified_at' => now(),
                'password' => '$2y$10$K.PJj5KvvzTP2adID24l7ObUxudhzTzy94D6NLThy0Mp7C4.agmwS',
                'role' => '3',
                'remember_token' => '1234567890',
            ];
        });
    }





    private function pesel()
    {
        $results = '';
        for ($i = 0; $i < 4; $i++) {
            $results .= rand(0, 9);
        }
        return $results;
    }


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}