<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        // Tworzymy 10 klientów
        Customer::factory(10)->create();
    }
}

