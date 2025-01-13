<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'number' => $this->faker->unique()->numerify('INV-####'),
            'date_sale' => $this->faker->date(),
            'date_receive' => $this->faker->optional()->date(),
            'customer_id' => null, // Uzupełniane w seederze
        ];
    }
}

