<?php

namespace Database\Factories;

use \App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneNumber
{
    public $number;
    public $type;
}

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{


    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $phone = new PhoneNumber();
        $phone->number = $this->faker->phoneNumber();
        $phone->type = $this->faker->randomElement(['home', 'cell']);

        $phone2 = new PhoneNumber();
        $phone2->number = $this->faker->phoneNumber();
        $phone2->type = $this->faker->randomElement(['cell', 'home']);

        $phone_numbers = [$phone, $phone2];


        return [
            'name' => $this->faker->name(),
            'phone_numbers' => $phone_numbers,
            'email' => $this->faker->email(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postCode()
        ];
    }
}
