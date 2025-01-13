<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        // Pobieramy wszystkich klientów i przypisujemy im faktury
        Customer::all()->each(function ($customer) {
            Invoice::factory(5)->create(['customer_id' => $customer->id]);
        });
    }
}

