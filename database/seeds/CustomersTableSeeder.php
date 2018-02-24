<?php

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach(range(1, Helpers::NUMBER_OF_CUSTOMERS) as $i) {
        $faker = \Faker\Factory::create();
        Customer::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'city' => $faker->city,
          'address' => $faker->address
        ]);
      }
    }
}
