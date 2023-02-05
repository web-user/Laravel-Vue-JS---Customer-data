<?php

namespace Database\Seeders;

use App\Models\Customer; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->count(25)->hasPhoneNumbers(4)->create();

        Customer::factory()->count(50)->hasPhoneNumbers(3)->create();

        Customer::factory()->count(5)->create();
    }
}
