<?php

namespace Database\Factories;

use App\Models\InvoicePosition;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoicePositionFactory extends Factory
{
    protected $model = InvoicePosition::class;

    public function definition()
    {
        return [
            'description' => $this->faker->sentence(),
            'tax' => $this->faker->randomFloat(2, 0, 23),
            'amount' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'invoice_id' => null, // Uzupełniane w seederze
        ];
    }
}
