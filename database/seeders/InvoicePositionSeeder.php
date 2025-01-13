<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\InvoicePosition;
use Illuminate\Database\Seeder;

class InvoicePositionSeeder extends Seeder
{
    public function run()
    {
        // Pobieramy wszystkie faktury i przypisujemy im pozycje
        Invoice::all()->each(function ($invoice) {
            InvoicePosition::factory(3)->create(['invoice_id' => $invoice->id]);
        });
    }
}

