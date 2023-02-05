<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhoneNumber>
 */
class PhoneNumberFactory extends Factory
{

    protected $model = PhoneNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['home', 'cell', 'fax']);

        return [
            'customer_id' => Customer::factory(),
            'number' => $this->faker->phoneNumber(),
            'type' => $type,
        ];
    }
}
